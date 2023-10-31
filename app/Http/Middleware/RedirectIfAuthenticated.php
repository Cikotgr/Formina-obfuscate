<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use App\Providers\RouteServiceProvider; use Closure; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Symfony\Component\HttpFoundation\Response; class RedirectIfAuthenticated { public function handle(Request $request, Closure $next, string ...$guards) : Response { goto gagRr; YeBFy: foreach ($guards as $guard) { goto YI9w0; hiXXI: return redirect(RouteServiceProvider::HOME); goto f_4On; YI9w0: if (!Auth::guard($guard)->check()) { goto qa5CL; } goto hiXXI; f_4On: qa5CL: goto H880a; H880a: KtuM0: goto QfdUi; QfdUi: } goto iflgS; iflgS: eQkkM: goto A5vIm; A5vIm: return $next($request); goto eVxUc; gagRr: $guards = empty($guards) ? [null] : $guards; goto YeBFy; eVxUc: } }
