<?php
// 设置响应头为纯JSON格式（确保浏览器直接显示JSON）
header('Content-Type: application/json; charset=utf-8');

// 直接从GET请求获取参数
$type = $_GET['type'] ?? '';
$code = $_GET['code'] ?? '';

// 检查参数是否存在
if (empty($type) || empty($code)) {
    http_response_code(400); // 400 Bad Request
    echo json_encode([
        'error' => true,
        'message' => 'Missing required parameters: type and code must be provided'
    ], JSON_PRETTY_PRINT);
    exit;
}

// 返回简洁的JSON响应
echo json_encode([
    'type' => $type,
    'code' => $code
], JSON_PRETTY_PRINT);
?>
