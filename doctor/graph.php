
<?php
 
$dataPoints = array(
	array("y" => 10, "label" => "01.07.2020"),
	array("y" => 12, "label" => "02.07.2020"),
	array("y" => 25, "label" => "03.07.2020"),
	array("y" => 9, "label" => "04.07.2020"),
	array("y" => 19, "label" => "05.07.2020"),
	array("y" => 20, "label" => "06.07.2020"),
	array("y" => 30, "label" => "07.07.2020")
);

 
?>
<?php include "header.php";?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Doctor Graph"
	},
	axisY: {
		title: "Number of Patient"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<style>
  .canvasjs-chart-canvas{
  	position: absolute;
    user-select: all;
    width: 700px;
    margin-left: 445px;
    height: 350px;
    margin-top: 60px;
  }
</style>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                             
<?php include "footer.php";?>