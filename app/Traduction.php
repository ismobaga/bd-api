<?php

namespace App;

use App\Http\Resources\TextResource;
use Illuminate\Database\Eloquent\Model;

class Traduction extends Model
{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'lang', 'slug', 'validate_at', 'details'
    ];

    /**
     * Get the text that owns the traduction.
     */
    public function bambara()
    {
        return $this->belongsTo(Text::class, 'text_id');
    }
    public static function slugify(string $text)
    {
        return  hash('sha512', $text);
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
            'lang' => $this->lang,
            'bambara' => $this->bambara->text,
        ];
    }
}
