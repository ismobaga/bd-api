<?php

namespace App\Console\Commands;

use App\Traduction;
use Illuminate\Console\Command;

class Dataset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dataset:gen {lang=fr}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $lang = $this->argument('lang');
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
        $delimiter = "\t";
        $traductions = Traduction::where('lang', $lang)->get();
     
        $file = fopen('php://output', 'w');

        foreach($traductions as $trad){
            $t = $trad->text ;
            $b = $trad->bambara->text;
            fputcsv($file, [$t, $b], $delimiter);
        }
        
        fclose($file);
    }
}
