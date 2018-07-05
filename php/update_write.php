<?php
    include "config.php";

    if(!$_SESSION['username']) {
        exit(-1);
    }

    $username = $_SESSION['username'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $secret = ($_POST['secret'] === 'O') ? true : false;

    $filter = [];
    $options = ["projection" => ["idx" => 1]];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongo->executeQuery($mongoBoard, $query);
    $idx = count($cursor -> toArray()) + 1;


    $bulk = new MongoDB\Driver\BulkWrite;           
    $bulk->insert([
        'username' => $username,
        'idx' => $idx,
        'title' => $title,
        'content' => $content,
        'secret' => $secret
    ]);
    $mongo->executeBulkWrite($mongoBoard, $bulk);

?>
<script>
    alert("Write Success");
    location.href="board.php";
</script>
