
$(document).on('click','#btn-dashboard-filter',function(){
    var start_time = $('#start_time').val();
    var end_time = $('#end_time').val();
    $.ajax({
        url: '/admin/filter-by-date/' + start_time + '/' + end_time,
        type: 'GET',
        success: function(response){
            console.log(response);
        }
    });
});

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6'],
        datasets: [{
            label: 'Test data',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});