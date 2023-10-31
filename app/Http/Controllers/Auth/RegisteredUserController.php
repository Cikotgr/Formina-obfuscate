<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use App\Models\User; use App\Providers\RouteServiceProvider; use Illuminate\Auth\Events\Registered; use Illuminate\Http\RedirectResponse; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Hash; use Illuminate\Validation\Rules; use Illuminate\View\View; class RegisteredUserController extends Controller { public function create() : View { return view('auth.register'); } public function store(Request $request) : RedirectResponse { goto tQy0j; b_yBs: Auth::login($user); goto rg6J2; z65jK: $user = User::create(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password), 'role_id' => 2]); goto pDIwN; pDIwN: event(new Registered($user)); goto b_yBs; tQy0j: $request->validate(['name' => ['required', 'string', 'max:255'], 'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class], 'password' => ['required', 'confirmed', Rules\Password::defaults()]]); goto z65jK; rg6J2: return redirect(RouteServiceProvider::HOME); goto ZzVzs; ZzVzs: } }
