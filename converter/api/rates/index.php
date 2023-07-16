<?php
$params = [
    'parammode' => 2
];
$url = "https://api.nbrb.by/exrates/rates/USD?" . http_build_query($params);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);
$info = curl_getinfo($curl);
$response = '';

if ($info['http_code'] === 200) {
    $currency = json_decode($result, true);
    $response = [
        'status' => 'success',
        'code' => 200,
        'data' => [
            'rate' => $currency['Cur_OfficialRate']]
    ];
} else {
    $error = curl_error($curl);

    if (!empty($error)) {
        $response = ['status' => 'error', 'code' => 500, 'message' => $error];
    } else {
        $response = ['status' => 'error', 'code' => $info['http_code'], 'message' => 'Ошибка в запросе'];
    }
}

curl_close($curl);

http_response_code($response['code']);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);