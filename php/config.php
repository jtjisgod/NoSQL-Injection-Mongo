<?php
    @session_start();
    # https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwii3ZGfwYjcAhXGULwKHYX8B68QFggmMAA&url=http%3A%2F%2Fphp.net%2Fmanual%2Fen%2Fclass.mongodb-driver-manager.php&usg=AOvVaw2daBBpCzNNoPzFKrAk0rGU
    $mongo = new MongoDB\Driver\Manager();
    $mongoAccounts = "jtjisgod.accounts";
    $mongoBoard = "jtjisgod.board";
?>



