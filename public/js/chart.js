// change tabs
$(document).on('click','.nav-tabs a',function(){
    $('.nav-tabs a').removeClass('active');
    $(this).addClass('active');
    var href = $(this).attr('href');
    $('.tab-pane').removeClass('active');
    console.log(href);
    $(href).addClass('active');
    return false;

});

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
    var year = $('#yearSelect').val();
    var movie_id = $('#movie_name').val();
    if (year == '' || movie_id == '') {
        alert('Hãy chọn thời gian và phim cần xem doanh thu');
        return;
    }
    $.ajax({
        url: '/admin/dashboard/filter-by-year-movie/' + year + '/' + movie_id,
        type: 'GET',
        success: function (response) {
            console.log(response);
            if (response != null && response != '') {
                const months = response.map(item => 'Tháng ' + item.month);
                const totals = response.map(item => item.total);
                var ctx = document.getElementById('MovieRevenueChart').getContext('2d');
                // destroy the old chart
                if (window.myChart1 instanceof Chart) {
                    window.myChart1.destroy();
                }
                window.myChart1 = new Chart(ctx, {
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

$(document).ready(function(){
    $.ajax({
        url: '/admin/dashboard/filter-by-custumer',
        type: 'GET',
        success: function(response){
            console.log(response);
            if (response != null && response != '') {
                const customers = response.map(item => item.Name);
                const totals = response.map(item => item.total);
                var ctx = document.getElementById('UserExpenseChart').getContext('2d');
                // destroy the old chart
                if (window.myChart2 instanceof Chart) {
                    console.log("A chart exists and will be destroyed.");
                    window.myChart2.destroy();
                }
                window.myChart2 = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: customers,
                        datasets: [{
                            label: 'Chi tiêu của khách hàng',
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
                alert('Không có khách hàng nào mua vé');
            }
        }
    });
});
