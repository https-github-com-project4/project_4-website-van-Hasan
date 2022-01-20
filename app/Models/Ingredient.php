<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['name' ];
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ingredients';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function pizzas(){
        return $this->belongsToMany(Pizza::class);
    }
}
