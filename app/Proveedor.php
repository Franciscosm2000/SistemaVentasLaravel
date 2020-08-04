<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = [
        'id', 'contacto','telefono_contacto'
    ];

    /*porque en la tabla de la base de datos no se dio ese campo*/
    public  $timestamps = false;
    
    //relacion con la tabla persona
    public function persona(){
        return $this->belongsTo('App\persona');
    }
}
