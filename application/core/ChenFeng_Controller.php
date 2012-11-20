<?php

class ChenFeng_Controller extends CI_Controller {
    var $is_mobile= false;
    var $tpl_suffix = '.tpl';
        
    /**
     * chenfeng親クラス
     */
    function __construct() {
        parent::__construct();
        $this->init_chenfeng();
    }

    // Controller 初期化
    protected function init_chenfeng() {
        // road chenfeng_const
        $this->config->load('chenfeng_const', TRUE);

        // user_agent判定
        $this->is_mobile = false;
        if ($this->agent->is_mobile('iphone')) {
            $this->is_mobile = true;
        } else if ($this->agent->is_mobile('android')) {
            $this->is_mobile = true;
        }

        // suffix定義
        if ($this->is_mobile) {
            $this->tpl_suffix = '_sp.tpl';
        } else {
            $this->tpl_suffix = '.tpl';
        }
    }

}
