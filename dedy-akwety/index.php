<?php
$router = new Altorouter();
$router->map('GET', '/', function(){
    require_once 'Public/Pages/homePage.php';
});
$router->map('GET', '/curriculumVitae', function(){
    require_once 'Public/Pages/curriculumVitae.php';
});
?>