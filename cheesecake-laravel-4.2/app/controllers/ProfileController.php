<?php
class ProfileController extends BaseController {
	public function user($username){
		$user =User::Where('username','=',$username);

		if($user->count()){
			$user = $user->first();

			return View::make('profile.user')
					->with ('user',$user);
		}

		return App::abort(404);
	}
}