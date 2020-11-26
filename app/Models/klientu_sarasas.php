<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klientu_sarasas extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'klientu_sarasas';

    // PrimaryKey
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}
