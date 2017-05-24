<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class m_actor extends Model
{
    protected $connection = 'read';

    protected $table='actor';
    protected $primaryKey='actor_id';
    protected $fillable=["first_name","last_name"];

    public $timestamps=false;
}
