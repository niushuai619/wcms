<?php
// +----------------------------------------------------------------------
// | 手机游戏模块
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Author: niushuaishuai <396057259@qq.com>
// +----------------------------------------------------------------------
namespace Admin\Controller;
use Common\Controller\AdminbaseController;
class MobilegamesController extends AdminbaseController {
	protected $games_model;
	protected $terms_model;
	
	function _initialize() {
		parent::_initialize();
        $this->games_model = M('mobilegames');
	}
	function index(){
		$this->_lists();
		$this->display();
	}
    //游戏编辑添加操作
	public function  handle(){
	    
	}
    //排序
    public function listorders() {
        $status = parent::_listorders($this->games_model);
        if ($status) {
            $this->success("排序更新成功！");
        } else {
            $this->error("排序更新失败！");
        }
    }
    //游戏删除操作
    public  function delete(){
        
    }
    private function _lists(){
            
            
    }
    //游戏类型
     private function game_type(){
        
        $type_arr = array(
                   '1'=>'角色',
                   '2'=>'卡牌',
                   '3'=>'竞技',
                   '4'=>'MOBA',
                   '5'=>'休闲',
                   '6'=>'养成',
                   '7'=>'策略'
        );
        return  $type_arr;
    }
}