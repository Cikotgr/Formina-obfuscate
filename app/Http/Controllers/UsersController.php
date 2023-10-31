<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers; use App\Models\Profile; use App\Models\User; use Illuminate\Http\Request; class UsersController extends Controller { public function index() { $users = User::where('role_id', '=', 2)->get(); return view('admin.user.index', compact('users')); } public function profile($id) { goto BU3fE; Nkjcn: return view('admin.user.profile', compact('profile')); goto MdZSe; BU3fE: $profile = Profile::where('user_id', '=', $id)->get(); goto ZsDH1; ZsDH1: $profile = $profile[0]; goto Nkjcn; MdZSe: } }
