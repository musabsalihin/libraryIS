<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'ic',
        'address',
        'contact'
    ];

    public function records():HasMany{
        return $this->hasMany(Record::class);
    }
}
