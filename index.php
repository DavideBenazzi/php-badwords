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
    $paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis iure quam veritatis ea dolor et commodi ut odit aspernatur quod, sed sunt nam, quidem qui? Reprehenderit illo minima inventore atque?';
?>
<!-- MY PARAGRAPH -->
<h2 class="mb20">My Paragraph with PHP</h2>
<p class="mb20"><?php echo $paragraph ?></p>
<h3 class="mb20">Length of paragraph : <?php echo strlen($paragraph) ?></h3>
    
</body>
</html>