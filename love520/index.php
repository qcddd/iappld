<?php
// 设置响应头为JSON格式
header('Content-Type: application/json');

// 初始化返回数据数组
$data = [
    'code' => '',
    'type' => '',
    'status' => 'success',
    'message' => '参数获取成功'
];

try {
    // 检查code和type参数是否存在
    if (isset($_GET['code'])) {
        $data['code'] = $_GET['code'];
    } else {
        throw new Exception('缺少code参数');
    }

    if (isset($_GET['type'])) {
        $data['type'] = $_GET['type'];
    } else {
        throw new Exception('缺少type参数');
    }
} catch (Exception $e) {
    // 错误处理
    $data['status'] = 'error';
    $data['message'] = $e->getMessage();
}

// 返回JSON数据
echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>    
