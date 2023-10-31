<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Models; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; class Product extends Model { use HasFactory; protected $table = "products"; protected $fillable = array('user_id', 'product_name', 'stock', 'price', 'photo', 'description'); public function fkShopcart() { return $this->hasMany(ShopCart::class); } public function fkDetailTransaction() { return $this->hasMany(DetailTransaction::class, 'product_id', 'id'); } }
