<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Exception;

class CreateSyncTenants implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $id ,protected $modelName, protected array $data)
    {   
        $this->id        = $id;
        $this->modelName = $modelName;
        $this->data      = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            tenancy()->initialize($this->id);
            
            // Instância a model dinamicamente com base no nome fornecido
            $modelInstance = App::make($this->modelName);
            
            // Uso do firstOrCreate para garantir que um novo registro seja criado somente se não existir
            $modelInstance->firstOrCreate($this->data);
            
            tenancy()->end();

        } catch (Exception $e) {
            Log::error('Erro no job CreateSyncTenants: '.$e->getMessage());
        }
    }
}