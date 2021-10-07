<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customerCode',
        'cell_code',
        'name_customer',
        'address_customer',
        'district_customer',
        'zip_code_customer',
        'top_rate',
        'name_invoke',
        'address_invoke',
        'district_invoke',
        'zip_code_invoke',
        'receipt_invoke',
        'email',
        'ref_user',
        'password_user',
        'rate_rate',
        'district_rate',
        'province_rate',
        'phone_number',
        'canton_rate',
        'province',
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
