<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

if (!function_exists('ajaxReturn')) {
    /**
     * 返回接口信息
     */
    function ajaxReturn($code, $message = '', $data = [])
    {
        return json_encode([
            "code"    => $code,
            "message" => $message,
            "data"    => $data,
        ]);
    }
}
