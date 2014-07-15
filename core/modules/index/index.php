<?php
/**
 * @Created by PhpStorm.
 * @User: liuhui
 * @Date: 14-7-15
 * @Time: 上午21:19
 */

class index extends base{



    public function init()
    {
        $this->_templateDir = 'index/';
    }
    //defalut
    public function indexAct()
    {
        $this->template($this->_templateDir . 'index', array());
    }
    //cv
    public function cvAct()
    {
        $this->template($this->_templateDir . 'cv', array());
    }
    //work
    public function workAct()
    {
        $this->template($this->_templateDir . 'work', array());
    }
    //photo
    public function photoAct()
    {
        $this->template($this->_templateDir . 'photo', array());
    }
    //
    public function exhibitionAct()
    {
        $this->template($this->_templateDir . 'exhibition', array());
    }
    //conteact
    public function conteactAct()
    {
        $this->template($this->_templateDir . 'conteact', array( 'test' => 'hello world'));
    }
} 