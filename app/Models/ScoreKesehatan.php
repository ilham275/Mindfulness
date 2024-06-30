<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScoreKesehatan extends Model
{
    use HasFactory;
    protected $table = "scorekesehatan";
    protected $fillable = [
        'user_id',
        'total_score',
        'category',
        'recommendation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
