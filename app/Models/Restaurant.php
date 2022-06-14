<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'web',
        'description',
        'phone_number',
        'menu',
        'city_id',
        'establishment_id',
        'food_id',
        'environment_id',
        'price_id'
    ];
    public function establishments()
    {
        return $this->belongsTo(Establishment::class);
    }
    public function environments()
    {
        return $this->belongsTo(Environment::class);
    }
    public function cities()
    {
        return $this->belongsTo(City::class);
    }
    public function foods()
    {
        return $this->belongsTo(Food::class);
    }
    public function prices()
    {
        return $this->belongsTo(Price::class);
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
