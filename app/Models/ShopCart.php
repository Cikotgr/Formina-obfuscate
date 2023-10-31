<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Models; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; class ShopCart extends Model { use HasFactory; protected $table = 'shoping_carts'; protected $fillable = array('quantity', 'user_id', 'product_id'); public function fkProduct() { return $this->belongsTo(Product::class, 'product_id', 'id'); } }
