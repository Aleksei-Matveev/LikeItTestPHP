<?php
include '../../app/Repository/ReviewsRepository.php';

$request = json_decode(file_get_contents('php://input'), true);

if(empty($request)){
    http_response_code(404);
    echo json_encode(['status' => 'error']);
    return;
}

$user = new User([]);

$repository = new ReviewsRepository();




header('Content-type: application/json');
echo json_encode($request);