<!DOCTYPE html>
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
    <form action="update_write.php" method="POST">
        <div id="tableForm">
            <table class="table table-striped table-dark">
                <tbody>
                    <tr><th>TITLE</th><td><input type="text" name="title" id="title"></td></tr>
                    <tr><th>CONTENT</th><td><textarea name="content" id="content" cols="30" rows="10"></textarea></td></tr>
                    <tr><th>SECRET</th><td><select name="secret" id="secret"><option value="X">X</option><option value="O">O</option></select></td></tr>
                </tbody>
            </table>
            <div>
                <button class="btn btn-success" style="width:100%;">WRITE</button>
            </div>
        </div>
    </form>
</body>
</html>