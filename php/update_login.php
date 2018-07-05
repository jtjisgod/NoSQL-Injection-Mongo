<?php
    include "config.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    $filter = ['username' => $username, 'password' => $password];
    $options = [
    ];
    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongo->executeQuery($mongoAccounts, $query);
    $rows = $cursor -> toArray();

    $_SESSION['username'] = $username;

    if(!$rows) {
        exit("<script>
        alert('Username or Password is invalid');
        history.back(-1);
</script>");
    }

?>
<script>
    alert("Login Success");
    location.href="board.php";
</script>
