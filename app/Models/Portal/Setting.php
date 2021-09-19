<?php

namespace App\Models\Portal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table        = 'portal_entity__settings';
    protected $fillable     = ['setting_name', 'setting_value'];
    protected $primaryKey   = 'setting_id';

    public $timestamps      = false;

    public function value($setting)
    {
        return $this->where('setting_name', $setting)->value('setting_value');
    }
}
