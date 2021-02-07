<!doctype html>
<html lang="en">
<head>
    <charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?=$this->getMeta();?>

</head>
<body>
<p>Yes decal</p>
<?=$content; ?>
<?php
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();
debug($logs->grep('SELECT'));

?>
</body>
</html>
