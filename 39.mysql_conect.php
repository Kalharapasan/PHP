$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 3310;

$link = mysql_connect(
    "$host:$port", 
    $user, 
    $password
);
$db_selected = mysql_select_db(
    $db, 
     link
);