<?php 

class WsspController extends WsspAppController {
  
  public $name = 'Wssp';

  public $uses = array('Wssp', 'Point.PointUser', 'Point.PointBook', 'Members.Mypage');
  
  public $helpers = array('BcPage', 'BcHtml', 'BcTime', 'BcForm');
  
  public $components = ['BcAuth', 'Cookie', 'BcAuthConfigure'];
  
  public $subMenuElements = array('');

  public $crumbs = array(
    array('name' => 'マイページトップ', 'url' => array('plugin' => 'members', 'controller' => 'mypages', 'action' => 'index')),
  );

  public function beforeFilter() {
    parent::beforeFilter();
    //$this->BcAuth->allow('');
    if(preg_match('/^admin_/', $this->action)){
	   $this->subMenuElements = array('wssp');
    }
    $this->Security->unlockedActions = array('wssp');
  }

  public function admin_index() {
	$this->pageTitle = '(wssp)';
  }
  
  public function index() {
    $user = $this->BcAuth->user();
    $this->pageTitle = 'Wssp';
  }


}






?>