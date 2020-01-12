<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table = 'audit';

    protected $fillable = [
        'subject_id',
        'subject_type',
        'name',
        'message'
    ];
}
