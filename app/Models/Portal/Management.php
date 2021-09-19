<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $table        = 'portal_entity__managements';
    protected $fillable     = ['management_id', 'management_name', 'management_position', 'management_desc', 'management_facebook', 'management_twitter', 'management_instagram', 'management_image', 'management_image_retina'];
    protected $primaryKey   = 'management_id';

    public $timestamps      = false;
}
