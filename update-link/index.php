<?php
$params = [];
parse_str($_SERVER['QUERY_STRING'], $params);
header('Content-Type: application/json');

if (!empty($params['link'])) {
    file_put_contents(__DIR__ . '/../link_download.txt', $params['link']);

    $isApk = isset($params['is_apk']) && intval($params['is_apk']) == 1 ? 1 : 0;
    file_put_contents(__DIR__.'/../is_apk.txt', $isApk);


    echo json_encode(['status' => true, 'link' => $params['link'], 'params' => $params]);
} else {

    echo json_encode(['status' => false, 'link' => $params['link'], 'params' => $params]);
}
