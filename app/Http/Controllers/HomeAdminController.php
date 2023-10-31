<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers; use App\Models\Transaction; use App\Models\User; use Illuminate\Http\Request; class HomeAdminController extends Controller { public function index() { goto bz5ba; KlL9O: $count = Transaction::all()->count(); goto nbkYc; Td3nR: $getPayment = Transaction::where('status', '=', 'paid')->get(); goto VJVgL; Z4mHQ: c0zj2: goto vJINh; vJINh: return view('admin.index', compact('count', 'saldo', 'userCount')); goto l07yL; nbkYc: $saldo = 0; goto Td3nR; VJVgL: foreach ($getPayment as $payment) { $saldo += $payment->total_payment; lZC7j: } goto Z4mHQ; bz5ba: $userCount = User::where('role_id', '=', 2)->count(); goto KlL9O; l07yL: } }
