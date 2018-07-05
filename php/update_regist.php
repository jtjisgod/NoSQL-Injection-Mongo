<?php
    include "config.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if($password != $password2) {
        exit("<script>
        alert('Password Invalid');
</script>");
    }

    var_dump($_POST);
     
    $filter = ['username' => $username];
    $options = [];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongo->executeQuery($mongoAccounts, $query);
    $rows = $cursor -> toArray();

    if($rows) {
        exit("<script>
        alert('Username Already Exist.');
</script>");
    }

    $bulk = new MongoDB\Driver\BulkWrite;           
    $bulk->insert(['username' => $username, 'password' => $password]);
    $mongo->executeBulkWrite($mongoAccounts, $bulk);

?>
<script>
    alert("Registration Success");
    location.href="index.php";
</script>
