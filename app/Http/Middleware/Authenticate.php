<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Auth\Middleware\Authenticate as Middleware; use Illuminate\Http\Request; class Authenticate extends Middleware { protected function redirectTo(Request $request) : ?string { return $request->expectsJson() ? null : route('login'); } }
