<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Companies extends Model
{
    use HasFactory;
    protected $fillable = ['name','address','website','email'];

    public function contacts(): HasMany
    {
//        relationship of one companies has many contacts and each contact belongs to companies
        return $this->hasMany(Contact::class);
    }
}

/**
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 * 4: Companies::all()
15: use App\Models\Companies
16: Companies::all()
17: Companies::take(3)
18: Companies::take(3)->get()
19: Companies::take(2)->get()
20: Companies::first()
21: Companies::find(1)
22: Companies::find(1,2,3)
23: Companies::find([1,2,3])
25: Companies::find([1,2,3])
26: Companies::where(website: "john.com",)->first()
27: Companies::where("website","john.com")->first()
28: $company = new Companies()
29: $company -> name = "My company"
30: $company -> address = "My address"
 *
 *
**/
