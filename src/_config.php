<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$db['host'] = '127.0.0.1';
$db['port'] = '3306';
$db['username'] = 'haxo';
$db['password'] = 'haxo';
$db['database'] = 'students';

// 创建 MySQLi 连接
$link = new mysqli($db['host'], $db['username'], $db['password'], $db['database']);

// 检查连接是否成功
if ($link->connect_error) {
    die('Could not connect: ' . $link->connect_error);
}

// 设置字符集
$link->set_charset('utf8');

foreach ($_POST as $key => $value) {
    if (stripos($value, 'sleep') !== false || stripos($value, 'benchmark') !== false) {
        die('BAN sleep,benchmark');
    }
}
?>
