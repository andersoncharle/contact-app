<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $fillable = ['name','address','website','email'];

    public function contacts(): HasMany
    {
//        relationship of one companies has many contacts and each contact belongs to companies
        return $this->hasMany(Contact::class);
    }
}
