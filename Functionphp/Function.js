document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.querySelector('.file-input');
    const reportTextarea = document.querySelector('.report-textbox');
    const submitButton = document.querySelector('.submit-button');

    // Event listener for file input change
    fileInput.addEventListener('change', function() {
        const formData = new FormData();
        const files = this.files;
        
        for (let i = 0; i < files.length; i++) {
            formData.append('files[]', files[i]);
        }

        fetch('Upload.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Display uploaded file names
            data.forEach(fileName => {
                const fileNameElem = document.createElement('p');
                fileNameElem.textContent = fileName;
                document.body.appendChild(fileNameElem);
            });
        })
        .catch(error => console.error('Error uploading files:', error));
    });

    // Event listener for form submission
    submitButton.addEventListener('click', function(event) {
        event.preventDefault();
        
        const report = reportTextarea.value.trim();
        
        if (report !== '') {
            fetch('submit_report.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'report=' + encodeURIComponent(report)
            })
            .then(response => response.text())
            .then(data => {
                // Display submission message
                console.log('Report submitted:', data);
            })
            .catch(error => console.error('Error submitting report:', error));
        } else {
            console.log('Please fill out the report.');
        }
    });
});
