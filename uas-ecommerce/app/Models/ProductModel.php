<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'product';

    protected $primaryKey = 'product_id';

    protected $returnType = 'array';

    protected $allowedFields = [
        'product_id',
        'product_name',
        'product_category',
        'product_origin',
        'product_description',
        'quantity',
        'price',
        'status',
    ];
}
