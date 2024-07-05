@extends('layouts.base')

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Cadastro de Transportadora"])
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
                <form action="{{ route(request()->getHost().'.transportadoras.cadastrar') }}" method="POST">
                    @csrf
                    <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                        <div class="mb-4">
                            <label for="cnpjTranspInput" class="inline-block mb-2 text-base font-medium">CNPJ <span class="text-red-500">*</span></label>
                            <input type="text" id="cnpjTranspInput" name="cnpjTranspInput" value="{{ old('cnpjTranspInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                            @error('cnpjTranspInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4 md:col-span-2">
                            <label for="nomeTranspInput" class="inline-block mb-2 text-base font-medium">Nome da Transportadora <span class="text-red-500">*</span></label>
                            <input type="text" id="nomeTranspInput" name="nomeTranspInput" value="{{ old('nomeTranspInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('nomeTranspInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="inscricaoEstadualInput" class="inline-block mb-2 text-base font-medium">Inscrição Estadual</label>
                            <input type="text" id="inscricaoEstadualInput" value="{{ old('inscricaoEstadualInput') }}" name="inscricaoEstadualInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('inscricaoEstadualInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    {{-- Componente de Endereço --}}
                    @component('components.endereco', ['prefix' => null])
                    @endcomponent

                    <div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-4">
                        <div class="mb-4">
                            <label for="emailTranspInput" class="inline-block mb-2 text-base font-medium">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="emailTranspInput" name="emailTranspInput" value="{{ old('emailTranspInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('emailTranspInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="telefoneTranspInput" class="inline-block mb-2 text-base font-medium">Telefone <span class="text-red-500">*</span></label>
                            <input type="text" id="telefoneTranspInput" name="telefoneTranspInput" value="{{ old('telefoneTranspInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('telefoneTranspInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="celularTranspInput" class="inline-block mb-2 text-base font-medium">Celular <span class="text-red-500">*</span></label>
                            <input type="text" id="celularTranspInput" name="celularTranspInput" value="{{ old('celularTranspInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('celularTranspInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="contatoTranspInput" class="inline-block mb-2 text-base font-medium">Nome do Contato</label>
                            <input type="text" id="contatoTranspInput" name="contatoTranspInput" value="{{ old('contatoTranspInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('contatoTranspInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-5">
                        <a href="#" id="toGoBack" type="button" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <button type="submit" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ global_asset('js/global/jquery_mask.js') }}"></script>
    <script src="{{ global_asset('js/global/jquery_mask.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#cnpjTranspInput').mask('00.000.000/0000-00');
            $('#telefoneTranspInput').mask('(00) 0000-0000');
            $('#celularTranspInput').mask('(00) 00000-0000');
            $('#inscricaoEstadualInput').mask('00.000.000-0');
            $('#cepInput').mask('00000-000');
            $('#numeroInput').mask('00000');

            cnpjComplete();
        });

        const cnpjComplete = () => {
            $('#cnpjTranspInput').on('blur', function() {
                const cnpj = $(this).val().replace(/[^0-9]/g, '');

                if (cnpj) {
                    $.ajax({
                        url:'https://www.receitaws.com.br/v1/cnpj/' + cnpj,
                        method:'GET',
                        dataType: 'jsonp', /* Em requisições AJAX para outro domínio é necessário usar o formato "jsonp" que é o único aceito pelos navegadores por questão de segurança */
                        complete: function(xhr){
                            response = xhr.responseJSON;            
                            if(response.status == 'OK') {
                                $('#nomeTranspInput').val(response.nome);
                                $('#cepInput').val(response.cep.replace(/[^0-9]/g, ''));
                                $('#logradouroInput').val(response.logradouro);
                                $('#bairroInput').val(response.bairro);
                                $('#cidadeInput').val(response.municipio);
                                $('#estadoInput').val(response.nome);
                            } else {
                                console.error(response.message);
                            }
                        }
                    });
                }
            });
        };
    </script>
@endsection
