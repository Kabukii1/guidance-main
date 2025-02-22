<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/TStyle.css"/>
</head>
<body>
    <div class="SContainer">
        <div class="Searchbar">
            <input type="text" placeholder="Search..." id="searchInput">
            <button onclick="filterFunction()" id="searchBtn"><i class="fa fa-search"></i></button>
        </div>
        <div class="Dropdown">
            <button>Filter by Grade and Section</button>
            <div class="Dropdown-content">
                <div class="JHS">
                    <button onclick="filterJHS(event)">JHS</button>
                    <div class="JHS-content">
                        <a href="#">Grade 7</a>
                        <a href="#">Grade 8</a>
                        <a href="#">Grade 9</a>
                        <a href="#">Grade 10</a>
                    </div>
                </div>
                <div class="SHS">
                    <button onclick="filterSHS(event)">SHS</button>
                    <div class="SHS-content">
                        <div class="Academic">
                            <button onclick="filterAcademic(event)">Academic Strands</button>
                            <div class="Academic-content">
                                <a href="#">Grade 11 STEM</a>
                                <a href="#">Grade 11 HUMMS</a>
                                <a href="#">Grade 11 GAS</a>
                                <a href="#">Grade 12 STEM</a>
                                <a href="#">Grade 12 HUMMS</a>
                                <a href="#">Grade 12 GAS</a>
                            </div>
                        </div>
                        <div class="Tech-Voc">
                            <button onclick="filterTechVoc(event)">Tech-Voc Strands</button>
                            <div class="Tech-Voc-content">
                                <a href="#">Grade 11 ICT</a>
                                <a href="#">Grade 11 HE</a>
                                <a href="#">Grade 12 ICT</a>
                                <a href="#">Grade 12 HE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Filter">
            <button>A-Z</button>
            <button>Z-A</button>
        </div>
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
            <tr>
                <td>John Doe</td>
                <td>Grade 11, STEM</td>
                <td>SHS</td>
                <td>1234567</td>
                <td>123456789012</td>
                <td><a href="#">Link to Past Case 1</a></td>
                <td><a href="#">Link to Current Case 1</a></td>
                <td><input type="checkbox"></td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>Grade 9, 9 Sun</td>
                <td>JHS</td>
                <td>8765432</td>
                <td>098765432109</td>
                <td><a href="#">Link to Past Case 1</a></td>
                <td><a href="#">Link to Current Case 1</a></td>
                <td><input type="checkbox"></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <script src="../Functionphp/TableFinder.js"></script>
</body>
</html>
