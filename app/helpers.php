<?php
 /*
 自定义函数 需要在 composer.json 文件中的 autoload 选项里 files 字段加入该文件："files": [ "app/helpers.php"]
 并运行composer dump-autoload 重新加载
*/
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
/*
如果传参满足指定条件 ($condition) ，此函数将返回 $activeClass，否则返回 $inactiveClass。
此扩展包提供了一批函数让我们更方便的进行 $condition 判断：
if_route () - 判断当前对应的路由是否是指定的路由；
if_route_param () - 判断当前的 url 有无指定的路由参数。
if_query () - 判断指定的 GET 变量是否符合设置的值；
if_uri () - 判断当前的 url 是否满足指定的 url；
if_route_pattern () - 判断当前的路由是否包含指定的字符；
if_uri_pattern () - 判断当前的 url 是否含有指定的字符；
*/
function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return Str::limit($excerpt, $length);
}