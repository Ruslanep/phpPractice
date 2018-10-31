<?php require __DIR__ . '/data.php'; ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <div>
       <?php foreach($images as $key => $value): ?>
        <a href="/gallery.php?id=<?php echo $key ;?>">
            <img src="/img/<?php echo $value; ?>" alt="">
        </a>
       <?php endforeach; ?>
    </div>
</div>


</body>
</html>
