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

class DeleteSyncTenant implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $id, protected $modelName, protected $lojaId, protected $quantityLojas)
    {
        $this->id               = $id;
        $this->modelName        = $modelName;
        $this->lojaId           = $lojaId;
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
            $existingRecord = $modelInstance->find($this->id);

            if ($existingRecord) {

                if ($this->quantityLojas == 1) {
                    $existingRecord->delete();
                }

                if (tenant()->integrada && $this->quantityLojas > 1) {
                    $existingRecord->delete();
                }
            }

            tenancy()->end();

        } catch (Exception $e) {
            Log::error('Erro no job DeleteSyncTenant: '.$e->getMessage());
        }
    }
}
