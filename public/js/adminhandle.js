$(document).ready(function(){
    //Movie status
    // get id for movie status delete
    $(document).on('click','.delete-status-btn', function(){
        var IDStatus = $(this).data('status-id');
        console.log(IDStatus);
        $('#deleteStatusID').val(IDStatus);
    });
    // get id for movie status edit
    $(document).on('click','.edit-status-btn', function(){
        var IDStatus = $(this).data('status-id');
        $('#editStatusID').val(IDStatus);
        $.ajax({
            url: '/admin/moviestatus/getMovieStatus/' + IDStatus,
            type: 'GET',
            success: function(data){
                $('#status_name').val(data.StatusName);
            }
            
        });      
    });
    $('#searchMovieStatus').on('input', function () {
        var searchTerm = $(this).val().trim();
        $.ajax({
            url: '/admin/moviestatus/searchMovieStatus/' + searchTerm,
            type: 'GET',
            success: function (data) {
                $('#data-body').empty();
                $.each(data, function (index, movie_status) {
                    console.log(movie_status);
                    var row = '<tr>' +
                    '<th scope="row" class="text-center align-middle">' + movie_status.IDStatus + '</th>' +
                    '<td scope="row" class="text-center align-middle">' + movie_status.StatusName + '</td>' +
                    '<td scope="row" class="align-middle">' +
                        '<a class="col btn btn-secondary edit-status-btn" data-bs-toggle="modal" data-bs-target="#editStatusMovie" data-status-id="' + movie_status.IDStatus + '">Edit</a>' +
                        '<a class="col btn btn-danger delete-status-btn" data-bs-toggle="modal" data-bs-target="#deleteStatusMovie" data-status-id="' + movie_status.IDStatus + '">Delete</a>' +
                    '</td>' +
                '</tr>';
                $('#data-body').append(row);
                });
            }
        });
    });

   // Movie
   $(document).on('click','.edit-movie-btn', function(){
        var MovieID = $(this).data('movie-id');
        $('#editMovieID').val(MovieID);
        $.ajax({
            url: '/admin/movie/getMovie/' + MovieID,
            type: 'GET',
            success: function(response){
                $('#title').val(response[0].Title);
                $('#loadThumbnail').attr('src', '/imgMovie/' + response[0].Thumbnail);    
                $('#descripton').val(response[0].Description);
                $('#duration').val(response[0].Duration);
                $('#language').val(response[0].Language);
                $('#release_date').val(response[0].ReleaseDate);
                $('#country').val(response[0].Country);
                $('#genre').val(response[0].Genre);
                $('#trailer_url').val(response[0].trailer_url);
                $('#director').val(response[0].Director);
                $('#actor').val(response[0].Actor);
                $('#regulation_name').empty();
                $('#movie_status_name').empty();
                if (response[1]) {
                    console.log(response[1]);
                    $.each(response[1], function(index, regulation){
                        console.log(regulation);
                        $('#regulation_name').append('<option value="'+regulation.RegulationID+'"' + (response[0].RegulationID == regulation.RegulationID ? 'selected' : '') + '>' + regulation.AgeRegulationName + '</option>');
                    });
                } else {
                    console.log("response[1] is undefined or null");
                }
                if(response[2]){
                    console.log(response[2]);
                    $.each(response[2], function(index, movie_status){
                        $('#movie_status_name').append('<option value="'+movie_status.IDStatus+'"' + (response[0].IDStatus == movie_status.IDStatus ? 'selected' : '') + '>' + movie_status.StatusName + '</option>');
                    });
                }else {
                    console.log("response[2] is undefined or null");
                }
               
            }
        });
   }); 

   // hide alert
    setTimeout(function() 
    {
        $('.alert_hide').fadeOut('fast');
    }, 5000);
});