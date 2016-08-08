<?php namespace Astra-Web;

use Illuminate\Database\Eloquent\Model;

class postings extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'postings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'file_id'];

}
