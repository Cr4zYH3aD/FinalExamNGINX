<html>
    <body>
        <h1>TP3 DOCKER SERVEURS WEB LOAD BALANCER</h1>
        <h3>Serveur #1</h3>
        <h4>Jimmy Nadeau et Maxime Mondello</h4>
        <a href=http://www.ketaineries.com/>The legend: Pierre Arpin</a>
    </body>
</html>

<?php
   # $dbname = mariadb;
   # $dbuser = root;
   # $dbpass = mypassword;
   # $dbhost = location;
    
    //* php sert de pont avec la DB mariaDB. À partir de la fonction mysql_connect on peut interfacer et manipuler la DB
    $connect = new mysqli ('mariadb', 'root', 'mypassword') or die("Unable to connect to ");
    echo "Connexion a MariaDB Reussi"
?>
