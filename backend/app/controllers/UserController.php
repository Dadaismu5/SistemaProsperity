<?php

class UserController extends BaseController {

	public function UserLogin()
	{
		$user_data = array(
      'user'      => Input::get('username'),
      'password'  => Input::get('password'),
      'status'    => 'active'
    );

    if (Auth::attempt($user_data)){
      return Redirect::to("/customers");
    } else {
      return Redirect::to("/")->with('login_errors', true);
    }
	}

  
}
