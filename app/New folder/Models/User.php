<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use \App\Models\Category;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;


#[Fillable(['id', 'name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements JWTSubject
{

    public array $searchable = ['remember_token'];
    public array $filterable = ['is_active', 'role', 'social_type', 'social_id', 'parent_id'];
    public array $allowedFields = ['id', 'name', 'email', 'phone', 'image', 'whtsapp', 'is_active', 'email_verified_at', 'role', 'social_type', 'social_id', 'parent_id', 'last_login_at', 'created_at', 'updated_at'];



    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'user_id' => $this->id,
            'email'   => $this->email ?? null,
            'role'    => $this->role ?? null,
        ];
    }
    public function subscriptions()
    {
        return $this->hasMany(\App\Models\UserSubscribe::class);
    }

    public function getProfileCompletion(): array
    {
        $fields = [
            'name'         => $this->name,
            'email'        => $this->email,
            'phone'        => $this->phone,
            'user_name'    => $this->user_name,
            'whtsapp'      => $this->whtsapp,
            'country_code' => $this->country_code,
            'is_verified'  => $this->is_verified,
        ];

        $completed = array_filter($fields, fn($val) => !is_null($val) && $val !== '' && $val !== false);
        $percentage = (int) round((count($completed) / count($fields)) * 100);

        return [
            'percentage'       => $percentage,
            'completed_fields' => array_keys($completed),
            'missing_fields'   => array_keys(array_diff_key($fields, $completed)),
        ];
    }

    public function balance()
    {
        return $this->hasOne(UserBalance::class);
    }


    public function parent()
    {
        return $this->belongsTo(Parent::class, 'parent_id');
    }
}
