<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'address',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function requests()
    {
        return $this->hasMany(ApplyRequest::class);
    }
}
