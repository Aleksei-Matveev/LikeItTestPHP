<?php spl_autoload_register(function ($class_name) {
include '../../../app/Repository/' . $class_name . '.php';
});

$repository = new AdminRepository();

$list = $repository->getAll(true);

header('Content-type: application/json');
echo json_encode($list);