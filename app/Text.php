<?php

namespace App;

use App\Http\Resources\TraductionResource;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'slug', 'validate_at', 'details'
    ];

    public static function slugify(string $text)
    {
        return  hash('sha512', $text);
    }

    /**
     * Get the comments for the blog post.
     */
    public function traductions()
    {
        return $this->hasMany(Traduction::class);
    }

        /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'traductions' =>  TraductionResource::collection($this->traductions),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
