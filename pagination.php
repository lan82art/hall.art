<?php
$currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
$buttonsQnt = 6;
$lastPage = 50;

$start = ($currentPage > 4) ? ($currentPage - ceil($buttonsQnt / 2) ) : 1;
$st = $start;
$start = ($buttonsQnt > $lastPage - $start) ? $lastPage - $buttonsQnt : $st;
$stop = $currentPage < ($lastPage - ceil($buttonsQnt / 2)) ? $start + $buttonsQnt : $lastPage;

echo 'start '.$start.'<br/>';
echo 'stop '.$stop.'<br/>';

