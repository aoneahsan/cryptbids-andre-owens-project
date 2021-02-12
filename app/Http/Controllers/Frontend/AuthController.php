<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Laravel\Fortify\Http\Responses\LoginResponse;

class AuthController extends AuthenticatedSessionController
{
    public function loginView()
    {
        Inertia::setRootView('layouts.cryptic-signup');
        return Inertia::render("FrontendCryptic/Login/Login");
    }

    public function registerView()
    {
        Inertia::setRootView('layouts.cryptic-signup');
        return Inertia::render("FrontendCryptic/Register/Register");
    }

    public function login(LoginRequest $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6']
        ]);

        // $user = User::where("email", $request->email)->first();

        // if (Hash::check($request->password, $user->password)) {
        //     $this->guard->login($user);

        $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
        });

        return redirect("/dashboard");
        // } else {
        //     return redirect()->back()->withErrors(["email" => "No User found with this email"]);
        // }
    }

    public function register(Request $request)
    {
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ["required", "string", "min:6"]
        ]);

        $user = User::create([
            'name' => $request->has('name') ? $request->name : null,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        ]);

        event(new Registered($user));

        $this->guard->login($user);

        // return app(RegisterResponse::class);
        return redirect("/dashboard");
    }

    public function showVerifyEmailView(Request $request)
    {
        if (!empty($request->user()->email_verified_at)) {
            return redirect("/dashboard");
        }
        Inertia::setRootView('layouts.cryptic-full-page');
        return Inertia::render("FrontendCryptic/NoticeEmailVerification/NoticeEmailVerification");
    }

    public function verifyEmailAction(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/dashboard');
    }

    public function resendVerificationEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success_message', 'Verification link sent!');
    }

    public function logout(Request $request)
    {
        return $this->destroy($request);
    }
}
