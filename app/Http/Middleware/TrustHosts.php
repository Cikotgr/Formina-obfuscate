<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Middleware; use Illuminate\Http\Middleware\TrustHosts as Middleware; class TrustHosts extends Middleware { public function hosts() : array { return [$this->allSubdomainsOfApplicationUrl()]; } }
