<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';
     protected $fillable = ['student_id', 'scholarship_id', 'status_id', 'notes', ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
