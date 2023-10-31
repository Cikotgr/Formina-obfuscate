<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Models; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; class DeliveryService extends Model { use HasFactory; protected $table = 'delivery_services'; public function fkTransaction() { return $this->hasMany(Transaction::class, 'delivery_service_id', 'id'); } }
