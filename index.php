<?php
    $langconst = "";
    include('setLanguage.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $langconst['titleNews'];?></title>
</head>
<body>
    <h1><?php echo $langconst['textForHomePage'];?></h1>
    <a href="index.php?lang=ru"><?php echo $langconst['ruLanguage'];?></a>
    <a href="index.php?lang=en"><?php echo $langconst['enLanguage'];?></a>
    <br>
    <a href="news.php"><?php echo $langconst['titleNews'];?></a>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla facilis, 
    perspiciatis maiores quaerat ad, aperiam natus animi itaque aliquid officiis 
    consequatur recusandae illum repellendus voluptatem possimus, beatae aut dolorem pariatur? 
    Tempora laborum fugit aspernatur, asperiores officia, ipsa, iste minus praesentium 
    ipsum fuga labore ratione. Suscipit, accusantium nihil, ipsa dolorem labore qui sapiente
     cumque ipsum temporibus quidem amet alias sit voluptatibus porro doloremque omnis tempore
      nulla ex totam blanditiis cum illum exercitationem dolores? Recusandae, error veritatis?
       Iure quis, nulla laboriosam fuga vitae eveniet debitis maxime voluptatem iste optio alias pariatur.
        Perferendis illum sequi accusamus laborum officia nesciunt distinctio non modi. Corporis.</p>
</body>
</html>
