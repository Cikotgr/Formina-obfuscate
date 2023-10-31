<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use App\Providers\RouteServiceProvider; use Illuminate\Auth\Events\Verified; use Illuminate\Foundation\Auth\EmailVerificationRequest; use Illuminate\Http\RedirectResponse; class VerifyEmailController extends Controller { public function __invoke(EmailVerificationRequest $request) : RedirectResponse { goto Qf8Q8; hhF4O: if (!$request->user()->markEmailAsVerified()) { goto Re92L; } goto b3hMQ; w4Mvu: Re92L: goto pF8fq; gUVH3: KG7LW: goto hhF4O; Qf8Q8: if (!$request->user()->hasVerifiedEmail()) { goto KG7LW; } goto n3LM9; n3LM9: return redirect()->intended(RouteServiceProvider::HOME . '?verified=1'); goto gUVH3; b3hMQ: event(new Verified($request->user())); goto w4Mvu; pF8fq: return redirect()->intended(RouteServiceProvider::HOME . '?verified=1'); goto pK4cY; pK4cY: } }
