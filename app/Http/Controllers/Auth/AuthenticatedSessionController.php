<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use App\Http\Requests\Auth\LoginRequest; use App\Providers\RouteServiceProvider; use Illuminate\Http\RedirectResponse; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\View\View; class AuthenticatedSessionController extends Controller { public function create() : View { return view('auth.login'); } public function store(LoginRequest $request) : RedirectResponse { goto DSWH9; GcZox: $request->session()->regenerate(); goto EctTm; EctTm: if (Auth::user()->role_id == 1) { goto ArSOR; } goto veAHy; DSWH9: $request->authenticate(); goto GcZox; t8LIr: CQLxZ: goto kv3cp; Ay_jk: ArSOR: goto PMHWn; veAHy: return redirect()->intended(RouteServiceProvider::HOME); goto y1RV8; y1RV8: goto CQLxZ; goto Ay_jk; PMHWn: return redirect()->intended(RouteServiceProvider::ADMIN); goto t8LIr; kv3cp: } public function destroy(Request $request) : RedirectResponse { goto sesyq; sesyq: Auth::guard('web')->logout(); goto N1_bw; q7PJK: $request->session()->regenerateToken(); goto dpHMD; N1_bw: $request->session()->invalidate(); goto q7PJK; dpHMD: return redirect('/'); goto UrGwv; UrGwv: } }
