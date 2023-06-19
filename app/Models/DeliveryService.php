<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryService extends Model
{
    use HasFactory;
    protected $table = 'delivery_services';

    public function fkTransaction(){
        return $this->hasMany(Transaction::class,'delivery_service_id','id');
    }
}
