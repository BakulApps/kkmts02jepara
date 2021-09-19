<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table        = 'portal_entity__testimonials';
    protected $fillable     = ['testimonial_id', 'testimonial_star', 'testimonial_content', 'testimonial_name', 'testimonial_position', 'testimonial_image'];
    protected $primaryKey   = 'testimonial_id';
}
