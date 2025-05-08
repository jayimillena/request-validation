<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $table = 'repositories';

    protected $fillable = ['title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
