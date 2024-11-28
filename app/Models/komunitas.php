<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komunitas extends Model
{
    use HasFactory;
    public $primaryKey='komunitas_id';
    protected $table="komunitas";
    protected $fillable = [
        'komunitas_nama','kontak_nama','komunitas_desk'
    ];

    public function packages (){
        return $this->hasMany(packages::class,'komunitas_id','komunitas_id');
    }
}
