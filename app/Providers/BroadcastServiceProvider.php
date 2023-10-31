<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Providers; use Illuminate\Support\Facades\Broadcast; use Illuminate\Support\ServiceProvider; class BroadcastServiceProvider extends ServiceProvider { public function boot() : void { Broadcast::routes(); require base_path('routes/channels.php'); } }
