google.load('visualization', '1', {'packages':['corechart']});
google.setOnLoadCallback(drawChart);
 
function drawChart() {
	var data = new google.visualization.DataTable(<?=$jsonTable?>);
		var options = {
			title: 'My Weekly Plan',
			is3D: 'true',
			width: 800,
			height: 600
		};
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
}