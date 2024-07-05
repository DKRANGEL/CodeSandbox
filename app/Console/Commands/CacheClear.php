<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CacheClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alquimia:cache-clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Limpa o cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Limpa o cache de configuração
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        
        // Limpa o cache de view
        Artisan::call('view:clear');
        Artisan::call('view:cache');
        
        // Limpa o cache de configuração de cache
        Artisan::call('cache:clear');
        
        Artisan::call('route:clear');
        Artisan::call('optimize:clear');

        // Limpa o cache de eventos
        Artisan::call('event:clear');
        Artisan::call('event:cache');

        $this->info('Cache limpo com sucesso!'); 
    }
}
