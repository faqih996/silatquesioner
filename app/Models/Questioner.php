<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questioner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'howLong',
        'reasonJoin',
        'objective',
        'goal',
        'confident',
        'material',
        'activity',
        'change',
        'benefit',
        'spirit',
        'notSpirit',
        'impressive',
        'proud',
        'touchingWords',
        'harmingWords',
        'notHappenAgain',
        'obstacle',
        'why',
        'criticism',
        'suggestion',
        'recommendation',
        'messageToPerson1',
        'messageToPerson2',
        'messageToPerson3',
        'messageToPerson4',
    ];
}
