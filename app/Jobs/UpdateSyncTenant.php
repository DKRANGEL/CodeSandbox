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

class UpdateSyncTenant implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $lojaId, protected $modelName, protected array $data, protected $quantityLojas)
    {
        $this->lojaId           = $lojaId;
        $this->modelName        = $modelName;
        $this->data             = $data;
        $this->quantityLojas    = $quantityLojas;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {

            tenancy()->initialize($this->lojaId);
        
            // Instância a model dinamicamente com base no nome fornecido
            $modelInstance = App::make($this->modelName);
            $existingRecord = $modelInstance->find($this->data['id']);

            if ($existingRecord) {

                if ($this->quantityLojas == 1) {
                    $existingRecord->update($this->data);
                }

                if (tenant()->integrada && $this->quantityLojas > 1) {
                    $existingRecord->update($this->data);
                }
            }

            tenancy()->end();

        } catch (Exception $e) {
            Log::error('Erro no job UpdateSyncTenant: '.$e->getMessage());
        }
    }
}
