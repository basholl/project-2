<!DOCTYPE html>
<html lang="nl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>De splinter</title>
<style>

	
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 25%;
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
.tekst {
  background-color: blue;
  color: white;
  border: 2px solid black;
  margin: 0px;
  padding: 20px;
  width: 500px;
}
.back { background-image: url('achtergrondvoorpagina.jpg'); }
</style>

</head>


<body style="background-color:DarkTurquoise;">
<div class="back">
<h1 style="font-family:courier;"><span style="border: 1px solid black">Basis school de Splinter</span> </h1>
<br>
<table>
<tr>
    <td><a href="rekenen.php"><h2>Rekenen</h2></a></td>
<td><a href="groepen456.php"><h2>Groepen 4,5 en 6</h2></a></td>
</tr>
</table>
<br>
</div>
<?php
date_default_timezone_set("Europe/amsterdam");

$today = date("j F Y");
echo "<p>Het is vandaag: $today</p>";
?>

<div class="tekst"><h4>Over de basisschool de splinter</h4>
<p>teks teks tekst tekst tekst tekst teks teks tekst tekst tekst tekst. teks teks tekst tekst tekst tekst teks teks tekst tekst tekst tekst.
teks teks tekst tekst tekst tekst teks teks tekst tekst tekst tekst. teks teks tekst tekst tekst tekst teks teks tekst tekst tekst tekst.
teks teks tekst tekst tekst tekst teks teks tekst tekst tekst tekst. teks teks tekst tekst tekst tekst teks teks tekst tekst tekst tekst. </p></div>


<img src="foto.jpg" alt="foto"  ">
<br>

<iframe id="ytplayer" type="text/html" width="640" height="360"
  src="https://www.youtube.com/embed/RhIdN81Ltqw"
  frameborder="0"></iframe>

<hr />
<br />

<a href="tim.graaf@rocdeleijgraaf.nl">Onze e-mail</a>
<br>


</body>
</html>