<?php


namespace App\Modules\Medication\Models;


use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
protected $table='medication';

protected $fillable = [

    'name',
    'price' ,
    'num_tablets' ,
];
}
