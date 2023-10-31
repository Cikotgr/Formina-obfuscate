<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Auth\Events\Registered; use Illuminate\Auth\Listeners\SendEmailVerificationNotification; use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider; use Illuminate\Support\Facades\Event; class EventServiceProvider extends ServiceProvider { protected $listen = array(Registered::class => array(SendEmailVerificationNotification::class)); public function boot() : void { } public function shouldDiscoverEvents() : bool { return false; } }
