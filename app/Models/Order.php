<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order';

    protected $fillable = [
        'name',
        'emailadres',
        'phone',
        'address',
        'zipcode',
    ];


    public function pizzas(){
        return $this->belongsToMany(Pizza::class)->withPivot('qty');
    }

}
