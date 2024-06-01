
// $(document).on('click','#btn-dashboard-filter',function(){
//     var start_time = $('#start_time').val();
//     var end_time = $('#end_time').val();
//     if(start_time == '' || end_time == ''){
//         alert('Hãy chọn thời gian cần xem doanh thu');
//         return;
//     }
//     var movie_id = $('#movie_name').val();

//     $.ajax({
//         url: '/admin/dashboard/filter-by-date/' + start_time + '/' + end_time + '/' + movie_id,
//         type: 'GET',
//         success: function(response){
//             if(response != null && response != '')
//                 console.log(response);
//             // else
//             //     alert('Phim không có doanh thu trong khoảng thời gian này');
//         }
//     });
// });

$(document).ready(function(){
   
    $.ajax({
        url: '/admin/dashboard/getDataOption',
        type: 'GET',
        success: function(response){
            $.each(response, function(index, value){
                $('#movie_name').append('<option value="'+value.MovieID+'">'+value.Title+'</option>');
            });
        }
    });
});

$(document).on('click', '#btn-dashboard-filter', function () {
    var start_time = $('#start_time').val();
    var end_time = $('#end_time').val();
    if (start_time == '' || end_time == '') {
        alert('Hãy chọn thời gian cần xem doanh thu');
        return;
    }
    var movie_id = $('#movie_name').val();
    $.ajax({
        url: '/admin/dashboard/filter-by-date/' + start_time + '/' + end_time + '/' + movie_id,
        type: 'GET',
        success: function (response) {
            if (response != null && response != '') {
                const months = response.map(item => 'Tháng ' + item.month);
                const totals = response.map(item => item.total);

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Doanh thu tháng',
                            data: totals,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } else {
                alert('Phim không có doanh thu trong khoảng thời gian này');
            }
        }
    });
});

