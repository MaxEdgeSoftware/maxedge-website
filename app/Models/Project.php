<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Client()
    {
        return $this->belongsTo(User::class, "client_id", 'email');
    }

    public function Staff()
    {
        return $this->belongsTo(User::class, "added_by", 'email');
    }

    public function Pictures()
    {
        return $this->hasMany(ProjectImages::class, "project_id", 'id');
    }
}
