<!DOCTYPE html>
<html lang="nl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Rekenen</title>
<style>

	
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 8px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
 }

tr:nth-child(odd) {
  background-color: tomato;
}

tr:nth-child(even) {
  background-color: CornflowerBlue;
}
</style>

<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: red;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
.city {
  background-color: rgb(255, 183, 71);
  color: black;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
}


</style>

</head>


<body style="background-image: url('achtergrond.jpg');">
<h1 style="font-family:courier;"><span style="border: 1px solid black">Rekenen</span> </h1>
<br>
<a href="voorpagina.php"><h2>Voorpagina</h2></a>

<h1>De tafels van 1 tot en met 10</h1>
<?php
   
	 
	 
$nummer = 1;
$nummer1 = 2;
$nummer2 = 3;
$nummer3 = 4;
$nummer4 = 5;
$nummer5 = 6;
$nummer6 = 7;
$nummer7 = 8;
$nummer8 = 9;
$nummer9 = 10;
echo "<table border='1'>";
	for ($p = 0; $p <= 10; $p++) {
		echo"<tr>";
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer) . "</td>";
		echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer1</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer1) . "</td>";
	echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer2</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer2) . "</td>";
		echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer3</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer3) . "</td>";
				echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer4</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer4) . "</td>";

	echo "</tr>"; }
	echo"</table>";
	
	echo"<br>";

echo "<table border='1'>";
	for ($p = 0; $p <= 10; $p++) {
		echo"<tr>";
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer5</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer5) . "</td>";
		echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer6</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer6) . "</td>";
	echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer7</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer7) . "</td>";
		echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer8</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer8) . "</td>";
				echo "<td style=background-color:#ffffff;></td>";
		
		echo "<td>$p</td>";
		echo "<td> x </td>";
		echo "<td>$nummer9</td>";
		echo "<td> = </td>";
		echo "<td>" . ($p * $nummer9) . "</td>";

	echo "</tr>"; }
	echo"</table>";


	
?>
</body>
</html>