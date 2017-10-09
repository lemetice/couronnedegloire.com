<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name'];


    //Article is of one and only one type
    public  function article(){
        return $this->hasOne('App\Article', 'type');
    }


}
