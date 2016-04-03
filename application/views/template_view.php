<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title; ?> | e-commerce</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
    
</head>
<body>
<header class="container">
    <?php
    require_once '_chunks/header.php';
    ?>
</header>
<main class="row container">
    <div class="col-md-2">
        <div class="left-menu">
            <?php
            require_once '_chunks/left_menu.php';
            ?>
        </div>
    </div>

    <!--main content of web-site-->
    <div class="col-md-10">
        <div class="container">
            <?php include 'application/views/'.$content_view; ?>
        </div>
    </div>

</main>

<script src="/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/bootstrap/dist/js/jquery.min.js"></script>
</body>
</html>
