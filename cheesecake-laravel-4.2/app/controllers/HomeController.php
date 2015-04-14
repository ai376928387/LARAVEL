<?php

class HomeController extends BaseController {
	public function __construct() {
        if (Lang::locale() === 'cn') {
            $fid = '|0|2';
        } else {
            $fid = '|0|1';
        }
        View::share('menu_items', DB::table('categories')->where("fid", "=", $fid)->get());
        //$this->beforeFilter('csrf', array('on' => 'post'));
        //$this->beforeFilter('auth'); 设置了这个则在app中所有的view如果在没有登陆的情况下都是自动跳转到Login 页面而不需要在main.php中用islogin来判断
    }
	public function home() {

		/*Mail::send('emails.auth.test',array('name'=>'Vicky'),function($message) {
			$message->to('beini.gao@gmail.com','Vicky')->subject('Test email');
		});*/

	//	echo $user = User::find(1)->username ;

		return View::make('home');
	}
}


