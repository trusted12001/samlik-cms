<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $table = 'contact_information';

    protected $fillable = ['address', 'website', 'phone', 'email', 'map'];
}
