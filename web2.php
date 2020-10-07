<html>
 <head>
  <title>Pagina de Alex</title>
 </head>
 <body>
<?php
$_SESSION['username'] = "Alex ";
$_SESSION['country'] = "Spain ";
$_SESSION['Age'] = "20 ";
echo "Bienvenidos a mi pagina web de PHP";
echo "<br>";
echo "<br>";
$nombre = $_POST['user'];
echo 'Bienvenido '. $nombre;
echo "<br>";
$surname = $_POST['surname'];
echo 'Tu apellido es '. $surname;
echo "<br>";
$password = $_POST['pass'];
echo 'y tu contraseña para la pag es '. $password;
echo "<br>";
echo "La cookie:";
echo "<br>";
echo "La cookie sabe mi nombre=";
echo $_COOKIE["username"];
echo "<br>";
echo "El link:";
echo "<br>";
echo "<a href='https://www.youtube.com/channel/UCBxCCXctYFNzcUaLQimDvLA?'>";
echo "El mejor canal de youtube"; 
echo "</a>";
echo "<br>";
$myfavmovie = urlencode("Tutorial PHP");
echo "<a href='https://unipython.com/crear-un-formulario-en-php-basico/'>";
echo "Aqui tienes un tutorial de PHP con urlncode"; 
echo "</a>";
echo "<br>";
echo "Datos del SESSION: ";
echo "<br>";
echo $_SESSION["username"];
echo "<br>";
echo $_SESSION["country"];
echo "<br>";
echo $_SESSION["Age"];
echo "<br>";
echo "Escibe algo y se pondra abajo";
?>
<form name="formulario"method="get"action="web2.php">
    Funcion Get:<input type="text"name="print"value="">
    <input type="submit"/>
</form>
<?php
$nombre = $_GET['print'];
echo$nombre;
echo "<br>";
echo "La funcion date:";
echo "<br>";
echo "El dia de hoy es " . date("d-m-Y");
echo "<br>";
$nombre_usuario = isset($_GET['Mi Pagina']) ? $_GET['Mi Pagina'] : 'nadie';
echo "<br>";
echo "<a href='web1.php?'>";
echo "◄ volver al formulario"; 
?>
 </body>
</html>
