<?php spl_autoload_register(function ($class_name) {
include '../../app/Repository/' . $class_name . '.php';
});

$repository = new ReviewsRepository();

$list = $repository->getAll();

header('Content-type: application/json');
echo json_encode($list);