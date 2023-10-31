<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware; class TrimStrings extends Middleware { protected $except = array('current_password', 'password', 'password_confirmation'); }
