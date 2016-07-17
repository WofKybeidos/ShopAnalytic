google.load('visualization', '1', {'packages':['corechart']});
google.setOnLoadCallback(drawChart);
 
 var jsonData = $.ajax({
  url: "includes/charts.php",
  dataType:"json",
  async: false
  }).responseText;
  
function drawChart() {
	var data = new google.visualization.DataTable(jsonData);
		var options = {
			title: 'Shop Auswertung',
			titleTextStyle: {color: 'white'},
			legend: { position: 'right', textStyle: { color: 'white' }},
			backgroundColor:'#02071a', 
			is3D: 'true',
			width: 800,
			height: 600
		};
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
}