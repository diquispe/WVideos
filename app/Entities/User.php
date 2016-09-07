<?php

namespace Xvideos\Entities;

//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;



//class User extends Entity
class User extends Entity implements AuthenticatableContract, CanResetPasswordContract
//para version de laravel 5.1
{
    use Authenticatable, CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //rela}ciones con otras tablas
    public function videos()
    {
        // este metodo esta enlazado en el metodo store en la linea
        // $video = $auth->user()->videos()->create([
        //                          ESTO
        // un usuario tiene muchos videos y le ponemos el metodo videoss
        return $this->hasMany(Video::getClass());
        //hasMany tiene el metodo create
    }
    public function votaron()
    {
        // un usuario ha votado por muchos videos y pasar de parametro la tabla pivote o intermedia
        return $this->belongsToMany(Video::getClass(), 'video_votes')->withTimestamps();
        /*
         * withTimestamps() agrega las fechas de creacion en la tabla video_votes
         */
    }
    public function hasVoted(Video $video)
    {
        /* en la vista del video hay dos botones de voto,
        * el boton me gusta aparece solo si no se ha votado
         * y el voton no me gusta aparece cuando ya se ha votado
         * este metodo define la condicion
         * si el usuario visitante es igual al que voto por e video
         * si la cantidad de votos es igual o mayor a 1, la condicion es verdadera
         * esos dos return hacen la misma comprobacion para dar verdadero en la condicion, caso contrario es falso
         */
        return $this->votaron()->where('video_id', $video->id)->count();
        //return VideoVote::where(['user_id' => $this->id, 'video_id' => $video->id])->count()>=1;
    }

    public function vote(Video $video)
    {
        /*
         * Este metodo se esta solicitando en el metodo submit del  controlador de votos
         */
        if($this->hasVoted($video)) return false;

        $this->votaron()->attach($video);

        return true;
        /*
         * se devuelve true si el voto fue efectivo
         */
    }
    public function unvote(Video $video)
    {
        $this->votaron()->detach($video);


    }
    
}
