<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once './layout/header.php';
require_once './router/router.php';

$content = appRouter($_GET['page'] ?? 'default');


?>


<nav>
    <div><a href="/?page=temp1">Temp 1</a></div>
    <div><a href="/?page=temp2">Temp 2</a></div>
    <div><a href="/?page=temp3">Temp 3</a></div>
    <div><a href="/?page=temp4">Temp 4</a></div>

</nav>

<div class="container">
    <?= $content; ?>
</div>





<?php require_once './layout/footer.php'; ?>



