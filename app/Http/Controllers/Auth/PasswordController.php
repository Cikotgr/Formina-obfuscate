<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use Illuminate\Http\RedirectResponse; use Illuminate\Http\Request; use Illuminate\Support\Facades\Hash; use Illuminate\Validation\Rules\Password; class PasswordController extends Controller { public function update(Request $request) : RedirectResponse { goto V995i; w2qEs: return back()->with('status', 'password-updated'); goto OgINK; V995i: $validated = $request->validateWithBag('updatePassword', ['current_password' => ['required', 'current_password'], 'password' => ['required', Password::defaults(), 'confirmed']]); goto W_k5X; W_k5X: $request->user()->update(['password' => Hash::make($validated['password'])]); goto w2qEs; OgINK: } }
