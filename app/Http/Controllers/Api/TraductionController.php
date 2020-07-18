<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TraductionCollection;
use App\Http\Resources\TraductionResource;
use App\Traduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;

class TraductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new TraductionCollection(Traduction::paginate());
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
            'text_id' => 'required',
            'traduction' => [Rule::requiredIf(function () use ($request) {
                return count($request->get('traductions', [])) == 0;
            }) ,'nullable'],
            // 'traduction.text' => 'required',
            'traductions' => 'nullable|array',
            'traductions.*.text' => 'required_with:traductions.*.lang',
            'traductions.*.details' => 'nullable',
        ]);

        if($data['traduction']) $data['traductions']  = [$data['traduction'] ];
        
        $traductions = [];
        foreach ($data['traductions'] as $key => $value) {
            $traductions[] = [
                'text_id' => $data['text_id'],
                'text' => $value['text'],
                'lang' => $value['lang'],
                'details' => $value['lang'] ?? null,
                'validate_at' => now(),
                'slug' => Traduction::slugify(strval($data['text_id']).$value['text'].$value['lang'])
            ];
        }

        DB::table('traductions')->insertOrIgnore($traductions);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Traduction  $traduction
     * @return \Illuminate\Http\Response
     */
    public function show(Traduction $traduction)
    {
        $traduction->load('bambara');
        return  TraductionResource::make( $traduction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Traduction  $traduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traduction $traduction)
    {
        $data = $request->validate([
            'traduction.lang' => 'required',
            'text_id' => 'required',
            'traduction.text' => 'required',
            'traduction.details' => 'nullable',
            // 'traductions.*.text' => 'required_with:traductions.*.lang',
        ]);
        $traduction->slug = Traduction::slugify(strval($data['text_id']).$data['traduction']['text'].$data['traduction']['lang']);
        $traduction->text = $data['traduction']['text'];
        $traduction->lang = $data['traduction']['lang'];
        $traduction->details = $data['traduction']['details'] ?? $traduction->details;

        $traduction->save();
    }

    public function download(Request $request)
    {
        $lang = $request->input('lang', 'french');
        switch ($lang) {
            case 'fr':
            case 'french':
                $lang = 'french';
                break;
            case 'en':
            case 'english':
                $lang = 'english';
                break;
        }
        $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
        ,   'Content-type'        => 'text/plain'
        ,   'Content-Disposition' => 'attachment; filename='.$lang.'-bambara.txt'
        ,   'Expires'             => '0'
        ,   'Pragma'              => 'public'
    ];
    $traductions = Traduction::where('lang', $lang)->get();
    $callback = function() use ($traductions) 
    {
        $delimiter = "\t";
        $file = fopen('php://output', 'w');

        foreach($traductions as $trad){
            $t = $trad->text ;
            $b = $trad->bambara->text;
            fputs($file, $t.$delimiter.$b.PHP_EOL);
        }
        
        fclose($file);
    };
        return Response::stream($callback, 200, $headers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traduction  $traduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traduction $traduction)
    {
        return $traduction->delete();
    }
}
