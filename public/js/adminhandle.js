$(document).ready(function(){
    //Movie status function
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

   // Movie function
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
   $(document).on('click','.delete-movie-btn',function(){
        var movie_id = $(this).data('movie-id');
        console.log(movie_id);
        $('#deleteMovieID').val(movie_id);    
   });

   $('#searchMovie').on('input',function(){
        var term = $(this).val().trim();
        $.ajax({
            url: '/admin/movie/searchMovie/' + term,
            type: 'GET',
            success: function(data) {
                $('#data-body').empty();
                $.each(data, function (index, movie) {
                    var row = 
                    '<tr>' +
                        '<th scope="row" class="text-left align-middle">'+movie.MovieID+'</th>' +
                        '<td scope="row" class="text-left align-middle">'+movie.Title+'</td>' +
                        '<td scope="row" class="text-left align-middle">' +
                            '<img src="/imgMovie/'+movie.Thumbnail+'" width="50" height="50">'+
                        '</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.Description+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.Duration+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.Language+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.ReleaseDate+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.Country+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.Genre+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.trailer_url+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.Director+'</td>'+
                        '<td scope="row" class="text-left align-middle">'+movie.Actor+'</td>'+
                        '<td scope="row">'+
                            '<a class="col btn btn-secondary edit-movie-btn" data-bs-toggle="modal" data-bs-target="#editMovie" data-movie-id="'+movie.MovieID+'">Edit</a>'+
                        '</td>'+
                        '<td scope="row">'+
                            '<a class="col btn btn-danger delete-movie-btn" data-bs-toggle="modal" data-bs-target="#deleteMovie" data-movie-id="'+movie.MovieID+'">Delete</a>'+
                        '</td>'+
                    '</tr>';
                    $('#data-body').append(row);
                });
            }         
        });   
   });
   // get data for option select
   $('.btn-add-movie').on('click', function(){
    $.ajax({
        url: '/admin/movie/getDataOption',
        type: 'GET',
        success: function(response){
            $('add_regulation_name').empty();
            $('add_movie_status_name').empty();
            if(response[0] && response[1]){
                $.each(response[0], function(index, movie_status){
                    var row = '<option value="'+movie_status.IDStatus+'">' + movie_status.StatusName + '</option>';
                    $('#add_movie_status_name').append(row);
                }); 
                $.each(response[1], function(index, regulation){
                    var row = '<option value="'+regulation.RegulationID+'">' + regulation.AgeRegulationName + '</option>';
                    $('#add_regulation_name').append(row);
                });              
            }
        }
    });   
   });

   // Cinema function
    $('.btn-add-cinema').on('click',function(){
        $.ajax({
            url : '/admin/cinema/getDataOption',
            type : 'GET',
            success: function(response)
            {
                $('#add_city_name').empty();
                console.log(response);
                if(response)
                {
                    $.each(response, function(index, city){
                        var row = '<option value="'+city.CityID+'">' + city.CityName + '</option>';
                        $('#add_city_name').append(row);
                    });
                }
            }
        });
    });
    $(document).on('click','.delete-cinema-btn',function(){
        var cinema_id = $(this).data('cinema-id');
        console.log(cinema_id);
        $('#deleteCinemaID').val(cinema_id);    

   }); 

   $('.edit-cinema-btn').on('click',function(){
        var CinemaID = $(this).data('cinema-id');
        $('#CinemaID').val(CinemaID);
        console.log(CinemaID);
        $.ajax({
            url: '/admin/cinema/getCinema/' + CinemaID,
            type: 'GET',
            success: function(response){
                console.log(response);
                $('#CinemaName').val(response[0].Name);   
                $('#loadThumbnail').attr('src', '/imgCinema/' + response[0].Thumbnail);   
                $('#address').val(response[0].Address);   
                $('#toltalcinemahalls').val(response[0].TotalCinemaHalls);   
                $('#city_name').empty();
                $.each(response[1], function(index, city){
                    $('#city_name').append('<option value="'+city.CityID+'"' + (response[0].CityID == city.CityID ? 'selected' : '') + '>' + city.CityName + '</option>');
                });    
            }
        });
    });



    // access premission
    

   // hide alert
    setTimeout(function() 
    {
        $('.alert_hide').fadeOut('fast');
    }, 3000);
});