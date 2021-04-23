<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Training_department extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $table = 'training_departments';

    protected $fillable = [
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function exams() {
        return $this->hasMany(Exam::class, 'training_department_id', 'id');
    }
}
