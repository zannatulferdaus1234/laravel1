<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerInfo extends Model
{
    use HasFactory;
    protected $fillable=['name','position','details'];

    public function article()
    {
        return $this->hasMany(Article::class); //select *from article where owner_id=1)
    }

}

// $owner = Owner::find($id); // select *from owner where id=1;
// $user->project; //select * from articles where owner_id=$owner_id;
// $owner->articles->first()/last()/find()/groupBy/split(3)

//hasOne ->profile,hasMany->post
//belongsTo,belongsToMany
//morphMany,morphTOMAny(polymorphic)