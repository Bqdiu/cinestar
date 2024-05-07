$(document).ready(function(){
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

    

});