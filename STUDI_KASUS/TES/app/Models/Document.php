<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $fillable = ['Nama Siswa', 'file_name', 'file_path'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
