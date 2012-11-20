<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends ChenFeng_Controller {
      

    //put your code here
    public function index() {
        $this->smartylib->assign('baz', 'qux');
        //$this->smartylib->display('header' . $this->tpl_suffix);
        $this->smartylib->display('index' . $this->tpl_suffix);
        //$this->smartylib->display('footer' . $this->tpl_suffix);
        $this->load->view('index' . $this->tpl_suffix);
    }

}
