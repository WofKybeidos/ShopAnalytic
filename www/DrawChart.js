//Laden des "Corechart" Package, welches die Vorlage für einem Pie-Chart entspricht.
//Ermöglicht das Zeichnen vom Pie-Chart
google.load('visualization', '1', {'packages':['corechart']});
google.setOnLoadCallback(drawChart);

//Erhalten der Daten die zur Auswertung nötig sind 
var jsonData = $.ajax({
  url: "includes/charts.php",
  dataType:"json",
  async: false
  }).responseText;
  
//Zeichnen des Charts, sowie definition der Optionen, um eine zum UI passende Ausgabe zu erhalten
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
	// Stelle an der das Chart eingefügt wird
	var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
}