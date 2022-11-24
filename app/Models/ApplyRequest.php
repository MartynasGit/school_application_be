<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'school_id',
        'confirmation',
        'full_name',
        'id_code',
        'grade'

    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
