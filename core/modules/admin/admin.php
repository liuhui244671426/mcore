<?php
/**
 * @Created by PhpStorm.
 * @User: liuhui
 * @Date: 14-7-15
 * @Time: 下午11:08
 */

class admin extends base{

    public function init()
    {
        $this->_templateDir = 'admin/';
    }

    //defalut index
    public function indexAct()
    {
        $this->login();
    }

    public function loginAct()
    {
        $name = $this->Post('name');
        $password = $this->Post('password');

        if($name == 'admin' && $password == 'admin')
        {
            $_SESSION['admin'] = true;
            header('Location: index.php?m=admin&c=admin&a=list');
        }
        else
        {
            header('Location: index.php?m=admin&c=admin&a=index');
        }
    }
    //list
    public function listAct()
    {
        $this->template($this->_templateDir . 'list', array());
    }

    public function login()
    {
        $this->template($this->_templateDir . 'login', array());
    }

    public function __call($name, $arguments)
    {
        $this->template('error/404', array());
    }
} 