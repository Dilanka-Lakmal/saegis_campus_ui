<div id="topbar" class="bg-dark text-white py-2 border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Contact Info (Left) -->
        <div class="d-flex align-items-center gap-4 small">
            <div class="d-flex align-items-center gap-2">
                <i class="far fa-envelope text-info"></i>
                <span>info@saegis.ac.lk</span>
            </div>
            <div class="d-flex align-items-center gap-2">
                <i class="fas fa-phone-volume text-info"></i>
                <span>+94 770430000 / +94 117430000</span>
            </div>
        </div>

        <!-- Right Side: Student Portal & Search -->
        <div class="d-flex align-items-center gap-3">
            <!-- Student Portal Button (Opens Modal) -->
            <button type="button" class="btn btn-sm btn-outline-light d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#studentPortalModal">
                <i class="fas fa-user text-info"></i>
                <span>Student Portal</span>
            </button>

            <!-- Search Bar -->
            <form action="#" method="GET" class="d-none d-md-block">
                <div class="input-group input-group-sm">
                    <input type="text" name="query" class="form-control form-control-sm rounded-pill px-3" placeholder="Search..." aria-label="Search">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Student Portal Modal -->
<div class="modal fade" id="studentPortalModal" tabindex="-1" aria-labelledby="studentPortalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="studentPortalModalLabel">Student Portal - Saegis Campus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row g-3">
                    <div class="col-md-4">
                        <a href="http://portal.saegis.ac.lk/" target="_blank" class="btn btn-primary w-100 py-3 text-decoration-none">
                            <i class="fa fa-user-graduate fs-3 mb-2"></i><br>
                            <strong>Student Portal</strong>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://lms.saegis.ac.lk/" target="_blank" class="btn btn-success w-100 py-3 text-decoration-none">
                            <i class="fa fa-book fs-3 mb-2"></i><br>
                            <strong>LMS</strong>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://login.microsoftonline.com/" target="_blank" class="btn btn-info text-white w-100 py-3 text-decoration-none">
                            <i class="fa fa-cloud fs-3 mb-2"></i><br>
                            <strong>O365 Login</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>