<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //solo permite actualizar esos campos
    //protected $fillable = ['title','url','description'];
    
    //guarded -- vacio queda desprotegido
    //protected $guarded = [] definimos los que no queremos que se puedad asignar masivamente
    
    protected $guarded = [];
    
    public function getRouteKeyName()
    {
        return 'url';
    }

}
