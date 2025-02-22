document.getElementById('file-input').addEventListener('change', function() {
    updateFileNames();
});

function updateFileNames() {
    var fileInputs = document.querySelectorAll('.file-input');
    var fileNamesContainer = document.getElementById('file-names');
    var fileNamesCount = {}; // Object to store the count of each file name
    fileNamesContainer.innerHTML = ''; // Clear previous content

    fileInputs.forEach(function(input) {
        var files = input.files;

        for (var i = 0; i < files.length; i++) {
            var fileName = files[i].name;

            if (fileNamesCount[fileName]) {
                // If file name already exists, increment the count
                fileNamesCount[fileName]++;
            } else {
                // If file name doesn't exist, set count to 1
                fileNamesCount[fileName] = 1;
            }

            var counter = fileNamesCount[fileName] > 1 ? '(' + fileNamesCount[fileName] + ') ' : ''; // Add counter if count > 1

            var fileNameElement = document.createElement('span');
            fileNameElement.textContent = counter + fileName; // Append counter to file name if needed
            fileNamesContainer.appendChild(fileNameElement);

            // Add a comma and space if it's not the last file name
            if (i < files.length - 1) {
                fileNamesContainer.appendChild(document.createTextNode(', '));
            }
        }
    });
}

document.getElementById('file-input').addEventListener('change', function() {
    var pfnElement = document.querySelector('.PFN');
    if (pfnElement) {
        pfnElement.style.display = 'none';
    }
});
