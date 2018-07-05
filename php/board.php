<?php
    include "config.php";

    if(!$_SESSION['username']) {
        exit("<script>
        alert('Login Please');
        location.href = 'index.php';
</script>");
    }

    $filter = [];
    $options = ["projection" => ["content" => 0]];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongo->executeQuery($mongoBoard, $query);
    $rows = $cursor -> toArray();

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JTJ's NoSQL Injection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="board.css">
    <script src="board.js"></script>
</head>
<body>
    <div id="title">JTJ's MongoDB-PHP Board</div>
    <div id="tableForm">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th style="width:100px;">IDX</th>
                    <th style="width:140px;">WRITER</th>
                    <th>TITLE</th>
                    <th style="width:100px;">SECRET?</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // var_dump($rows);
                for($i=0;$i<count($rows);$i++) {
            ?>
                <tr>
                    <td><?php echo $rows[$i] -> idx; ?></td>
                    <td><?php echo $rows[$i] -> username; ?></td>
                    <td><a href='read.php?id=<?php echo $rows[$i] -> idx; ?>'><?php echo $rows[$i] -> title; ?></a></td>
                    <td><?php echo $rows[$i] -> secret; ?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <div>
            <a href="write.php"><button class="btn btn-success">WRITE</button></a>
        </div>
    </div>
</body>
</html>