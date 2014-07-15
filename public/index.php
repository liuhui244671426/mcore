<?php
/**
 * @Created by PhpStorm.
 * @User: liuhui
 * @Date: 14-7-15
 * @Time: 上午23:34
 */
    error_reporting(E_ALL);
    header('Content-type:text/html;charset=utf8');
    date_default_timezone_set('PRC');

    include __DIR__ . '/../core/mcore.php';
    //var_dump(get_included_files());

    $m = !empty($_GET['m']) ? $_GET['m'] : 'index';
    $c = !empty($_GET['c']) ? $_GET['c'] : 'index';
    $a = !empty($_GET['a']) ? $_GET['a'] : 'index';

    //echo $m . $c . $a;
    $t = new initApp($m, $c, $a);
    //print_r($t);

    //print_r(APP_PATH);