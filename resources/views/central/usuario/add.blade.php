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
        @component('components.titulo-pagina', ['nome' => "Cadastro de Usuário"])
        @endcomponent

        @if ($errors->any())
            <div id="alert-global" class="flex flex-col gap-3 mt-5">
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

        <input type="text" name="pageType" value="create" id="pageType" hidden>
        <div class="card mt-5">
            <div class="card-body">
                <ul class="grid grid-cols-1 gap-3 lg:grid-cols-4 nav-tabs form-wizard">
                    <li class="group grow group/item active">
                        <a href="javascript:void(0);" data-tab-toggle="dadosDoUsuario" data-target="usuarioInfo" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                            <i data-lucide="user-2" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                            <span class="block mt-2 font-medium text-15 group-[.active]/item:text-custom-50">1. Dados do Usuário</span>
                        </a>
                    </li>
                    <li class="group grow group/item" id="tabPermissoesinfo">
                        <a href="javascript:void(0);" data-tab-toggle="permissoesAutorizacoes" data-target="permissoesinfo" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                            <i data-lucide="key" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                            <span class="block mt-2 font-medium text-15">2. Permissões & Autorizações</span>
                        </a>
                    </li>
                    <li class="group grow group/item">
                        <a href="javascript:void(0);" data-tab-toggle="comissoes" data-target="settingPillJustified" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                            <i data-lucide="coins" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                            <span class="block mt-2 font-medium text-15">3. Comissões</span>
                        </a>
                    </li>
                    <li class="group grow group/item">
                        <a href="javascript:void(0);" data-tab-toggle="vinculoLojas" data-target="settingPillJustified" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                            <i data-lucide="building-2" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                            <span class="block mt-2 font-medium text-15">4. Vinculo de Lojas</span>
                        </a>
                    </li>
                </ul>
                
                <form action="{{ route(request()->getHost().'.usuarios.cadastrar') }}" method="POST">
                    @csrf
                    <div class="mt-8 tab-content">
                        {{-- Tab 1. Dados do Usuário --}}
                        <div class="tab-pane" id="usuarioInfo">
                            <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                                <div class="mb-4">
                                    <label for="nomeUsuarioInput" class="inline-block mb-2 text-base font-medium">Nome</label>
                                    <input type="text" id="nomeUsuarioInput" name="nomeUsuarioInput" value="{{ old('nomeUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                                    @error('nomeUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="senhaUsuarioInput" class="inline-block mb-2 text-base font-medium">Senha</label>
                                    <div class="relative">
                                        <input type="password" id="senhaUsuarioInput" name="senhaUsuarioInput" value="{{ old('senhaUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        <button type="button" class="absolute top-2 ltr:right-4 rtl:left-4 toggle-password" data-target="#senhaUsuarioInput"><i class="align-middle ri-eye-off-fill text-slate-500 dark:text-zink-200"></i></button>
                                    </div>
                                    @error('senhaUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="confSenhaUsuario" class="inline-block mb-2 text-base font-medium">Confirmação de Senha</label>
                                    <div class="relative">
                                        <input type="password" id="confSenhaUsuario" name="confSenhaUsuario" value="{{ old('confSenhaUsuario') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        <button type="button" class="absolute top-2 ltr:right-4 rtl:left-4 toggle-password" data-target="#confSenhaUsuario"><i class="align-middle ri-eye-off-fill text-slate-500 dark:text-zink-200"></i></button>
                                    </div>
                                    @error('confSenhaUsuario')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="cpfUsuarioInput" class="inline-block mb-2 text-base font-medium">CPF</label>
                                    <input type="text" id="cpfUsuarioInput" name="cpfUsuarioInput" value="{{ old('cpfUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('cpfUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-8 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                                <div class="mb-4">
                                    <label for="rgUsuarioInput" class="inline-block mb-2 text-base font-medium">RG</label>
                                    <input type="text" id="rgUsuarioInput" name="rgUsuarioInput" value="{{ old('rgUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('rgUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="telefoneUsuarioInput" class="inline-block mb-2 text-base font-medium">Telefone</label>
                                    <input type="text" id="telefoneUsuarioInput" name="telefoneUsuarioInput" value="{{ old('telefoneUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('telefoneUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="celularUsuarioInput" class="inline-block mb-2 text-base font-medium">Celular</label>
                                    <input type="text" id="celularUsuarioInput" name="celularUsuarioInput" value="{{ old('celularUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('celularUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 text-center">
                                    <label for="statusUsuarioInput" class="inline-block mb-2 text-base font-medium">Status</label>
                                    <div class="row mt-2">
                                        <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                            <input type="checkbox" name="statusUsuarioInput" id="statusUsuarioInput" @if(old('statusUsuarioInput')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                            <label for="statusUsuarioInput" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                        </div>
                                        <label for="statusUsuarioInput" id="switchLabel" class="inline-block text-base font-medium cursor-pointer">{{ old('statusUsuarioInput') ? 'Ativo' : 'Inativo' }}</label>
                                    </div>
                                    @error('statusUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-8 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                                <div class="mb-4">
                                    <label for="generoUsuarioInput" class="inline-block mb-2 text-base font-medium">Gênero</label>
                                    <select name="generoUsuarioInput" id="generoUsuarioInput" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        <option value="M" {{ old('generoUsuarioInput') == 'M' ? 'selected' : '' }}>Masculino</option>
                                        <option value="F" {{ old('generoUsuarioInput') == 'F' ? 'selected' : '' }}>Feminino</option>
                                    </select>
                                    @error('generoUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="emailUsuarioInput" class="inline-block mb-2 text-base font-medium">Email</label>
                                    <input type="email" id="emailUsuarioInput" name="emailUsuarioInput" value="{{ old('emailUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('emailUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="dataNascUsuarioInput" class="inline-block mb-2 text-base font-medium">Data de Nascimento</label>
                                    <input type="date" id="dataNascUsuarioInput" name="dataNascUsuarioInput" value="{{ old('dataNascUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('dataNascUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="cargoUsuarioInput" class="inline-block mb-2 text-base font-medium">Cargo</label>
                                    <input type="text" id="cargoUsuarioInput" name="cargoUsuarioInput" value="{{ old('cargoUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('cargoUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
                                <div class="mb-4 md:col-span-2">
                                    <label for="dataAdmissaoUsuarioInput" class="inline-block mb-2 text-base font-medium">Data de Admissão</label>
                                    <input type="date" id="dataAdmissaoUsuarioInput" name="dataAdmissaoUsuarioInput" value="{{ old('dataAdmissaoUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('dataAdmissaoUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 md:col-span-2">
                                    <label for="dataDemissaoUsuarioInput" class="inline-block mb-2 text-base font-medium">Data de Demissão</label>
                                    <input type="date" id="dataDemissaoUsuarioInput" name="dataDemissaoUsuarioInput" value="{{ old('dataDemissaoUsuarioInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('dataDemissaoUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 md:col-span-3">
                                    <label for="descontoUsuarioInput" class="inline-block mb-2 text-base font-medium">Permitir Desconto de Até (%)</label>
                                    <div class="flex flex-wrap">
                                        <div class="inline-flex text-center input-step w-full">
                                            <button type="button" class="minusBtn border w-20 size-10 leading-[15px] minBtn bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus" class="lucide lucide-minus inline-block size-4"><path d="M5 12h14"></path></svg></button>
                                            <input type="number" name="descontoUsuarioInput" id="descontoUsuarioInput" value="{{ old('descontoUsuarioInput') }}" class="w-full text-center ltr:pl-2 rtl:pr-2 h-10 border-y border-x product-quantity border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" step="0.1" placeholder="Apenas números">
                                            <button type="button" class="plusBtn transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-20 size-10 border-slate-200 maxBtn text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
                                        </div>
                                    </div>
                                    @error('descontoUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 md:col-span-2">
                                    <label for="comissaoUsuarioInput" class="inline-block mb-2 text-base font-medium">Tipo de Comissão</label>
                                    <select name="comissaoUsuarioInput" id="comissaoUsuarioInput" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        <option value="null" {{ old('comissaoUsuarioInput') == 'null' ? 'selected' : '' }}>Nenhum</option>
                                        <option value="desconto" {{ old('comissaoUsuarioInput') == 'desconto' ? 'selected' : '' }}>Desconto</option>
                                        <option value="margem" {{ old('comissaoUsuarioInput') == 'margem' ? 'selected' : '' }}>Margem</option>
                                    </select>
                                    @error('comissaoUsuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 md:col-span-3">
                                    <label for="metasuarioInput" class="inline-block mb-2 text-base font-medium">Valor da Meta (R$)</label>
                                    <input type="text" id="metasuarioInput" name="metasuarioInput" value="{{ old('metasuarioInput') }}" onKeyPress="return(moeda(this,'.',',',event))" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Apenas números">
                                    @error('metasuarioInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Componente de Endereço --}}
                            @component('components.endereco', ['prefix' => null])
                            @endcomponent
                            <div class="mb-4">
                                <label for="obsUsuarioInput" class="inline-block mb-2 text-base font-medium">Observação</label>
                                <textarea name="obsUsuarioInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="obsUsuarioInput" rows="3">{{ old('obsUsuarioInput') }}</textarea>
                            </div>
                            <div class="border card border-custom-200 dark:border-custom-800 mt-5">
                                <div class="text-center px-4 py-3 mb-4 text-sm text-custom-500 border border-transparent rounded-md bg-custom-50 dark:bg-custom-400/20">
                                    <span class="font-bold text-15 ">Dados - Farmácia Popular</span>
                                </div>
                                <div class="card-body">
                                    <div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-2">
                                        <div class="mb-4">
                                            <label for="usuarioFarmaPopular" class="inline-block mb-2 text-base font-medium">Usuário</label>
                                            <input type="text" id="usuarioFarmaPopular" name="usuarioFarmaPopular" value="{{ old('usuarioFarmaPopular') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                            @error('usuarioFarmaPopular')
                                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="senhaFarmaPopular" class="inline-block mb-2 text-base font-medium">Senha</label>
                                            <div class="relative">
                                                <input type="password" id="senhaFarmaPopular" name="senhaFarmaPopular" value="{{ old('senhaFarmaPopular') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                                <button type="button" class="absolute top-2 ltr:right-4 rtl:left-4 toggle-password" data-target="#senhaFarmaPopular"><i class="align-middle ri-eye-off-fill text-slate-500 dark:text-zink-200"></i></button>
                                            </div>
                                            @error('senhaFarmaPopular')
                                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Tab 2. Permissões & Autorizações --}}
                        <div class="tab-pane hidden" id="permissoesinfo">
                            <div class="mt-5">
                                <ul class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                                    <li class="group active" id="liAcessoUsuarioTab">
                                        <a href="javascript:void(0);" data-tab-toggle="" data-target="acessoUsuarioTab" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent border-t-2 group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-t-custom-500 dark:group-[.active]:border-t-custom-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Acesso & Permissões</a>
                                    </li>
                                    <li class="group" id="liAutorizacaoUsuarioTab">
                                        <a href="javascript:void(0);" data-tab-toggle="" data-target="autorizacaoUsuarioTab" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent border-t-2 group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-t-custom-500 dark:group-[.active]:border-t-custom-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Autorizações</a>
                                    </li>
                                </ul>
                                {{-- Sub Tab Acesso & Permissões --}}
                                <div class="mt-5 tab-content">
                                    <div class="tab-pane block" id="acessoUsuarioTab">
                                        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
                                            <div class="mb-4 md:col-span-2">
                                                <label for="acessoUsuarioInput" class="inline-block mb-2 text-base font-medium">Acesso</label>
                                                <select name="acessoUsuarioInput" id="acessoUsuarioInput" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                                    <option value="">Selecione</option>
                                                    @foreach ($acessos as $acesso)
                                                        <option value="{{ $acesso->id }}" {{ old('acessoUsuarioInput') == $acesso->id ? 'selected' : '' }}>{{ $acesso->nome }}</option>
                                                    @endforeach
                                                </select>
                                                @error('acessoUsuarioInput')
                                                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="border card border-custom-200 dark:border-custom-800 mt-5">
                                            <div class="text-center px-4 py-3 mb-4 text-sm text-custom-500 border border-transparent rounded-md bg-custom-50 dark:bg-custom-400/20">
                                                <span class="font-bold text-xl">Permissões Especiais</span>
                                            </div>
                                            <div class="card-body">
                                                <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-2">
                                                    @foreach ($permissoes as $permissao)
                                                        <div class="flex items-center mb-4">
                                                            <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                                <input type="checkbox" value="{{ $permissao->id }}" name="permissoesUsuario[]" id="{{ "permussaoEspecial_" . $permissao->id }}" class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']"
                                                                    @if(in_array($permissao->id, old('permissoesUsuario', [])))
                                                                        checked
                                                                    @endif
                                                                >
                                                                <label for="{{ "permussaoEspecial_" . $permissao->id }}" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                                            </div>
                                                            <label for="{{"permussaoEspecial_" . $permissao->id }}" class="inline-block text-base font-medium cursor-pointer">{{ $permissao->descricao }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Sub Tab Autorizações --}}
                                    <div class="tab-pane hidden" id="autorizacaoUsuarioTab">

                                        @if ($errors->has('selectedIds'))
                                            <div id="alert-autorizacaoUsuarioTab" class="flex flex-col gap-3 mt-5 mb-5">
                                                <div class="relative p-3 pr-12 text-sm text-red-500 border border-t-2 border-transparent rounded-md bg-red-50 border-t-red-300 dark:bg-red-400/20 dark:border-t-red-500/50">
                                                    <button type="button" data-drawer-close="alert-autorizacaoUsuarioTab" aria-label="Close" class="absolute top-0 bottom-5 right-0 p-3 text-red-500 transition hover:text-red-500 dark:text-red-400/50 dark:hover:text-red-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x h-5"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                                                    <ul class="ml-2 list-disc list-inside">
                                                        <li><strong>{{ $errors->first('selectedIds') }}</strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif

                                        <table id="tableAutorizacoes" style="width:100%" class="hover group" data-url="{{ route(request()->getHost().'.usuarios.adicionar') }}">
                                            <thead>
                                                <tr>
                                                    <th>Tela/Menu</th>
                                                    <th data-orderable="false" data-searchable="false">Todos</th>
                                                    <th data-orderable="false" data-searchable="false">Acessar</th>
                                                    <th data-orderable="false" data-searchable="false">Cadastrar</th>
                                                    <th data-orderable="false" data-searchable="false">Alterar</th>
                                                    <th data-orderable="false" data-searchable="false">Deletar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (count($data) > 0)
                                                    @foreach ($data as $result)
                                                        <tr>
                                                            <td>{{ $result->nome }}</td>
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                                        <input type="checkbox" name="{{ "checkAll_".$result->id }}" id="{{ "checkAll_".$result->id }}" data-id="{{ $result->id }}" class="checkAllCheckbox absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-green-500 dark:checked:border-green-500 arrow-none">
                                                                        <label for="{{ "checkAll_".$result->id }}" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-green-500 peer-checked/published:border-green-500"></label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>{{ $result->id_acao_acessar }}</td>
                                                            <td>{{ $result->id_acao_cadastrar }}</td>
                                                            <td>{{ $result->id_acao_alterar }}</td>
                                                            <td>{{ $result->id_acao_deletar }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        {{-- Input hidden para armazenar o array selectedIds --}}
                                        <input type="hidden" id="selectedIdsHidden" name="selectedIds" value="{{ old('selectedIds') }}">
                                        <div class="flex justify-end gap-2 mt-5">
                                            <button type="submit" data-action="create" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane hidden" id="settingPillJustified">
                            <div class="px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
                                <span class="font-bold">A funcionalidade estará pronta em breve, volte depois!</span>
                            </div>
                        </div>
                        <div class="tab-pane hidden" id="contactPillJustified">
                            <div class="px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
                                <span class="font-bold">A funcionalidade estará pronta em breve, volte depois!</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ global_asset('template/assets/js/datatables/data-tables.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/data-tables.tailwindcss.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/datatables-utils.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/simple_pagination.js') }}"></script>
    <script src="{{ global_asset('js/global/jquery_mask.js') }}"></script>
    <script src="{{ global_asset('js/global/jquery_mask.min.js') }}"></script>
    <script src="{{ global_asset('js/global/custom_input_number.js') }}"></script>
    <script src="{{ global_asset('js/global/mask_money.js') }}"></script>
    <script src="{{ global_asset('js/usuario/custom_form.js') }}"></script>
    <script>
        $(document).ready(function () {
            /* Obtém os IDs selecionados armazenados e o tipo de página atual */
            const storedSelectedIds = $('#selectedIdsHidden').val();
            const pageType = $('#pageType').val();

            /* Inicializa os IDs selecionados com base no tipo de página e dados armazenados */
            if (pageType === 'edit') {
                @isset($userActions)
                    selectedIds = storedSelectedIds ? JSON.parse(storedSelectedIds) : @json($userActions);
                @else
                    selectedIds = storedSelectedIds ? JSON.parse(storedSelectedIds) : {};
                @endisset
            } else {
                if (storedSelectedIds) {
                    selectedIds = JSON.parse(storedSelectedIds);
                }
            }

            /* Configura a tabela e marca os checkboxes baseados nos IDs selecionados */
            configTabela();
            markCheckboxes();
        });
    </script>
@endsection
