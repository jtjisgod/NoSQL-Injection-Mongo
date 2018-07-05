<?php
    include "config.php";

    if(!$_SESSION['username']) {
        exit("<script>
        alert('Login Please');
        location.href = 'index.php';
</script>");
    }

    $idx = $_GET['id'];

    $filter = ["idx" => intval($idx)];
    $options = [];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $mongo->executeQuery($mongoBoard, $query);
    $board = $cursor -> toArray()[0];

    if($board -> secret == true && $board -> username != $_SESSION['username']) {
        exit("<script>alert('Secret Board');history.back(-1);</script>");
    }
    // var_dump($board);
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
    <form action="" method="POST">
        <div id="tableForm">
            <table class="table table-striped table-dark">
                <tbody>
                    <tr><th>IDX</th><td><?php echo $board -> idx; ?></td></tr>
                    <tr><th>WRITER</th><td><?php echo $board -> username; ?></td></tr>
                    <tr><th>TITLE</th><td><?php echo $board -> title; ?></td></tr>
                    <tr><th>CONTENT</th><td><div style="padding:30px;"><?php echo $board -> content; ?></div></td></tr>
                    <tr><th>SECRET</th><td><select name="secret" id="secret" disabled><option value="X">X</option><option value="O">O</option></select></td></tr>
                </tbody>
            </table>
        </div>
    </form>
    <script>
        var secret = <?php echo $board -> secret; ?>;
        if(secret) {
            $("#secret").val("O");
        }
    </script>
</body>
</html>