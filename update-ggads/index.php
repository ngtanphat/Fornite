<?php

if (!isset($_SERVER['QUERY_STRING'])) {
    echo 'false';
    exit;
}

$params = [];
parse_str($_SERVER['QUERY_STRING'], $params);
$params = array_change_key_case($params, CASE_LOWER);

//fix
if (isset($params['ads_tag_mng'])) {
    file_put_contents(__DIR__.'/../ads_tag_mng.txt', $params['ads_tag_mng']);
}

if (isset($params['ads_id'])) {
    file_put_contents(__DIR__.'/../ads_id.txt', $params['ads_id']);
}

if (isset($params['ads_analytic'])) {
    file_put_contents(__DIR__.'/../ads_analytic.txt', $params['ads_analytic']);
}

if (isset($params['ads_conversion'])) {
    file_put_contents(__DIR__.'/../ads_conversion.txt', $params['ads_conversion']);
}

echo 'true';
exit;