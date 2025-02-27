<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $table = 'journals';
    protected $primaryKey = 'id_journal';

    protected $fillable = [
        'namapenulis', 'file',
    ];
}
