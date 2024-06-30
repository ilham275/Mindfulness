<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongModel extends Model
{
    use HasFactory;

    protected $table = 'song';

    protected $primaryKey = 'id_song';

    protected $fillable = [
        'title', 'artist', 'audio_file',
    ];
}
