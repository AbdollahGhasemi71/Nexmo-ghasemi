<?php

namespace Nexmo\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Nexmo\User\services\VerifyCodeService;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Nexmo\User\Http\Requests\CheckResetPasswordRequest;
use Nexmo\User\Http\Requests\ResetPasswrodReauestEamil;
use Nexmo\User\repositories\UserRepo;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('User::auth.passwords.email');
    }

    public $repo;

    public function __construct(UserRepo $userRepo)
    {
        $this->repo = $userRepo;
    }

    public function sendVerifyCodeEamil(ResetPasswrodReauestEamil $request)
    {

        $user = $this->repo->findbyEmail($request->email);
        if ($user && !VerifyCodeService::has($user->id)) {
            $user->SendResetPasswordCodeNotification();
        }
        return view('User::auth.passwords.reset-password-code');
    }

    public function checkResetPasswordCode(CheckResetPasswordRequest $request)
    {
        $user = $this->repo->findbyEmail($request->email);
        if ($user == null || !VerifyCodeService::check($user->id, $request->verify_code)) {
            return back()->withErrors('کد وارد شده معتبر نمباشد');
        }
        auth()->loginUsingId($user->id);
        return redirect()->route('password.showResetForm');

    }

}
