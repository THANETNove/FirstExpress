<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceAdjustment extends Model
{
    use HasFactory;


    protected $fillable = [
        'rebate',
        'weightMin1',
        'weightMax1',
        'cost1',
        'sellingPriceBangkok1',
        'sellingPriceUpcountry1',
        'weightMin2',
        'weightMax2',
        'cost2',
        'sellingPriceBangkok2',
        'sellingPriceUpcountry2',
        'weightMin3',
        'weightMax3',
        'cost3',
        'sellingPriceBangkok3',
        'sellingPriceUpcountry3',
        'weightMin4',
        'weightMax4',
        'cost4',
        'sellingPriceBangkok4',
        'sellingPriceUpcountry4',
        'weightMin5',
        'weightMax5',
        'cost5',
        'sellingPriceBangkok5',
        'sellingPriceUpcountry5',
        'weightMin6',
        'weightMax6',
        'cost6',
        'sellingPriceBangkok6',
        'sellingPriceUpcountry6',
        'weightMin7',
        'weightMax7',
        'cost7',
        'sellingPriceBangkok7',
        'sellingPriceUpcountry7',
        'weightMin8',
        'weightMax8',
        'cost8',
        'sellingPriceBangkok8',
        'sellingPriceUpcountry8',
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

    
    
}
