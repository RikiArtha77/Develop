<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    use HasFactory;
    public $primaryKey='package_id';
    protected $table="package";
    protected $fillable = [
        'package_name','package_priice','package_desk'
    ];
    public function komunitas(){
        return $this->belongsTo(komunitas::class,'komunitas_id','komunitas_id');
    }
}
