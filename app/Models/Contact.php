<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','phone','email','address'];
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

// $contact3 = [
//     "first_name"=>"coderajulius",
//     "last_name"=>"code",
//     "phone"=>"07134560983",
//     "email"=>"julius@gmail.com",
//     "address"=>"julius address",
// ];
//     "company_id" => $company -> id
//$contact ='';
