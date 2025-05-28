<?php
// 强制设置正确的 JSON 头部（关键修复）
header('Content-Type: application/json; charset=utf-8');

// 直接从 GET 参数获取数据
$type = $_GET['type'] ?? '';
$code = $_GET['code'] ?? '';

// 验证参数
if (empty($type) || empty($code)) {
    http_response_code(400);
    die(json_encode([
        'error' => true,
        'message' => '必须提供 type 和 code 参数'
    ]));
}

// 返回 JSON（禁用缓存确保实时性）
header('Cache-Control: no-cache, must-revalidate');
echo json_encode([
    'type' => $type,
    'code' => $code
], JSON_UNESCAPED_UNICODE); // 处理中文等特殊字符
?>
