<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{

    public array $searchable = ['name'];
    public array $filterable = ['is_active'];
    public array $allowedFields = ['id', 'name', 'code', 'is_active', 'created_at', 'updated_at'];
}
