<h1>exercice 1</h1>
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
<!-- ------------------exo 2-------------------------------------------- -->
<h1>exercice 2</h1>

<?php

$request = $db->query('SELECT * FROM showtypes');
$showtypes = $request->fetchAll();

foreach ($showtypes as $showtype) {
    echo '<p>' . $showtype['type'] . '</p>';
}
?>
<!-- ----------------------exo 3---------------------------------------- -->
<h1>exercice 3</h1>
<?php

$request = $db->query('SELECT * FROM clients LIMIT 20');
$users20tops = $request->fetchAll();

var_dump($users20tops);

foreach($users20tops as $users20top){
    echo '<p>'.$users20top['lastName'] .'</p>';
}
;
?>
<!-- ----------------------------exo 4------------------------ -->