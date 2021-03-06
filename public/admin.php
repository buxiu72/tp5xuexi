<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2017/4/25 15:37
 */
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('ROOT_PATH',__DIR__.'/../');
define('APP_PATH', ROOT_PATH . 'admin/');
define('CONF_PATH', ROOT_PATH.'config/');
define('RUNTIME_PATH', ROOT_PATH . 'runtime/admin/');
define('APP_NAMESPACE','admin');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';