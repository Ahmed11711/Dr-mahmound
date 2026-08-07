<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDeposite extends Model
{

    public array $searchable = ['note'];
    public array $filterable = ['user_id', 'status', 'type'];
    public array $allowedFields = ['id', 'user_id', 'amount', 'user_phone', 'company_phone', 'image', 'status', 'type', 'note', 'created_at', 'updated_at'];

    protected $table = 'user_deposits';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}