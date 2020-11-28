<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description'];//tutaj sa pola tablicy ktore maja być uzupelnione/1 metoda przesylu danych z formularza do bazy
}
