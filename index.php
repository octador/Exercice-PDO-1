<?php

$dsn = 'mysql:host=localhost;dbname=colyseum';
$user = 'root';
$password = '';
$db = new PDO($dsn,$user,$password);


$request = $db->query('SELECT * FROM clients' );
// var_dump($request); 
$users = $request->fetchall();
var_dump($users);

foreach ($users as $user)  {
    echo '<p>'. $user['lastName'] .'</p>';
}

?>