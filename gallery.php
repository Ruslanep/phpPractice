<?php
require __DIR__ . '/data.php';
$img = $images[$_GET['id']];
?>


<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<div>

    <img src="/img/<?php echo $img; ?>" alt="">

</div>

</body>
</html>
