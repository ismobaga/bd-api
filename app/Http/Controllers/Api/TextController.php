<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TextCollection;
use App\Http\Resources\TextResource;
use App\Text;
use App\Traduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TextController extends Controller
{
    /**
     * Create a new RefreshController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new TextCollection(Text::with('traductions')->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'text' => 'required',
            'details' => 'nullable|string',
            'valid' => 'nullable|boolean',
            'traductions' => 'nullable|array',
            'traductions.*.text' => 'required_with:traductions.*.lang',
            'traductions.*.details' => 'nullable',
            'traductions.*.valid' => 'nullable|bool',
        ]);
        $valid = $data['valid'] ?? now();
        $valid = $valid == false ? NULL : $valid;
        $text = Text::firstOrCreate([
            'slug' =>  Text::slugify($data['text'])
        ],  [
            'text' =>  $data['text'],
            'details' =>  $data['details']  ?? "",
            'validate_at' => $valid

        ]);
        $traductions = [];
        if (isset($data['traductions'])) {
            foreach ($data['traductions'] as $key => $value) {
                $valid = $value['valid'] ?? now();
                $valid = $valid == false ? NULL : $valid;
                $traductions[] = [
                    'text_id' => $text->id,
                    'text' => $value['text'],
                    'details' => $value['details'] ?? "",
                    'validate_at' => $valid,
                    'lang' => $value['lang'],
                    'slug' => Text::slugify(strval($text->id) . $value['text'] . $value['lang'])
                ];
            }

            DB::table('traductions')->insertOrIgnore($traductions);
        }
        return true; //$text->fresh('traductions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Text $text)
    {
        $text->load('traductions');
        

        return new TextResource($text);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
        $data = $request->validate([
            'text' => 'required',
            'details' => 'nullable|string',
            'valid' => 'nullable|boolean',
            // 'traductions' => 'nullable|array',
            // 'traductions.*.text' => 'required_with:traductions.*.lang',
        ]);
        $valid = $data['valid'] ?? now();
        $valid = $valid == false ? NULL : $valid;
        $text->text = $data['text'];
        $text->details = $data['details'] ?? "";
        $text->slug = Text::slugify($data['text']);
        $text->validate_at = $valid==NULL? NULL : $text->validate_at ;

        $text->save();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        return $text->delete();
    }
}
