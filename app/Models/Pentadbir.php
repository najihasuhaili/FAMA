<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pentadbir extends Model
{
    use HasFactory;

    protected $table = 'pentadbirs';

    protected $fillable = ['nama_pentadbir', 'email_pentadbir', 'no_sambungan'];
}
