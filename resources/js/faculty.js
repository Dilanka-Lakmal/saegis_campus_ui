// Faculty page scripts (Member 2)




document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("staffSearch");
  const staffGrid = document.getElementById("staffGrid");
  const noResults = document.getElementById("noResults");
  const searchMessage = document.getElementById("searchMessage");

  if (!searchInput || !staffGrid || !noResults || !searchMessage) {
    return;
  }
 
  const staffCards = Array.from(
    staffGrid.querySelectorAll(".staff-card")
  );

  function filterStaff() {
    const query = searchInput.value.trim().toLowerCase();
    let visibleCount = 0;

    staffCards.forEach((card) => {
      const searchableText = card.textContent.toLowerCase();
      const matches = searchableText.includes(query);

      card.hidden = !matches;

      if (matches) {
        visibleCount++;
      }
    });

    noResults.hidden = visibleCount !== 0;

    if (query === "") {
      searchMessage.textContent =
        `${visibleCount} academic staff members displayed.`;
    } else {
      searchMessage.textContent =
        `${visibleCount} matching staff member(s) found.`;
    }
  }

  searchInput.addEventListener("input", filterStaff);

  filterStaff();
});
