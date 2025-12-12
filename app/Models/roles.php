<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';          // your table
    protected $primaryKey = 'role_id';   // FIXED primary key
    public $incrementing = true;         // auto increment
    protected $keyType = 'int';          // integer PK

    protected $fillable = [
        'role_name',
        'role_desc',
        'is_active',
        'created_by',
    ];
	
	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
		'valid_from' => 'date',
		'valid_to' => 'date',
	];

    public $timestamps = false; // add this if your table has no created_at/updated_at
}
