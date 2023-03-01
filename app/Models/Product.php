<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'idProduct',
        'NameProduct',
        'PriceProduct',
        'ImageProduct',
        'DescribeProduct',
        'StatusProduct',
        'idProductType',
        'CreateDate',
        'UpdateDate',
    ];
}
