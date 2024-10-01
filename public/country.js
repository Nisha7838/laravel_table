$(document).ready(function() {
    
    // Populate states based on selected country
    $('#country').change(function() {
        const countryId = $(this).val();
        $('#state').empty().append('<option value="">Select State</option>');
        $('#city').empty().append('<option value="">Select City</option>'); // Reset cities

        $.ajax({
            url: `http://127.0.0.1:8000/api/states/${countryId}`, // Change this to your actual endpoint
            method: 'GET',
            success: function(data) {
                $.each(data, function(index, state) {
                    $('#state').append(`<option value="${state.id}">${state.name}</option>`);
                });
            }
        });
    });

    // Populate cities based on selected state
    $('#state').change(function() {
        const stateId = $(this).val();
        $('#city').empty().append('<option value="">Select City</option>');
        $.ajax({
            url: `http://127.0.0.1:8000/api/cities/${stateId}`, // Change this to your actual endpoint
            method: 'GET',
            success: function(data) {
                $.each(data, function(index, city) {
                    $('#city').append(`<option value="${city.id}">${city.name}</option>`);
                });
            }
        });
    });
});