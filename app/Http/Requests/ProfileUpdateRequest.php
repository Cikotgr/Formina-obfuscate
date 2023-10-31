<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Requests; use App\Models\User; use Illuminate\Foundation\Http\FormRequest; use Illuminate\Validation\Rule; class ProfileUpdateRequest extends FormRequest { public function rules() : array { return ['name' => ['string', 'max:255'], 'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)]]; } }
