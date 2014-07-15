<?php
/**
 * @Created by PhpStorm.
 * @User: liuhui
 * @Date: 14-7-5
 * @Time: 上午2:20
 */

class base {

    protected $_templateDir;
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {

    }

    public function template($tmp, array $tempData)
    {
        $t = $tempData;
        include TEMPLATE_PATH . $tmp . '.php';
//        $this->template_c($tmp, $tempData);
    }

    //close
    public function template_c($tmp, array $tempData)
    {
        $html = file_get_contents(TEMPLATE_PATH . $tmp . '.html');
        $match = '/^[<{]-[}>]$/';
        var_dump(preg_match($match, $html));
//        print_r($html);
    }

    public function __call($name, $arguments)
    {
        $this->template('error/404', array());
    }

    //post
    public function Post($name)
    {
        return $_POST[$name];
    }
    //get
    public function Get($name)
    {
        return $_GET[$name];
    }
} 