<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeSales',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function scopeSearch($query, $search)
    {
        if (empty($query)) {
            return $query;
        }
        return $query->where([
            ['name', 'LIKE', "%$search%", 'OR'],
            ['email', 'LIKE', "%$search%", 'OR'],
        ]);
    }
}
