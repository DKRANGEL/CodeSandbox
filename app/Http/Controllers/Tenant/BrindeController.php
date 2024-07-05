<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Requests\BrindeFormRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use App\Jobs\CreateSyncTenants;
use App\Jobs\DeleteSyncTenant;
use App\Jobs\UpdateSyncTenant;
use App\Models\Tenants\Brinde;
use Illuminate\Http\Request;
use Exception;

class BrindeController extends Controller
{
    public function __construct(protected Brinde $model)
    {
        $this->model = $model;
    }
    
    public function listar(Request $request, $tenantId = null)
    {
        if ($request->ajax()) {
            if (request()->getHost() == getCentralDomain()) {
                tenancy()->initialize($tenantId ?? "09027622000188");
            }
            
            $brindes = $this->model->query();
            return DataTables::eloquent($brindes)->make(true);
        }

        return view('tenant.brinde.index');
    }

    public function cadastrar(BrindeFormRequest $request)
    {
        try {
            $data = $this->getRequestData($request);

            if (request()->getHost() == getCentralDomain()) {

                foreach ($request->lojaSelectMultiple as $id) {
                    CreateSyncTenants::dispatch($id, Brinde::class, $data);
                }

                $messages = ['syncTenants' => "As ações estão sendo processadas e podem ser instantâneas ou não. Você pode atualizar a página a qualquer momento para conferir as atualizações."];

            } else {

                $this->model->create($data);

                $messages = ['success' => "Brinde cadastrado com sucesso!"];
            }
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao cadastrar o Brinde!"];
        }
        
        return redirect()->route(request()->getHost().'.brindes.listar')->with('messages', $messages)->with('timestamp', time())->with('lojaSelect', $request->idTenant);
    }

    public function atualizar(BrindeFormRequest $request, $id, $tenantId = null)
    {
        try {

            $data = $this->getRequestData($request, $id);

            $lojaSelectMultiple = $request->lojaSelectMultiple ?? array($tenantId);

            if (request()->getHost() == getCentralDomain()) {

                foreach ($lojaSelectMultiple as $id) {
                    UpdateSyncTenant::dispatch($id, Brinde::class, $data, count($lojaSelectMultiple));
                }
                
                $messages = ['syncTenants' => "As ações estão sendo processadas e podem ser instantâneas ou não. Você pode atualizar a página a qualquer momento para conferir as atualizações."];

            } else {

                $brinde = $this->model->find($id);
                $brinde->update($data);

                $messages = ['success' => "Brinde atualizado com sucesso!"];
            }
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao atualizar o Brinde!"];
        }

        return redirect()->route(request()->getHost().'.brindes.listar')->with('messages', $messages)->with('timestamp', time())->with('lojaSelect', $tenantId);
    }

    public function deletar($id, $tenantId = null)
    {
        try {

            $lojaSelectMultiple = request()->lojaSelectMultipleDelete ?? array($tenantId);
            
            if (request()->getHost() == getCentralDomain()) {

                foreach ($lojaSelectMultiple as $lojaId) {
                    DeleteSyncTenant::dispatch($id, Brinde::class, $lojaId, count($lojaSelectMultiple));
                }

                $messages = ['syncTenants' => "As ações estão sendo processadas e podem ser instantâneas ou não. Você pode atualizar a página a qualquer momento para conferir as atualizações."];
                
            } else {
                
                $brinde = $this->model->find($id);
                $brinde->delete();
                
                $messages = ['success' => "Brinde excluído com sucesso!"];
            }
        } catch (Exception $e) {
            $messages = ['error' => "Ocorreu um erro ao excluir o Brinde!"];
        }

        return redirect()->route(request()->getHost().'.brindes.listar')->with('messages', $messages)->with('timestamp', time())->with('lojaSelect', $tenantId);
    }

    private function getRequestData($request, $id = null)
    {
        return [
            'id'        => $id,
            'descricao' => $request->descricaoBrindeInput,
            'pontos'    => $request->pontosBrindeInput,
            'estoque'   => $request->estoqueBrindeInput,
            'status'    => $request->statusBrindeInput === 'on' ? true : false,
            'obs'       => $request->obsBrindeInput ?? null,
        ];
    }
}
