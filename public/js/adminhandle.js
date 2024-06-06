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
        console.log(MovieID);
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
        if(term == ''){
            $('#paniga_movie').removeClass('d-none');
            $('#paniga_movie').addClass('d-block');
        }
        else
        {
            $('#paniga_movie').addClass('d-none');
            $('#paniga_movie').removeClass('d-block');

        }
        $.ajax({
            url: '/admin/movie/searchMovie/' + term,
            type: 'GET',
            success: function(data) {
                $('#data-body').empty();
                console.log(data);
                $.each(data, function (index, movie) {
                    var row = 
                    '<tr>' +
                        '<th scope="row" class="text-center align-middle">'+movie.MovieID+'</th>' +
                        '<td scope="row" class="text-center align-middle" colspan="2">'+movie.Title+'</td>' +
                        '<td scope="row" class="text-center align-middle">' +
                            '<img src="/imgMovie/'+movie.Thumbnail+'" width="100" height="100">'+
                        '</td>'+
                        '<td scope="row" class="text-center align-middle">'+movie.Duration+'</td>'+
                        '<td scope="row" class="text-center align-middle">'+movie.Language+'</td>'+
                        '<td scope="row" class="text-center align-middle">'+movie.ReleaseDate+'</td>'+
                        '<td scope="row" class="text-center align-middle">'+movie.Country+'</td>'+
                        '<td scope="row" class="text-center align-middle">'+movie.Genre+'</td>'+
                        '<td scope="row" class="text-center align-middle"  style="overflow: hidden;text-overflow: ellipsis;">'+movie.trailer_url+'</td>'+
                        '<td scope="row" class="text-center align-middle">'+movie.Director+'</td>'+
                        '<td scope="row" class="text-center align-middle">'+
                            '<a class="col btn btn-secondary edit-movie-btn" data-bs-toggle="modal" data-bs-target="#editMovie" data-movie-id="'+movie.MovieID+'">Edit</a>'+
                        '</td>'+
                        '<td scope="row" class="text-center align-middle">'+
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
    $(document).on('click', '.edit-cinema-btn', function () {
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

    $('#searchCinema').on('input', function () {
        var searchText = $(this).val().trim();
        $.ajax({
            url: '/admin/cinema/searchCinema/' + searchText,
            type: 'GET',
            success: function (data) {
                console.log(data);
                $('#data-body').empty();
                $.each(data, function (index, cinema) {
                    var row =
                        '<tr>' +
                        '<th scope="row" class="text-center align-middle">' + cinema.CinemaID + '</th>' +
                        '<td scope="row" class="text-center align-middle">' + cinema.Name + '</td>' +
                        '<td scope="row" class="text-center align-middle">' +
                            '<img src="/imgCinema/' + cinema.Thumbnail + '" width="150" height="150">' +
                        '</td>' +
                        '<td scope="row" class="text-center align-middle">' + cinema.Address + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + cinema.TotalCinemaHalls + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + cinema.CityName + '</td>' +
                        '<td scope="row" class="align-middle">' +
                        '<a class="col btn btn-secondary edit-cinema-btn" data-bs-toggle="modal" data-bs-target="#editCinema" data-cinema-id="' + cinema.CinemaID + '">Edit</a>' +
                        '</td>' +
                        '<td scope="row" class="align-middle">' +
                        '<a class="col btn btn-danger delete-cinema-btn" data-bs-toggle="modal" data-bs-target="#deleteCinema" data-cinema-id="' + cinema.CinemaID + '">Delete</a>' +
                        '</td>' +
                        '</tr>';
                    $('#data-body').append(row);
                });
            }
        });
    });
    // Userinfor
    $('.edit-userinfor-btn').on('click',function(){
        var UserID = $(this).data('userinfor-id');
        $('#editUserID').val(UserID);
        console.log($('#editUserID').val());
        $.ajax({
            url: '/admin/userinfor/getUserInfor/' + UserID,
            type: 'GET',
            success: function(response){
                console.log(response);
                $('#Name').val(response[0].Name);   
                $('#CCCD').val(response[0].CCCD);   
                $('#BirthDay').val(response[0].BirthDay);   
                $('#Email').val(response[0].Email);   
                $('#Phone').val(response[0].Phone);   
                $('#edit_role_name').empty();
                $.each(response[1], function(index, role){
                    $('#edit_role_name').append('<option value="'+role.role_id+'"' + (response[0].role_id == role.role_id ? 'selected' : '') + '>' + role.role_name + '</option>');
                });    
            }
        });
    });
    $(document).on('click', '.delete-userinfor-btn', function () {
        var user_id = $(this).data('userinfor-id');
        console.log(user_id);
        $('#deleteUserID').val(user_id);
    }); 
    $('.btn-add-user').on('click', function () {
        $.ajax({
            url: '/admin/userinfor/getDataOption',
            type: 'GET',
            success: function(response){
                console.log(response);
                $('#add_role_name').empty();
                $.each(response, function (index, role) {
                    $('#add_role_name').append('<option value="' + role.role_id + '"' + '>' + role.role_name + '</option>');
                });    
            }
        })
    });

    $('.reset-password-btn').on('click',function(){
        $('#resetUserID').val($(this).data('userinfor-id'));
        console.log($('#resetUserID').val());
    });

    //showinfor
    $('#searchShow').on('input',function(){
        var searchText = $(this).val().trim();
        $.ajax({
            url: '/admin/showinfor/searchShow/' + searchText,
            type: 'GET',
            success: function(data){
                $('#data-body').empty();
                $.each(data, function (index, showinfor) {
                    var row =
                        '<tr>' +
                        '<th scope="row" class="text-center align-middle">' + showinfor.ShowID + '</th>' +
                        '<td scope="row" class="text-center align-middle">' + showinfor.ShowDate + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + showinfor.StartTime + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + showinfor.EndTime + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + showinfor.hall_name + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + showinfor.Title + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + showinfor.CinemaName + '</td>' +
                        '<td scope="row" class="text-center align-middle">' +
                        '<a class="col btn btn-secondary edit-showinfor-btn" data-bs-toggle="modal" data-bs-target="#editShow" data-showinfor-id="' + showinfor.ShowID + '">Edit</a>' +
                        '</td>' +
                        '<td scope="row" class="text-center align-middle">' +
                        '<a class="col btn btn-danger delete-showinfor-btn" data-bs-toggle="modal" data-bs-target="#deleteShow" data-showinfor-id="' + showinfor.ShowID + '">Delete</a>' +
                        '</td>' +
                        '</tr>';
                    $('#data-body').append(row);
                });
            }
        });
    });
    $(document).on('click', '.edit-showinfor-btn', function () {
        var ShowID = $(this).data('showinfor-id');
        $('#editShowInforID').val(ShowID);
        console.log($('#editShowInforID').val());

        $.ajax({
            url: '/admin/showinfor/getShowInfor/' + ShowID,
            type: 'GET',
            success: function(response){
                // console.log(response);
                $('#editShowDate').val(response[0].ShowDate);
                $('#editStartTime').val(response[0].StartTime);
                $('#editEndTime').val(response[0].EndTime);
                var $edit_cinema_name = $('#edit_cinema_name').empty();
                var $edit_cinemahall_name = $('#edit_cinemahall_name').empty();
                var $edit_movie_name = $('#edit_movie_name').empty();
                $edit_cinemahall_name.append(`<option value="${response[0].CinemaHallID}" selected>${response[0].hall_name}</option>`);

                if (response[1]) {
                    $.each(response[1], function (index, movie) {
                        $edit_movie_name.append(`<option value="${movie.MovieID}" ${response[0].MovieID == movie.MovieID ? 'selected' : ''}>${movie.Title}</option>`);
                    });
                }

                if (response[2]) {
                    $.each(response[2], function (index, cinema) {
                        $edit_cinema_name.append(`<option value="${cinema.CinemaID}" ${response[0].CinemaID == cinema.CinemaID ? 'selected' : ''}>${cinema.Name}</option>`);
                    });
                }    
            }
        });

    });

    $(document).on('change', '#edit_cinema_name', function () {
        var cinema_id = $(this).val();
        $.ajax({
            url: `/admin/showinfor/getCinemaHallByCinema/${cinema_id}`,
            type: 'GET',
            success: function (response) {
                console.log(response);
                var $edit_cinemahall_name = $('#edit_cinemahall_name').empty();
                $.each(response, function (index, hall) {
                    $edit_cinemahall_name.append(`<option value="${hall.CinemaHallID}">${hall.Name}</option>`);
                });
            }
        });
    });
    
    $(document).on('click', '.btn-add-showinfor', function(){
        $.ajax({
            url: '/admin/showinfor/getDataOption',
            type: 'GET',
            success: function(response){
                if(response[0])
                {
                    var $add_cinema_name = $('#add_cinema_name').empty();
                    $add_cinema_name.append(`<option value="">Chọn rạp phim</option>`);
                    $.each(response[0], function(index, cinema){
                        $add_cinema_name.append(`<option value="${cinema.CinemaID}">${cinema.Name}</option>`);
                    });
                }
                if(response[1])
                {
                    var $add_movie_name = $('#add_movie_name').empty();
                    $.each(response[1], function(index, movie){
                        $add_movie_name.append(`<option value="${movie.MovieID}">${movie.Title}</option>`); 
                    });
                }
            }
        });
    });

    $(document).on('change','#add_cinema_name', function(){
        var cinema_id = $(this).val();
        $.ajax({
            url: `/admin/showinfor/getCinemaHallByCinema/${cinema_id}`,
            type: 'GET',
            success: function (response) {
                console.log(response);
                var $add_cinemahall_name = $('#add_cinemahall_name').empty();
                $.each(response, function (index, hall) {
                    $add_cinemahall_name.append(`<option value="${hall.CinemaHallID}">${hall.Name}</option>`);
                });
            }
        });
    });

    $(document).on('click','.delete-showinfor-btn',function(){
        var ShowID = $(this).data('showinfor-id');
        $('#deleteShowID').val(ShowID);
        console.log($('#deleteShowID').val());
    });

    // ticket price
    $(document).on('click','.edit-ticketprice-btn', function(){
        var id = $(this).data('ticketprice-id');
        $('#editTicketPriceID').val(id);
        $.ajax({
            url: '/admin/ticketprice/getTicketPrice/' + id,
            type: 'GET',
            success: function(response){
                $('#editTicketPriceName').text('Loại vé: ' + response.TicketName);
                $('#TicketPrice').val(response.TicketPrice);

            }
        });
    });
    // booking 
    $('#searchBooking').on('input', function () {
        var searchText = $(this).val().trim();
        $.ajax({
            url: '/admin/booking/searchBooking/' + searchText,
            type: 'GET',
            success: function (data) {
                console.log(data);
                $('#data-body').empty();
                $.each(data, function (index, booking) {
                    var row =
                        '<tr>' +
                        '<th scope="row" class="text-center align-middle">' + booking.BookingID + '</th>' +
                        '<td scope="row" class="text-center align-middle">' + booking.NumberOfSeats + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + booking.Status + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + booking.FullName + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + booking.Title + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + booking.PhoneNumber + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + booking.Email + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + booking.TotalPrice + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + booking.createdAt + '</td>' +
                        '<td scope="row" class="text-center align-middle">' + (booking.PaymentName || 'Không có thông tin') + '</td>'+
                        '</tr>';
                    $('#data-body').append(row);
                });
            }
        });
    });
   // hide alert
    setTimeout(function() 
    {
        $('.alert_hide').fadeOut('fast');
    }, 3000);
});