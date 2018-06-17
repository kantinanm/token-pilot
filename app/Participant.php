<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DirapeToken;

class Participant extends Model
{
    //

    protected $table = 'participant';

    protected $DT_Column='unique_id'; //['type' => DT_Unique, 'size' => 40, 'special_chr' => false]
    Const DT_UniqueStr = 'UniqueString';

    protected $fillable = [
        'fullname', 'email', 'garena_id', 'gender', 'age','unique_id'
    ];

    protected $primaryKey = 'p_id';
}
