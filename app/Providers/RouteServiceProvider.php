<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Cache\RateLimiting\Limit; use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\RateLimiter; use Illuminate\Support\Facades\Route; class RouteServiceProvider extends ServiceProvider { public const HOME = '/'; public const ADMIN = 'admin/'; public function boot() : void { RateLimiter::for('api', function (Request $request) { return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip()); }); $this->routes(function () { goto XVoec; XVoec: Route::middleware('api')->prefix('api')->group(base_path('routes/api.php')); goto KwFx2; Tldeh: Route::middleware('web')->group(base_path('routes/web.php')); goto EPE4X; KwFx2: Route::middleware('admin')->middleware('web')->prefix('admin')->group(base_path('routes/admin.php')); goto Tldeh; EPE4X: }); } }
