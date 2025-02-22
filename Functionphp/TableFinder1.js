function filterTable(searchTerm, filterBy) {
    // Get table reference
    var table = document.getElementById("myTable");
    var tbody = table.getElementsByTagName("tbody")[0];
    var rows = tbody.getElementsByTagName("tr");
  
    // Clear any previous filtering
    for (var i = 0; i < rows.length; i++) {
      rows[i].style.display = "";
    }
  
    // Filter by search term (if provided)
    if (searchTerm) {
      searchTerm = searchTerm.toLowerCase();
      for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var found = false;
        for (var j = 0; j < cells.length; j++) {
          var cellText = cells[j].textContent || cells[j].innerText;
          if (cellText.toLowerCase().indexOf(searchTerm) !== -1) {
            found = true;
            break;
          }
        }
        if (!found) {
          rows[i].style.display = "none";
        }
      }
    }
  
    // Filter by grade and section (if provided)
    if (filterBy) {
      for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var filterMatch = false;
        if (filterBy === "JHS" || filterBy === "SHS") {
          // Check for Grade and Section match
          filterMatch = cells[1].textContent.toLowerCase().indexOf(filterBy.toLowerCase()) !== -1;
        } else if (filterBy.includes("Grade")) {
          // Check for specific grade within SHS (Academic/Tech-Voc)
          filterMatch = cells[1].textContent.toLowerCase().indexOf(filterBy.toLowerCase()) !== -1;
        }
        if (!filterMatch) {
          rows[i].style.display = "none";
        }
      }
    }
  }
  
  // Event listeners for search and filter buttons (adjust IDs as needed)
  document.getElementById("searchInput").addEventListener("keyup", function() {
    var searchTerm = this.value;
    filterTable(searchTerm, null); // Clear filterBy if searching
  });
  
  document.getElementById("filterJHS").addEventListener("click", function() {
    filterTable(null, "JHS");
  });
  
  document.getElementById("filterSHS").addEventListener("click", function() {
    filterTable(null, "SHS");
  });
  
  // ... add event listeners for other filter buttons (Academic/Tech-Voc grades)
  
  // Call filterTable on page load (optional)
  window.onload = function() {
    filterTable(null, null); // No initial filtering/sorting
  };
  