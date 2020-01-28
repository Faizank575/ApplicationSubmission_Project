google.charts.load('current', {
    'packages': ['corechart']
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Pizza', 'Popularity', {
            type: 'string',
            role: 'tooltip'
        }],
        ['Pepperoni', 33, "Most popular"],
        ['Hawaiian', 26, "Popular"],
        ['Mushroom', 22, "Somewhat popular"],
        ['Sausage', 10, "Less popular"]
    ]);

    var options = {
        title: 'Pizza Popularity'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);