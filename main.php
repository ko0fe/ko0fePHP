<!DOCTYPE html>
    <html lang="en">
<head>
    <metacharset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ko0fe PHP </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<divclass="flex-container">

<divclass="header">
<?php include 'logo.inc.php' ?>
<?php include 'menu.inc.php' ?>
</div>

<div class="about_me">
    <h1>  <?php echo $p ?> </h1>
    <divclass="data">
</div>

<img src="../img/aa.jpg" width="258" height="146">

<divclass="fullname">
<p> Меня зовут
    <?php echo $name, ' ', $surname . '<br>';
    echo 'город', ' ', $city; ?>
</p>

<p> Мне
    <?php  echo $age;   ?>
    лет </p>
<p> Бывает моментами тяжело, но мы не сдаёмся</p>
<p> Учимся дальше </p>
</div>
</div>

<div class="knowledge">

    <?php  include 'knowledge.inc.php'; ?>
    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

    <?php
    $a = 40;
    $b = 50;
    $c = $a + $b;
    echo $c;
    ?>   <br>
    <?php
    echo $d;
    ?>

</div>

<div class="article">
    <p class="text">
        Кто угодно может предсказать будущее... но лишь мечтатель претворяет его в жизнь...
    </p>
</div>
</div>

<?php include 'footer.inc.php' ?>

</div>



</body>
</html>