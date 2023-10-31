<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use Illuminate\Auth\Events\PasswordReset; use Illuminate\Http\RedirectResponse; use Illuminate\Http\Request; use Illuminate\Support\Facades\Hash; use Illuminate\Support\Facades\Password; use Illuminate\Support\Str; use Illuminate\Validation\Rules; use Illuminate\View\View; class NewPasswordController extends Controller { public function create(Request $request) : View { return view('auth.reset-password', ['request' => $request]); } public function store(Request $request) : RedirectResponse { goto tTI4h; YTVeI: return $status == Password::PASSWORD_RESET ? redirect()->route('login')->with('status', __($status)) : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]); goto vsbkz; tTI4h: $request->validate(['token' => ['required'], 'email' => ['required', 'email'], 'password' => ['required', 'confirmed', Rules\Password::defaults()]]); goto mU7_B; mU7_B: $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user) use($request) { $user->forceFill(['password' => Hash::make($request->password), 'remember_token' => Str::random(60)])->save(); event(new PasswordReset($user)); }); goto YTVeI; vsbkz: } }
