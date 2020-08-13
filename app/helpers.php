<?php
 /*
 自定义函数 需要在 composer.json 文件中的 autoload 选项里 files 字段加入该文件："files": [ "app/helpers.php"]
 并运行composer dump-autoload 重新加载
*/
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}