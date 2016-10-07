<!DOCTYPE html>
<html>
	<header><h1> The Vitamin Store</h1></header>
	<head>
		<title>Body Mass Index Calculator</title>
		<link rel="stylesheet" type="text/css" href="default/css" />
	</head>
	<body>
		<h4 class="centered"> Body Mass Index Calculator</h4>
		<p>Body Mass Index (BMI) is used as an indicator of total body fat. In order to calculate
			your BMI, please input your height and weight. </p>
		<form id="bmiForm" action="">
			<table summary="BMI Calculator-Textbox, Radio Button, Checkbox">
				<tr>
					<td>Height:</td>
					<td><input type="text" name="height" size="7"/></td>
					<td>Units:</td>
					<td><input type="radio" name="heightunit" value="in"/> inches </td>
					<td><input type="radio" name="heightunit" value="cm"/> centimeters </td>
				</tr>
				<tr>
					<td>Weight:</td>
					<td><input type="text" name="weight" value="7" /> </td>
					<td>Units:</td>
					<td><input type="radio" name="weightunit" value="lb"/> pounds </td>
					<td><input type="radio" name="weightunit" value="kg"> kilograms </td>
				</tr>
				<tr>
					<td colspan="4">Please Check Here If You Want A Detailed Analysis Of Your BMI:
						<input type="checkbox" name="details" value="yes" /></td>
				</tr>
			</table>
		</form>
		<p>Total Body Fat is correlated to the risk of certain diseases that can be
			potentially fatal. BMI is valid for both men and women.However it should only be used as a guideline
			as it has some limitations. It may overestimate the body fat in persons who have lost muscle mass.</p>
	</body>
</html>