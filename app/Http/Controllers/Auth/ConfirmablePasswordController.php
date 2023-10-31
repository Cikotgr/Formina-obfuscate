<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use App\Providers\RouteServiceProvider; use Illuminate\Http\RedirectResponse; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\Validation\ValidationException; use Illuminate\View\View; class ConfirmablePasswordController extends Controller { public function show() : View { return view('auth.confirm-password'); } public function store(Request $request) : RedirectResponse { goto gyCvP; TCm0s: throw ValidationException::withMessages(['password' => __('auth.password')]); goto a2OIL; a2OIL: CwqKC: goto Fv_E5; Fv_E5: $request->session()->put('auth.password_confirmed_at', time()); goto N26am; N26am: return redirect()->intended(RouteServiceProvider::HOME); goto cvGgz; gyCvP: if (Auth::guard('web')->validate(['email' => $request->user()->email, 'password' => $request->password])) { goto CwqKC; } goto TCm0s; cvGgz: } }
