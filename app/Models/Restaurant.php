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
        'price_id',
        'img'
    ];
    public function establishments()
    {
        return $this->belongsTo(Establishment::class, 'establishment_id');
    }
    public function environments()
    {
        return $this->belongsTo(Environment::class,'environment_id');
    }
    public function cities()
    {
        return $this->belongsTo(City::class,'city_id');
    }
    public function foods()
    {
        return $this->belongsTo(Foods::class,'food_id');
    }
    public function prices()
    {
        return $this->belongsTo(Price::class, 'price_id');
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
    
}
