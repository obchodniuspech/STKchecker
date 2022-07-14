<?php

class UsersController extends BaseController {
	protected $email, $password;
	
	public function login($email,$password) {
		echo "prihlas $email s heslem $password";exit;
	}
}