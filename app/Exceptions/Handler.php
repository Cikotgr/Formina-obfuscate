<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Exceptions; use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler; use Throwable; class Handler extends ExceptionHandler { protected $dontFlash = array('current_password', 'password', 'password_confirmation'); public function register() : void { $this->reportable(function (Throwable $e) { }); } }
