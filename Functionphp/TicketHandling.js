function fetchAndDisplayTickets(filters = {}) {
  fetch('../HTMLphp/tickets.json') // Fetch the JSON registry
    .then(response => response.json())
    .then(tickets => {
      const ticketContainer = document.getElementById('Ticket-Container');
      ticketContainer.innerHTML = ''; // Clear existing links

      // Filter tickets based on search form inputs
        const filteredTickets = tickets.filter(ticket => {
            const ticketNumberFilter = String(filters.ticketNumber || '');
            const natureFilter = filters.nature || '';
            const officeFilter = filters.office || '';
            const dateFilter = filters.date || '';
            const incidentDateFilter = filters.incidentDate || '';

            if (ticketNumberFilter && !String(ticket.number).startsWith(ticketNumberFilter)) return false;
            if (natureFilter && ticket.nature !== natureFilter) return false;
            if (officeFilter && ticket.office !== officeFilter) return false;
            if (dateFilter && ticket.date !== dateFilter) return false;
            if (incidentDateFilter && ticket.Idate !== incidentDateFilter) return false;

        return true;
      });

      // Display filtered tickets
      if (filteredTickets.length === 0) {
        ticketContainer.innerHTML = '<p>No tickets found matching the criteria.</p>';
        return;
      }

      tickets.forEach(ticket => {
        const link = createTicketLink(ticket.number, ticket.nature, ticket.date);
        ticketContainer.appendChild(link);
      });
    })
    .catch(error => {
      console.error('Error fetching tickets:', error);
    });
}

function createTicketLink(ticketNumber, nature, date) {
  const link = document.createElement('a');
  link.href = `../Tickets/Ticket_${ticketNumber}.php`; // Replace with your actual ticket URL
  link.className = 'ticket-link';
  link.textContent = `Ticket #${ticketNumber}: ${nature} - ${date}`;
  link.style.display = 'block';
  return link;
}

window.addEventListener('DOMContentLoaded', () => {
  fetchAndDisplayTickets();

  const searchForm = document.getElementById('searchForm');

    searchForm.addEventListener('input', () => {
        handleSearchChange();
    });
    searchForm.addEventListener('change', () => {
        handleSearchChange();
    });

    function handleSearchChange() {
      const filters = {
        ticketNumber: document.getElementById('ticketNumber').value.trim(),
        nature: document.getElementById('natureSearch').value,
        office: document.getElementById('officeSearch').value,
        date: document.getElementById('dateSearch').value,
        incidentDate: document.getElementById('incidentDateSearch').value,
      };
    
      console.log(filters); // Debugging line
    
      fetchAndDisplayTickets(filters); // Pass filters to the function
    }
});