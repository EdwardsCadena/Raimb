google.charts.load('current', {'packages':['corechart', 'bar']});
google.charts.setOnLoadCallback(drawStuff);

function drawStuff() {

    var button = document.getElementById('change-chart');
    var chartDiv = document.getElementById('chart_div3');

    var data = google.visualization.arrayToDataTable([
        ['Cupo','T',{ role: 'style' }],
        ['A1', 23.3,'red'],
        ['B3', 30.5,'red'],
        ['A5', 10.3,'red'],
        ['B5', 53.5,'red'],
        ['A5', 20.3,'red'],
    ]);

    var materialOptions = {
        'width':280,
        'height':280,
        'backgroundColor': 'transparent',
        series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
        },

    };

    var classicOptions = {
        width: 500,
        series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
        },

    };

    function drawMaterialChart() {
        var materialChart = new google.charts.Bar(chartDiv);
        materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
        button.innerText = 'Change to Classic';
        button.onclick = drawClassicChart;
    }

    function drawClassicChart() {
        var classicChart = new google.visualization.ColumnChart(chartDiv);
        classicChart.draw(data, classicOptions);
        button.innerText = 'Change to Material';
        button.onclick = drawMaterialChart;
    }

    drawMaterialChart();
};