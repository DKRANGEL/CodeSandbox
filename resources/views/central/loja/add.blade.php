@extends('layouts.base')

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Cadastro de Loja"])
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
        
        <div class="card mt-5">
            <div class="card-body">
                <ul class="grid grid-cols-1 gap-3 lg:grid-cols-12 nav-tabs form-wizard">
                    <li class="group/item active md:col-span-3">
                        <a href="#" type="button" data-action="prev" data-target="lojaInfo" data-tab-id="1" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500">
                            <i data-lucide="building-2" class="block h-6 mx-auto fill-slate-100 dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                            <span class="block mt-2 font-medium text-15 group-[.active]/item:text-custom-50">1. Dados da Empresa</span>
                        </a>
                    </li>
                    <li class="group/item md:col-span-3">
                        <a href="#" type="button" data-action="next" data-target="representanteInfo" data-tab-id="2" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                            <i data-lucide="user-2" class="block h-6 mx-auto fill-slate-200 dark:fill-zink-400 group-[.active]/item:fill-slate-200"></i>
                            <span class="block mt-2 font-medium text-15">2. Representante Legal</span>
                        </a>
                    </li>
                </ul>
                <div class="mt-5 tab-content">
                    <form action="{{ route(request()->getHost().'.lojas.cadastrar') }}" method="POST">
                        @csrf
                        <div class="block tab-pane" data-tab-id="1" id="lojaInfo">
                            <div class="mt-8 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                                <div class="mb-4">
                                    <label for="cnpjLojaInput" class="inline-block mb-2 text-base font-medium">CNPJ <span class="text-red-500">*</span></label>
                                    <input type="text" id="cnpjLojaInput" name="cnpjLojaInput" value="{{ old('cnpjLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                                    @error('cnpjLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="razaoSocialLojaInput" class="inline-block mb-2 text-base font-medium">Razão Social <span class="text-red-500">*</span></label>
                                    <input type="text" id="razaoSocialLojaInput" name="razaoSocialLojaInput" value="{{ old('razaoSocialLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('razaoSocialLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="fantasiaLojaInput" class="inline-block mb-2 text-base font-medium">Nome Fantasia <span class="text-red-500">*</span></label>
                                    <input type="text" id="fantasiaLojaInput" name="fantasiaLojaInput" value="{{ old('fantasiaLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('fantasiaLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
                                <div class="mb-4 md:col-span-4">
                                    <label for="proprietarioLojaInput" class="inline-block mb-2 text-base font-medium">Nome do Proprietário</label>
                                    <input type="text" id="proprietarioLojaInput" name="proprietarioLojaInput" value="{{ old('proprietarioLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('proprietarioLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 md:col-span-4">
                                    <label for="gerenteLojaInput" class="inline-block mb-2 text-base font-medium">Nome do Gerente</label>
                                    <input type="text" id="gerenteLojaInput" name="gerenteLojaInput" value="{{ old('gerenteLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('gerenteLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 text-center md:col-span-2">
                                    <label for="statusLojaInput" class="inline-block mb-2 text-base font-medium">Status <span class="text-red-500">*</span></label>
                                    <div class="row mt-2">
                                        <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                            <input type="checkbox" name="statusLojaInput" id="statusLojaInput" @if(old('statusLojaInput')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                            <label for="statusLojaInput" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                        </div>
                                        <label for="statusLojaInput" id="switchLabel" class="inline-block text-base font-medium cursor-pointer">{{ old('statusLojaInput') ? 'Ativa' : 'Inativa' }}</label>
                                    </div>
                                    @error('statusLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 text-center md:col-span-2">
                                    <label for="lojaIntegradaSwitch" class="inline-block mb-2 text-base font-medium">Loja Integrada <span class="text-red-500">*</span></label>
                                    <div class="row mt-2">
                                        <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                            <input type="checkbox" name="lojaIntegradaSwitch" id="lojaIntegradaSwitch" @if(old('lojaIntegradaSwitch')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                            <label for="lojaIntegradaSwitch" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                        </div>
                                        <label for="lojaIntegradaSwitch" id="switchLabel1" class="inline-block text-base font-medium cursor-pointer">{{ old('lojaIntegradaSwitch') ? 'Sim' : 'Não' }}</label>
                                    </div>
                                    @error('lojaIntegradaSwitch')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
                                <div class="mb-4 md:col-span-4">
                                    <label for="inscricaoEstadualInput" class="inline-block mb-2 text-base font-medium">Inscrição Estadual</label>
                                    <input type="text" id="inscricaoEstadualInput" value="{{ old('inscricaoEstadualInput') }}" name="inscricaoEstadualInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('inscricaoEstadualInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4 md:col-span-4">
                                    <label for="inscricaoMunicipalInput" class="inline-block mb-2 text-base font-medium">Inscrição Municipal</label>
                                    <input type="text" id="inscricaoMunicipalInput" value="{{ old('inscricaoMunicipalInput') }}" name="inscricaoMunicipalInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('inscricaoMunicipalInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if (!$matrizExists)
                                    <div class="mb-4 text-center md:col-span-2">
                                        <label for="abastecerPrecoLojaInput" class="inline-block mb-2 text-base font-medium">Abastecimento de Preço <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="abastecerPrecoLojaInput" id="abastecerPrecoLojaInput" @if(old('abastecerPrecoLojaInput')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                                <label for="abastecerPrecoLojaInput" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                            </div>
                                            <label for="abastecerPrecoLojaInput" id="switchLabel2" class="inline-block text-base font-medium cursor-pointer">{{ old('abastecerPrecoLojaInput') ? 'Sim' : 'Não' }}</label>
                                        </div>
                                        @error('abastecerPrecoLojaInput')
                                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4 text-center md:col-span-2">
                                        <label for="lojaMatrizSwitch" class="inline-block mb-2 text-base font-medium">Loja Matriz <span class="text-red-500">*</span></label>
                                        <div class="row mt-2">
                                            <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="lojaMatrizSwitch" id="lojaMatrizSwitch" @if(old('lojaMatrizSwitch')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                                <label for="lojaMatrizSwitch" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                            </div>
                                            <label for="lojaMatrizSwitch" id="switchLabel4" class="inline-block text-base font-medium cursor-pointer">{{ old('lojaMatrizSwitch') ? 'Sim' : 'Não' }}</label>
                                        </div>
                                        @error('lojaMatrizSwitch')
                                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @else
                                    <div class="mb-4 text-center md:col-span-4">
                                        <label for="abastecerPrecoLojaInput" class="inline-block mb-2 text-base font-medium">Abastecimento de Preço <span class="text-red-500">*</span></label>
                                        <div class="mt-2">
                                            <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                <input type="checkbox" name="abastecerPrecoLojaInput" id="abastecerPrecoLojaInput" @if(old('abastecerPrecoLojaInput')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                                <label for="abastecerPrecoLojaInput" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                            </div>
                                            <label for="abastecerPrecoLojaInput" id="switchLabel2" class="inline-block text-base font-medium cursor-pointer">{{ old('abastecerPrecoLojaInput') ? 'Sim' : 'Não' }}</label>
                                        </div>
                                        @error('abastecerPrecoLojaInput')
                                            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                            </div>

                            {{-- Componente de Endereço --}}
                            @component('components.endereco', ['prefix' => null])
                            @endcomponent

                            <div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-3">
                                <div class="mb-4">
                                    <label for="emailLojaInput" class="inline-block mb-2 text-base font-medium">Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="emailLojaInput" name="emailLojaInput" value="{{ old('emailLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('emailLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="telefoneLojaInput" class="inline-block mb-2 text-base font-medium">Telefone <span class="text-red-500">*</span></label>
                                    <input type="text" id="telefoneLojaInput" name="telefoneLojaInput" value="{{ old('telefoneLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('telefoneLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="celularLojaInput" class="inline-block mb-2 text-base font-medium">Celular <span class="text-red-500">*</span></label>
                                    <input type="text" id="celularLojaInput" name="celularLojaInput" value="{{ old('celularLojaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('celularLojaInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="border card border-custom-200 dark:border-custom-800 mt-5">
                                <div class="text-center px-4 py-3 mb-4 text-sm text-custom-500 border border-transparent rounded-md bg-custom-50 dark:bg-custom-400/20">
                                    <span class="font-bold text-15 ">Dados - Farmácia Popular</span>
                                </div>
                                <div class="card-body">
                                    <div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-3">
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
                                        <div class="mb-4">
                                            <label for="producaoFarmaPopular" class="inline-block mb-2 text-base font-medium">Produção</label>
                                            <div class="flex items-center mt-2">
                                                <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                                    <input type="checkbox" name="producaoFarmaPopular" id="producaoFarmaPopular" @if(old('producaoFarmaPopular')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                                    <label for="producaoFarmaPopular" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                                </div>
                                                <label for="producaoFarmaPopular" id="switchLabel3" class="inline-block text-base font-medium cursor-pointer">{{ old('producaoFarmaPopular') ? 'Sim' : 'Não' }}</label>
                                            </div>
                                            @error('producaoFarmaPopular')
                                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden tab-pane" data-tab-id="2" id="representanteInfo">
                            <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                                <div class="mb-4 md:col-span-2">
                                    <label for="nomeRespInput" class="inline-block mb-2 text-base font-medium">Nome <span class="text-red-500">*</span></label>
                                    <input type="text" id="nomeRespInput" name="nomeRespInput" value="{{ old('nomeRespInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                                    @error('nomeRespInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="cpfRespInput" class="inline-block mb-2 text-base font-medium">CPF <span class="text-red-500">*</span></label>
                                    <input type="text" id="cpfRespInput" name="cpfRespInput" value="{{ old('cpfRespInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('cpfRespInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="rgRespInput" class="inline-block mb-2 text-base font-medium">RG <span class="text-red-500">*</span></label>
                                    <input type="text" id="rgRespInput" name="rgRespInput" value="{{ old('rgRespInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('rgRespInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Componente de Endereço --}}
                            @component('components.endereco', ['prefix' => "resp"])
                            @endcomponent

                            <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4">
                                <div class="mb-4">
                                    <label for="estadoCivilRespInput" class="inline-block mb-2 text-base font-medium">Estado Civil</label>
                                    <select name="estadoCivilRespInput" id="estadoCivilRespInput" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        <option value="Solteiro" {{ old('estadoCivilRespInput') == 'Solteiro' ? 'selected' : '' }}>Solteiro</option>
                                        <option value="Casado" {{ old('estadoCivilRespInput') == 'Casado' ? 'selected' : '' }}>Casado</option>
                                        <option value="Divorciado" {{ old('estadoCivilRespInput') == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                                        <option value="Separado" {{ old('estadoCivilRespInput') == 'Separado' ? 'selected' : '' }}>Separado</option>
                                        <option value="Viuvo" {{ old('estadoCivilRespInput') == 'Viuvo' ? 'selected' : '' }}>Viúvo</option>
                                    </select>
                                    @error('estadoCivilRespInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="profissaoRespInput" class="inline-block mb-2 text-base font-medium">Profissão</label>
                                    <input type="text" id="profissaoRespInput" name="profissaoRespInput" value="{{ old('profissaoRespInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('profissaoRespInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="dataNascRespInput" class="inline-block mb-2 text-base font-medium">Data de Nascimento</label>
                                    <input type="date" id="dataNascRespInput" name="dataNascRespInput" value="{{ old('dataNascRespInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('dataNascRespInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="valorInstalacaoRespInput" class="inline-block mb-2 text-base font-medium">Valor da Instalação</label>
                                    <input type="text" id="valorInstalacaoRespInput" name="valorInstalacaoRespInput" value="{{ old('valorInstalacaoRespInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    @error('valorInstalacaoRespInput')
                                        <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>                            
                        </div>
                        <div class="flex justify-end gap-2 mt-5" id="divButtons">
                            <button type="submit" data-action="create" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 hidden">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ global_asset('js/loja/custom_loja.js') }}"></script>
    <script src="{{ global_asset('js/loja/custom_tab.js') }}"></script>
    <script src="{{ global_asset('js/global/jquery_mask.js') }}"></script>
    <script src="{{ global_asset('js/global/jquery_mask.min.js') }}"></script>
@endsection
