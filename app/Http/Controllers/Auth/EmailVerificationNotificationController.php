<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use App\Providers\RouteServiceProvider; use Illuminate\Http\RedirectResponse; use Illuminate\Http\Request; class EmailVerificationNotificationController extends Controller { public function store(Request $request) : RedirectResponse { goto mZgC2; ZBt8B: $request->user()->sendEmailVerificationNotification(); goto p_KGp; mZgC2: if (!$request->user()->hasVerifiedEmail()) { goto GnpB1; } goto J6KRo; CQmIY: GnpB1: goto ZBt8B; J6KRo: return redirect()->intended(RouteServiceProvider::HOME); goto CQmIY; p_KGp: return back()->with('status', 'verification-link-sent'); goto LF4g7; LF4g7: } }
