<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'option_propertie', 'propertie_id', 'option_id');
    }
    public function HasOptions($option)
    {
        return $this->options->contains($option);
    }
}
