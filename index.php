<?php
session_start();

// Database onnection
function openConnection() {
    $dbhost = "database";
    $dbuser = "root";
    $dbpass = "root";
    $db = "cogip";

    $pdo = new PDO("mysql:host=$dbhost;dbname=$db;charset=utf8",$dbuser,$dbpass);

    return $pdo;
}

try {
    $connect = openConnection();
    if ($connect) echo "Connected to the <strong>$db</strong> database successfully!";
}
catch (PDOException $ex){
    die($ex->getMessage());
}

?>
<!-- temporaire -->
<?php
require 'view/component/header-component.php';
require 'view/component/menu-component.php';
?>

<?php
// routing
if (!empty($_GET['page'])) {
    $page = trim(addslashes($_GET['page']));
    $path = "controller/$page-ctrl.php";
    if (is_file($path)) {
        require $path;
    }
    else {
        echo "ERROR 404: $page not found";
    }
}
else{
}

?>


<?php 
require 'view/component/footer-component.php';
?>
