<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2014 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Tuolaji <479923197@qq.com>
// +----------------------------------------------------------------------
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class MobilegamesController extends AdminbaseController {
	protected $games_model;
	protected $terms_model;
	
	function _initialize() {
		parent::_initialize();

	}
	function index(){
		$this->_lists();
		$this->_getTree();
		$this->display();
	}
	
}