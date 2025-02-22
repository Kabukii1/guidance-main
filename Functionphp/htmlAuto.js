function fetchAndDisplayHtml() {
    fetch('temp_report.html')
      .then(response => response.text())
      .then(html => {
        // Display the fetched HTML in a specific element
        document.getElementById('report-container').innerHTML = html;
      })
      .catch(error => {
        console.error('Error fetching HTML:', error);
      });
  }
  
  // Trigger the function after form submission
  if (isset($_POST['submit'])) {
    // ... (existing code to process form data and save HTML)
    fetchAndDisplayHtml();
  }