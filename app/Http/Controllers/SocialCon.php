<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use DB;
use Auth;

class SocialCon extends Controller
{
	public function facebooklogin(){
		return Socialite::driver('facebook')->redirect();
	}

	public function facebookresponse(){

		$user = Socialite::driver('facebook')->user();
		$finduser = DB::table("users")->where('email',$user->email)->first();

		if ($finduser) {
			Auth::loginUsingId($finduser->id);
			return redirect('/home');

		} else {
			$newUser = DB::table("users")->insertGetId([
				'name'        => $user->name,
				'email'       => $user->email,
				'provider_id' => $user->id,
				'avatar'      => $user->avatar,
			]);

			Auth::loginUsingId($newUser);
			return redirect('/home');
		}


	}





	public function googlelogin(){
		return Socialite::driver('google')->redirect();
	}

	public function googleresponse(){

		$user = Socialite::driver('google')->user();
		$finduser = DB::table("users")->where('provider_id',$user->id)->first();

		if ($finduser) {

			Auth::loginUsingId($finduser->id);
			return redirect('/home');

		} else {
			$newUser = DB::table("users")->insertGetId([
				'name'        => $user->name,
				'email'       => $user->email,
				'provider_id' => $user->id,
				'avatar'      => $user->avatar,
			]);

			Auth::loginUsingId($newUser);
			return redirect('/home');
		}


	}


}
