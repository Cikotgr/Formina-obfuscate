<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Closure; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Symfony\Component\HttpFoundation\Response; class EnsureAuthAdmin { public function handle(Request $request, Closure $next) : Response { goto ZZg90; XSf7g: return $next($request); goto ZP8uv; ZP8uv: uZV2X: goto Axxdw; ZZg90: if (!(Auth::user()->role_id == 1)) { goto uZV2X; } goto XSf7g; Axxdw: return redirect('home'); goto S8D0P; S8D0P: } }
