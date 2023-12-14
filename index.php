<h1>exercice 1</h1>
<?php

$dsn = 'mysql:host=localhost;dbname=colyseum';
$user = 'root';
$password = '';
$db = new PDO($dsn, $user, $password);

$request = $db->query('SELECT * FROM clients');

$users = $request->fetchall();
foreach ($users as $user) {
    echo '<p>' . $user['lastName'] . '</p>';
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
foreach ($users20tops as $users20top) {
    echo '<p>' . $users20top['lastName'] . '</p>';
};
?>
<!-- ----------------------------exo 4------------------------ -->
<h1>exercice 4</h1>

<?php
$request = $db->query('SELECT * FROM cardtypes  LEFT JOIN clients ON cardtypes.id = clients.card WHERE card IS NOT NULL');

$cardtypes = $request->fetchAll();
foreach ($cardtypes as $cardtype) {
    echo '<p>' . $cardtype['lastName'] . $cardtype['firstName'] . '</p>';
}
?>
<!-- -----------------------------------exo 5-------------------------------- -->

<h1>exercice 5</h1>

<?php

$request = $db->query("SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC");
$lastNames = $request->fetchAll();

foreach ($lastNames as $lastName) {
    echo '<p>' . $lastName['lastName'] . '</p>';
}

?>
<!-- ---------------------------exo 6--------------------------------------------- -->

<h1>exercice 6</h1>

<?php
$request = $db->query('SELECT title, performer, date, startTime FROM shows ORDER BY title');
$shows = $request->fetchall();

foreach ($shows as $show) {
    echo '<p>' . 'le tire est : ' . $show['title'] . 'la durer est de : ' . $show['performer']  . 'la date : ' . $show['date'] . 'l heure est :' . $show['startTime'] . '</p>';
}
?>
<!-- ------------------------------------exo 7------------------------------- -->

<h1>exercice 7</h1>

<?php
$request = $db->query("SELECT * FROM clients LEFT JOIN cards ON clients.cardNumber = cards.cardNumber");

$clients = $request->fetchAll();

foreach ($clients as $client) {

    if ($client['cardTypesId'] === 1) {
        echo '<p>' . $client['lastName'] . " " . $client['firstName'] . " " . $client['birthDate'] . "  oui le client a une carte de fidélitée N° : " . " " . $client['cardNumber'] . '</p>';
    } else {
        echo '<p>' . $client['lastName'] . " " . $client['firstName'] . " " . $client['birthDate'] . " " . 'n\'a pas de car de fidelitée' . " " . '</p>';
    }
}

?>
