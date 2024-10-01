$(document).ready(function() {
    $('#cities-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "http://127.0.0.1:8000/index",
            type: "GET",
            dataType: 'json',
            error: function(xhr, error, thrown) {
                console.error("Error fetching data: ", error);
                alert("Failed to load data. Please try again later.");
            }
        },
        columns: [
            { data: 'name', name: 'name' }, 
            { data: 'state', name: 'state' },   
            { data: 'country', name: 'country' }
        ],
        responsive: true
    });
});
