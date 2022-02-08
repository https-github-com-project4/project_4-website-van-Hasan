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
        'status_id',
    ];


    public function pizzas(){
        return $this->belongsToMany(Pizza::class)->withPivot('qty');
    }
    public function status(){
        return $this->belongsTo(States::class);
    }

    public function totalPrice()
    {
        $total = 0;
        foreach($this->pizzas as $pizza)
        {
            $total += $pizza->price * $pizza->pivot->qty;
        }
        return $total;
    }


}
