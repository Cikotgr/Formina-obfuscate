<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Console; use Illuminate\Console\Scheduling\Schedule; use Illuminate\Foundation\Console\Kernel as ConsoleKernel; class Kernel extends ConsoleKernel { protected function schedule(Schedule $schedule) : void { } protected function commands() : void { $this->load(__DIR__ . '/Commands'); require base_path('routes/console.php'); } }
