<?php
header('Content-Type: application/json');

// 获取查询字符串
$queryString = $_SERVER['QUERY_STRING'] ?? '';

// 解析查询参数
parse_str($queryString, $params);

// 提取需要的参数
$type = $params['type'] ?? null;
$code = $params['code'] ?? null;

// 验证参数是否存在
if (!$type || !$code) {
    http_response_code(400);
    echo json_encode([
        'error' => 'Missing required parameters',
        'message' => 'Both "type" and "code" parameters are required'
    ]);
    exit;
}

// 在这里可以对参数进行进一步验证或处理
// 例如验证type是否为特定值（如'wx'）

// 返回获取到的参数
echo json_encode([
    'success' => true,
    'data' => [
        'type' => $type,
        'code' => $code
    ]
]);

// 如果需要，可以将参数用于其他操作，比如请求目标URL
// $targetUrl = "https://iappld.top/love520/?type=$type&code=$code&state=";
// $response = file_get_contents($targetUrl);
// 处理$response...
?>
