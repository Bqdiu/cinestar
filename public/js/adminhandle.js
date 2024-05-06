$(document).ready(function(){
    // get id for movie status delete
    $(document).on('click','.delete-status-btn', function(){
        var IDStatus = $(this).data('status-id'); // changed 'IDStatus' to 'status-id'
        $('#deleteStatusID').val(IDStatus);
    });
});