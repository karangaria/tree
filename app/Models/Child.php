<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    
       public $table="tree_entry_lang";

    public $fillable = ['entry_id'];
    public function test1()
    {
        return $this->belongsTo(Test::class,'entry_id');
    }
}
