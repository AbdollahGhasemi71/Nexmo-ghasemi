<?php

namespace Nexmo\User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Nexmo\User\services\VerifyCodeService;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Nexmo\User\Http\Requests\VerfiyCodeMailRequest;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function show(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('User::auth.verify');
    }

    public function verify(VerfiyCodeMailRequest $request)
    {
        if (!VerifyCodeService::check(auth()->id(), $request->verify_code)) {
            return back()->withErrors('کد وارد شده معتبر نمی باشد بررسی نمایید');
        }
        auth()->user()->markEmailAsVerified();
        return redirect(route('home'));

    }
}
