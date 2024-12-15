<?php
 /*il commando per creare i models come questo è
    "php artisan make:model NomeModel" nel nostro 
    caso specifico è "php artisan make:model Movie"
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
}
