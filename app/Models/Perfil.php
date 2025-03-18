<?php
 
 namespace App\Models;
  
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 
 class Perfil extends Model
 {
     protected $table = 'Perfil';

       protected $fillable = ['nome', 'id'];
 }


 