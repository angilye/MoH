<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RapportDatabaseMessageContact extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'moh:rapportDatabaseMessage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'affiche le nombre de message enregistrer dans la DB sur les bug de la page contact';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Rapport DB message');
    }
}
