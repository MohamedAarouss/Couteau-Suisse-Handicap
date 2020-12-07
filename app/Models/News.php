<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'department',
        'informations',
        'img',
        'url',
        'user'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
