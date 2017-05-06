<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed time
 * @property mixed age
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/5/6 0006 14:51
 */
class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'name',
        'age',
        'time'
    ];
    public $timestamps = false;
}