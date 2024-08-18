<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
    use HasFactory;

    protected $table = 'jobs';

    protected $guarded = [];



    protected $fillable = [
        'naam',
        'voornaam',
        'username',
        'email',
        'beschrijving',
        'bijlage',
    ];


}
