<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table        = 'portal_entity__categories';
    protected $fillable     = ['category_name', 'category_desc'];
    protected $primaryKey   = 'category_id';

    public $timestamps      = false;
}
