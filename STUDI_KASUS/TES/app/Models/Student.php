<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['name', 'email', 'phone', 'university'];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
