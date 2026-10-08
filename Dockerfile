FROM php:8.4-fpm

# Install system dependencies & Node.js 22.x
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl nginx \
    && curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Install PHP & Node dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

# Create SQLite database & run migrations
RUN touch database/database.sqlite
RUN php artisan migrate --force

# Optimize Laravel cache for production
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Set file permissions for Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]