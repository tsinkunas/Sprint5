<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $fillable = ['name', 'surname', 'email', 'phone', 'project_id'];

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

}
