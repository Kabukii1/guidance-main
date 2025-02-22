function filterFunction() {
    var input = document.getElementById("searchInput").value.toLowerCase();
    var rows = document.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var found = false;
        for (var j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().indexOf(input) > -1) {
                found = true;
                break;
            }
        }
        if (!found) {
            rows[i].style.display = "none";
        } else {
            rows[i].style.display = "";
        }
    }
}

function filterJHS(event) {
    var dropdown = event.target.nextElementSibling;
    var selectedValue = dropdown.getElementsByTagName("a")[dropdown.selectedIndex].innerText;
    var selectedRows = [];
    var rows = document.getElementsByTagName("tr");
    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        if (cells[1].innerText.toLowerCase().indexOf(selectedValue.toLowerCase()) > -1) {
            selectedRows.push(rows[i]);
        }
    }
    for (var i = 1; i < rows.length; i++) {
        rows[i].style.display = "none";
    }
    for (var i = 0; i < selectedRows.length; i++) {
        selectedRows[i].style.display = "";
    }
}

function filterSHS(event) {
    var dropdown = event.target.nextElementSibling;
    var selectedValue = dropdown.getElementsByTagName("a")[dropdown.selectedIndex].innerText;
    var selectedRows = [];
    var rows = document.getElementsByTagName("tr");
    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        if (cells[1].innerText.toLowerCase().indexOf(selectedValue.toLowerCase()) > -1) {
            selectedRows.push(rows[i]);
        }
    }
    for (var i = 1; i < rows.length; i++) {
        rows[i].style.display = "none";
    }
    for (var i = 0; i < selectedRows.length; i++) {
        selectedRows[i].style.display = "";
    }
}

function filterAcademic(event) {
    var dropdown = event.target.nextElementSibling;
    var selectedValue = dropdown.getElementsByTagName("a")[dropdown.selectedIndex].innerText;
    var selectedRows = [];
    var rows = document.getElementsByTagName("tr");
    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        if (cells[1].innerText.toLowerCase().indexOf(selectedValue.toLowerCase()) > -1) {
            selectedRows.push(rows[i]);
        }
    }
    for (var i = 1; i < rows.length; i++) {
        rows[i].style.display = "none";
    }
    for (var i = 0; i < selectedRows.length; i++) {
        selectedRows[i].style.display = "";
    }
}

function filterTechVoc(event) {
    var dropdown = event.target.nextElementSibling;
    var selectedValue = dropdown.getElementsByTagName("a")[dropdown.selectedIndex].innerText;
    var selectedRows = [];
    var rows = document.getElementsByTagName("tr");
    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        if (cells[1].innerText.toLowerCase().indexOf(selectedValue.toLowerCase()) > -1) {
            selectedRows.push(rows[i]);
        }
    }
    for (var i = 1; i < rows.length; i++) {
        rows[i].style.display = "none";
    }
    for (var i = 0; i < selectedRows.length; i++) {
        selectedRows[i].style.display = "";
    }
}

// Call the filter function when the page loads
window.onload = filterFunction;