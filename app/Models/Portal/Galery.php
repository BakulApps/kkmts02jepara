<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table        = 'portal_entity__galeries';
    protected $fillable     = ['galery_id', 'galery_image', 'galery_name'];
    protected $primaryKey   = 'galery_id';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function images()
    {
        return json_decode($this->galery_image);
    }
}
