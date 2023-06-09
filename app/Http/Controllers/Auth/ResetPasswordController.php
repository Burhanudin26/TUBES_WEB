<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

	/**
	 * Where to redirect users after resetting their password.
	 * 
	 * @return string
	 */
	public function getRedirectTo() {
		return $this->redirectTo;
	}
	
	/**
	 * Where to redirect users after resetting their password.
	 * 
	 * @param string $redirectTo Where to redirect users after resetting their password.
	 * @return self
	 */
	public function setRedirectTo($redirectTo): self {
		$this->redirectTo = $redirectTo;
		return $this;
	}
}
