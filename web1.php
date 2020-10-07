<?php
setcookie("username","Alex",time()+6000);
echo $_GET['Mi Pagina'];
?>
<html>
 <head>
  <title>Web de Alex</title>
 </head>
 <body>
    <?php
    echo "Hola buenas tardes Bienvenidos a mi pagina web introduce los datos:";
    echo $_SESSION["username"];
    echo $_SESSION["country"];
    echo $_SESSION["Age"];
    ?>
  <form method="post" action="web2.php">
   <p>Introduce tu nombre: 
    <input type="text" name="user"/>
   </p>
   <p>Introduce tu apellido: 
    <input type="apellido" name="surname"/>
   </p>
   <p>Introduce la contraseña: 
    <input type="password" name="pass"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>
