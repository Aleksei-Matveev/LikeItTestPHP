<?php
include '../../../app/Repository/AdminRepository.php';
include '../../../app/Models/Review.php';

$request = json_decode(file_get_contents('php://input'), true);

if(empty($request)){
    http_response_code(404);
    echo json_encode(['status' => 'error']);
    return;
}

$repository = new AdminRepository();
$result = $repository->getById($request['id']);

if ($result) {
    $review = new Review($result);
    $review->changeStatus();
}


$result = $repository->Update($review);


header('Content-type: application/json');
echo json_encode(['data' => $result]);