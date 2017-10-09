<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    use	SoftDeletes;
    protected	$dates	=	['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'author_id', 'title', 'body', 'published_at', 
    						'location', 'type', 'media_url'
    						];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['view_count', 'publication_status'];


    //An article is owned by one user
    public function user(){
        return $this->belongsTo('App\User', 'author_id');
    }


}
