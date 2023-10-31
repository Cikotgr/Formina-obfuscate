<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use Illuminate\Http\RedirectResponse; use Illuminate\Http\Request; use Illuminate\Support\Facades\Password; use Illuminate\View\View; class PasswordResetLinkController extends Controller { public function create() : View { return view('auth.forgot-password'); } public function store(Request $request) : RedirectResponse { goto xUXPw; xEZV4: return $status == Password::RESET_LINK_SENT ? back()->with('status', __($status)) : back()->withInput($request->only('email'))->withErrors(['email' => __($status)]); goto IR9Zi; hyhvv: $status = Password::sendResetLink($request->only('email')); goto xEZV4; xUXPw: $request->validate(['email' => ['required', 'email']]); goto hyhvv; IR9Zi: } }
