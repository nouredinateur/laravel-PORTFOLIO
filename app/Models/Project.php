<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    public $table = 'project';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'link',
        'type',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
