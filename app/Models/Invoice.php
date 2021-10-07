<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'issuedDateIssue',
        'dateDue',
        'documentThat',
        'refer',
        'tag',
        'datajson',
        'name',
        'address',
        'totalItems',
        'priceGoods',
        'vat',
        'netTotal',
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
            ['id', 'LIKE', "%$search%", 'OR'],
        ]);
    }

    protected $table = 'invoices';
    protected $primaryKey = 'id';
}
