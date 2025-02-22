<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/TStyle.css">  </head>
<body>
  <div class="container">  <div class="search-bar">
      <input type="text" placeholder="Search Students..." id="searchInput">
      <button onclick="filterTable(null, null)"><i class="fas fa-search"></i> Search</button>
    </div>
    <div class="filter-dropdown">
      <select id="filterBy">
        <option value="">All Students</option>
        <option value="JHS">Junior High School</option>
        <option value="SHS">Senior High School</option>
        </select>
      <button onclick="filterTable()">Apply Filter</button>
    </div>
    <div class="sort-buttons">
      <button onclick="sortTable('asc')">A-Z</button>
      <button onclick="sortTable('desc')">Z-A</button>
      </div>
    <table id="myTable">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Grade and Section</th>
          <th>School Type</th>
          <th>Student Number</th>
          <th>LRN</th>
          <th>Past Cases</th>
          <th>Current Cases</th>
          <th>Troublesome Student?</th>
        </tr>
      </thead>
      <tbody>
        </tbody>
    </table>
  </div>
  <script src="../Functionphp/TableFinder1.js"></script>  </body>
</html>
