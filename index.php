<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>php-badwords</title>
</head>
<body>
<!-- PHP -->
<?php 
    $paragraph = 'lorem ipsum, dolor sit amet consectetur adipisicing elit.lorem ipsum, dolor sit amet consectetur adipisicing elit.lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.';
    $badword = 'dolor';
?>

<!-- MY PARAGRAPH -->
<h2 class="mb20">My Paragraph with PHP</h2>

<!-- ECHO PARAGRAPH -->
<p class="mb20"><?php echo $paragraph; ?></p>

<!-- LENGTH PARAGRAPH -->
<h3 class="mb20">Length of paragraph : <?php echo strlen($paragraph); ?></h3>

<!-- REPLACE OF PART OF THE STRING -->
<?php $bad_word = $_GET['word'] ?>
<?php $new_paragraph = str_replace($bad_word , '*****' , $paragraph); ?>

<!-- SOSTITUTION OF 'WORD' WITH '*****' -->
<h3 class="mb20">Type in the Url "?word=" and the word you want to censure</h3>
<p class="mb20"><?php echo $new_paragraph ?></p>

    
</body>
</html>