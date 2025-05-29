<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $table = 'scholarships';
    protected $fillable = ['name', 'description', 'deadline'];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
