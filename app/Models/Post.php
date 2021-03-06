<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'posts';
    
    protected $fillable = ['title', 'text', 'category_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['id'];
    
    public function user() {
        
        return $this->belongsTo('App\User');
    }
    
    public function category() {
        
        return $this->belongsTo('App\Models\Category');
    }
}
