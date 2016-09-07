<?php

namespace Xvideos\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Storage;


class Chica extends Entity implements AuthenticatableContract, CanResetPasswordContract
{
    //
    use Authenticatable, CanResetPassword;

    protected $guard = "chicas";

    protected $fillable = [
        'name',
        'url',
        'email',
        'password',
        'lastname',
        'nickname',
        'phone',
        'image',
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'photo6',
        'photo7',
        'photo8',
        'photo9',
        'photo10',
        'resumen',
        'medidas',
        'atencion',
        'horario',
        'edad',
        'pais',
        'estado',
        'ciudad'
    ];

    // este mutador modifica los elementos antes de ser enviados
    public function setImageAttribute($image)
    {
        $nombre = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$image->getClientOriginalName();
        $this->attributes['image'] = $nombre;
        $name = $nombre;
        Storage::disk('local')->put($name, \File::get($image));
    }
    public function setPhoto1Attribute($photo1)
    {
        $nombre_photo1 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo1->getClientOriginalName();
        $this->attributes['photo1'] = $nombre_photo1;
        $name_photo1 = $nombre_photo1;
        Storage::disk('local')->put($name_photo1, \File::get($photo1));
    }
    public function setPhoto2Attribute($photo2)
    {
        $nombre_photo2 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo2->getClientOriginalName();
        $this->attributes['photo2'] = $nombre_photo2;
        $name_photo2 = $nombre_photo2;
        Storage::disk('local')->put($name_photo2, \File::get($photo2));
    }
    public function setPhoto3Attribute($photo3)
    {
        $nombre_photo3 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo3->getClientOriginalName();
        $this->attributes['photo3'] = $nombre_photo3;
        $name_photo3 = $nombre_photo3;
        Storage::disk('local')->put($name_photo3, \File::get($photo3));
    }
    public function setPhoto4Attribute($photo4)
    {
        $nombre_photo4 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo4->getClientOriginalName();
        $this->attributes['photo4'] = $nombre_photo4;
        $name_photo4 = $nombre_photo4;
        Storage::disk('local')->put($name_photo4, \File::get($photo4));
    }
    public function setPhoto5Attribute($photo5)
    {
        $nombre_photo5 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo5->getClientOriginalName();
        $this->attributes['photo5'] = $nombre_photo5;
        $name_photo5 = $nombre_photo5;
        Storage::disk('local')->put($name_photo5, \File::get($photo5));
    }
    public function setPhoto6Attribute($photo6)
    {
        $nombre_photo6 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo6->getClientOriginalName();
        $this->attributes['photo6'] = $nombre_photo6;
        $name_photo6 = $nombre_photo6;
        Storage::disk('local')->put($name_photo6, \File::get($photo6));
    }
    public function setPhoto7Attribute($photo7)
    {
        $nombre_photo7 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo7->getClientOriginalName();
        $this->attributes['photo7'] = $nombre_photo7;
        $name_photo7 = $nombre_photo7;
        Storage::disk('local')->put($name_photo7, \File::get($photo7));
    }
    public function setPhoto8Attribute($photo8)
    {
        $nombre_photo8 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo8->getClientOriginalName();
        $this->attributes['photo8'] = $nombre_photo8;
        $name_photo8 = $nombre_photo8;
        Storage::disk('local')->put($name_photo8, \File::get($photo8));
    }
    public function setPhoto9Attribute($photo9)
    {
        $nombre_photo9 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo9->getClientOriginalName();
        $this->attributes['photo9'] = $nombre_photo9;
        $name_photo9 = $nombre_photo9;
        Storage::disk('local')->put($name_photo9, \File::get($photo9));
    }
    public function setPhoto10Attribute($photo10)
    {
        $nombre_photo10 = Carbon::now()->second.'-'.rand(10000, 99999).'-'.$photo10->getClientOriginalName();
        $this->attributes['photo10'] = $nombre_photo10;
        $name_photo10 = $nombre_photo10;
        Storage::disk('local')->put($name_photo10, \File::get($photo10));
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function scopeNickname($query, $nickname)
    {

        if (trim($nickname) != "")
        {
            $query->where('nickname', "LIKE",  "%$nickname%");
        }
    }

    public function scopePais($query, $pais)
    {
        $paises = config('options.paises');

        if ($pais != "" && isset($paises[$pais]))
        {
            //$query->where('nickname', "LIKE",  "%$nickname%");
            $query->where("PAIS","LIKE",  "%$pais%");

            /*
             * para hacer otras consultas del tipo "esdiferente", "mayor que", "menor que" usamos este query por ejemplo
             * $query->where('pais','>=',  $pais);
             */
        }
    }
    public function scopeCiudad($query, $ciudad){
        if (trim($ciudad) != "")
        {
            $query->where('ciudad', "LIKE",  "%$ciudad%");
        }
    }



}
