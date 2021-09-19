<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table        = 'portal_entity__tags';
    protected $fillable     = ['tag_name', 'tag_desc'];
    protected $primaryKey   = 'tag_id';

    public $timestamps      = false;

    public function post()
    {
        return $this->belongsToMany(
            Post::class,
            'portal_entity__posts_tag',
            'tag_id',
            'post_id'
        );
    }

    static function name($id)
    {
        return self::where('tag_id', $id)->value('tag_name');
    }
}
