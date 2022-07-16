<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personagens extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'anime', 'description', 'raca', 'Heroi_ou_vilao', 'Fraqueza', 'nota_particular'];
    

}
