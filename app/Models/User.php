<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-10-31 03:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Models; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Foundation\Auth\User as Authenticatable; use Illuminate\Notifications\Notifiable; use Laravel\Sanctum\HasApiTokens; class User extends Authenticatable { use HasApiTokens, HasFactory, Notifiable; protected $fillable = array('name', 'email', 'password', 'role_id'); protected $hidden = array('password', 'remember_token'); protected $casts = array('email_verified_at' => 'datetime', 'password' => 'hashed'); public function fkRoles() { return $this->belongsTo(Role::class, 'role_id', 'id'); } public function fkTransactions() { return $this->hasMany(Transaction::class, 'user_id', 'id'); } public function fkProfiles() { return $this->hasOne(Profile::class, 'user_id', 'id'); } }
