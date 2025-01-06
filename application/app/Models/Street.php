<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $table = 'streets';
    protected $fillable = ['zip_code_id','street_name'];

    public function zipCode()
    {
        return $this->belongsTo(ZipCode::class, 'zip_code_id');
    }
}
