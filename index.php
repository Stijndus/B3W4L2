<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lab 2 - Includes en require</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <?php include 'includes/header.php' ?>
        <div class="content">
            <?php 

        if(empty($_GET)){
          include_once 'pages/onderwerp1.php';
        } else {
          include_once($_GET['content']);
        }
        ?>
        </div>
        <?php include 'includes/footer.php' ?>
    </main>
</body>

</html>s