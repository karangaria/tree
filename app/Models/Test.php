<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Child;

class Test extends Model
{
    use HasFactory;
       public $table="tree_entry";
    protected $primarykey="entry_id ";
     public function childs() {
        return $this->hasMany('App\Models\Test','parent_entry_id','entry_id') ;
    }
       public function test()
    {
        return $this->hasOne(Child::class,'entry_id','entry_id');
    }
}

