@extends('layouts.base')

@section('css')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        .swal2-popup.swal2-toast .swal2-actions {
            justify-content: center;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Edição de Motoqueiro"])
        @endcomponent

        @if ($errors->any())
            <div id="alert-global" class="flex flex-col gap-3">
                <div class="relative p-3 pr-12 text-sm text-yellow-500 border border-t-2 border-transparent rounded-md bg-yellow-50 border-t-yellow-300 dark:bg-yellow-400/20 dark:border-t-yellow-500/50">
                    <button data-drawer-close="alert-global" aria-label="Close" class="absolute top-0 bottom-5 right-0 p-3 text-yellow-500 transition hover:text-yellow-500 dark:text-yellow-400/50 dark:hover:text-yellow-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x h-5"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                    <h6 class="mb-1"><i class="ri-error-warning-line ri-lg"></i> Ops! Parece que há alguns problemas. Por favor, verifique os seguintes campos.</h6>
                    <ul class="ml-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        
        <div class="card mt-5">
            <div class="card-body">
                <form action="{{ route(request()->getHost().'.motoqueiros.atualizar', ['id' => $motoqueiro->id]) }}" method="POST">
                    @csrf
                    <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                        <div class="mb-4">
                            <label for="nomeMotoInput" class="inline-block mb-2 text-base font-medium">Nome <span class="text-red-500">*</span></label>
                            <input type="text" id="nomeMotoInput" name="nomeMotoInput" value="{{ $motoqueiro->nome }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                            @error('nomeMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="empresaMotoInput" class="inline-block mb-2 text-base font-medium">Empresa <span class="text-red-500">*</span></label>
                            <input type="text" id="empresaMotoInput" name="empresaMotoInput" value="{{ $motoqueiro->empresa }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                            @error('empresaMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="cpfMotoInput" class="inline-block mb-2 text-base font-medium">CPF <span class="text-red-500">*</span></label>
                            <input type="text" id="cpfMotoInput" name="cpfMotoInput" value="{{ $motoqueiro->cpf }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                            @error('cpfMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="rgMotoInput" class="inline-block mb-2 text-base font-medium">RG <span class="text-red-500">*</span></label>
                            <input type="text" id="rgMotoInput" name="rgMotoInput" value="{{ $motoqueiro->rg }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                            @error('rgMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    {{-- Componente de Endereço --}}
                    @component('components.endereco', [
                            'cep' => $motoqueiro->endereco->cep ?? null,
                            'endereco' => $motoqueiro->endereco->logradouro ?? null,
                            'bairro' => $motoqueiro->endereco->bairro ?? null,
                            'cidade' => $motoqueiro->endereco->cidade->nome ?? null,
                            'numero' => $motoqueiro->end_num ?? null,
                            'complemento' => $motoqueiro->complemento ?? null,
                            'sigla_estado' => $motoqueiro->endereco->cidade->estado->sigla ?? null,
                            'prefix' => null
                        ])
                    @endcomponent

                    <div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-4">
                        <div class="mb-4">
                            <label for="emailMotoInput" class="inline-block mb-2 text-base font-medium">Email</label>
                            <input type="email" id="emailMotoInput" name="emailMotoInput" value="{{ $motoqueiro->email }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('emailMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="telefoneMotoInput" class="inline-block mb-2 text-base font-medium">Telefone</label>
                            <input type="text" id="telefoneMotoInput" name="telefoneMotoInput" value="{{ $motoqueiro->telefone }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('telefoneMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="celularMotoInput" class="inline-block mb-2 text-base font-medium">Celular <span class="text-red-500">*</span></label>
                            <input type="text" id="celularMotoInput" name="celularMotoInput" value="{{ $motoqueiro->celular }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('celularMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="dataNascMotoInput" class="inline-block mb-2 text-base font-medium">Data de Nascimento</label>
                            <input type="date" id="dataNascMotoInput" name="dataNascMotoInput" value="{{ $motoqueiro->data_nasc }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('dataNascMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-4">
                        <div class="mb-4">
                            <label for="placaMotoInput" class="inline-block mb-2 text-base font-medium">Placa <span class="text-red-500">*</span></label>
                            <input type="text" id="placaMotoInput" name="placaMotoInput" value="{{ $motoqueiro->placa }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('placaMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="comissaoMotoInput" class="inline-block mb-2 text-base font-medium">Comissão (%) <span class="text-red-500">*</span></label>
                            <div class="flex flex-wrap">
                                <div class="inline-flex text-center input-step w-full">
                                    <button type="button" class="border w-20 size-10 leading-[15px] minusBtn bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus" class="lucide lucide-minus inline-block size-4"><path d="M5 12h14"></path></svg></button>
                                    <input type="number" name="comissaoMotoInput" id="comissaoMotoInput" value="{{ $motoqueiro->comissao }}"class="w-full text-center ltr:pl-2 rtl:pr-2 h-10 border-y border-x product-quantity border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" step="0.1">
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-20 size-10 border-slate-200 plusBtn text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
                                </div>
                            </div>
                            @error('comissaoMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="taxaEntregaMotoInput" class="inline-block mb-2 text-base font-medium">Taxa de Entrega (R$) <span class="text-red-500">*</span></label>
                            <div class="flex flex-wrap">
                                <div class="inline-flex text-center input-step w-full">
                                    <button type="button" class="border w-20 size-10 leading-[15px] minusBtn bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus" class="lucide lucide-minus inline-block size-4"><path d="M5 12h14"></path></svg></button>
                                    <input type="number" name="taxaEntregaMotoInput" id="taxaEntregaMotoInput" value="{{ $motoqueiro->taxa_entrega }}"class="w-full text-center ltr:pl-2 rtl:pr-2 h-10 border-y border-x product-quantity border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" step="0.1">
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-20 size-10 border-slate-200 plusBtn text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
                                </div>
                            </div>
                            @error('taxaEntregaMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="salarioMotoInput" class="inline-block mb-2 text-base font-medium">Salário (R$) <span class="text-red-500">*</span></label>
                            <div class="flex flex-wrap">
                                <div class="inline-flex text-center input-step w-full">
                                    <button type="button" class="border w-20 size-10 leading-[15px] minusBtn bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus" class="lucide lucide-minus inline-block size-4"><path d="M5 12h14"></path></svg></button>
                                    <input type="number" name="salarioMotoInput" id="salarioMotoInput" value="{{ $motoqueiro->salario }}"class="w-full text-center ltr:pl-2 rtl:pr-2 h-10 border-y border-x product-quantity border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" step="0.1">
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-20 size-10 border-slate-200 plusBtn text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
                                </div>
                            </div>
                            @error('salarioMotoInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="obsMotoInput" class="inline-block mb-2 text-base font-medium">Observação</label>
                        <textarea name="obsMotoInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="obsMotoInput" rows="3">{{ $motoqueiro->obs }}</textarea>
                    </div>
                    <div class="flex justify-end gap-2 mt-5">
                        <a href="#" id="toGoBack" type="button" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <button type="submit" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ global_asset('js/global/jquery_mask.js') }}"></script>
    <script src="{{ global_asset('js/global/jquery_mask.min.js') }}"></script>
    <script src="{{ global_asset('js/global/custom_input_number.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#cpfMotoInput').mask('000.000.000-00');
            $('#telefoneMotoInput').mask('(00) 0000-0000');
            $('#celularMotoInput').mask('(00) 00000-0000');
            $('#inscricaoEstadualInput').mask('00.000.000-0');
            $('#cepInput').mask('00000-000');
            $('#numeroInput').mask('00000');
        });
    </script>
@endsection
