<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ajax 2</title>
		<link rel="stylesheet" type="text/css" href="myStyle.css">
	</head>
	<body>
    <h1>BMI Calculator</h1>
		<div id="main">
			<h3>gewicht (kg):</h3>&nbsp;<input type="number" autofocus placeholder= "Gewicht in kg" id="gewicht"/>
			<h3>lengte (cm):</h3>&nbsp;<input type="number" placeholder= "Lengte in cm" id="lengte"/>
            <br>
            <br>
			<button onclick="bmiCalc()">Calculate</button>
            <br>
            <br>
			<p><span id="bmiSpan"></span></p>
		</div>
<script src="ajax.js"></script>
	</body>
    <div class="footer">
        <p>Ricky Darsan &copy; 2017</p>
    </div>
</html>
