<?php

    class initApp
    {
        public $_m, $_c, $_a;
        public function __construct($m, $c, $a)
        {
            define('APP_PATH', __DIR__ . './../');
            define('CORE_PATH', APP_PATH . './core/');
            define('CONFIG_PATH', APP_PATH . './config/');
            define('TEMPLATE_PATH', APP_PATH . './public/template/');

            self::loadCoreClass('base');

            $this->_m = $m;
            $this->_c = $c;
            $this->_a = $a;
            self::router($this->_m, $this->_c, $this->_a);
        }

        //load other class
        public static function loadCoreClass($class)
        {
            include CONFIG_PATH . 'config.php';
            include CORE_PATH . 'modules/base.php';
        }

        public function router($m, $c, $a)
        {
            include CORE_PATH . 'modules/' . $m . '/' . $c . '.php';
            $act = $a . 'Act';

            $obj = new $c();
            $obj->$act();
        }
    }
//todo
//    spl_autoload_register(array('class', 'initApp::loadCoreClass'))
?>