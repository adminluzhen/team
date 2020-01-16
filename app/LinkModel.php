<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkModel extends Model
{
    protected $table = 'link';
    protected $primaryKey = 'l_id';
    public $timestamps = false;
    protected $guarded = [];
}
