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
    </style>
@endsection

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Configurações do Sistema"])
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
                <div class="swiper pagination-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-5">
                            <ul class="grid grid-cols-1 gap-3 lg:grid-cols-4 nav-tabs form-wizard p-5">
                                <li class="group grow group/item active">
                                    <a href="javascript:void(0);" data-tab-toggle="sistema_1" data-target="sistema_1" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                                        <i data-lucide="settings" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                                        <span class="block mt-2 font-medium text-15 group-[.active]/item:text-custom-50">1. Sistema / Principal</span>
                                    </a>
                                </li>
                                <li class="group grow group/item">
                                    <a href="javascript:void(0);" data-tab-toggle="sistema_2" data-target="sistema_2" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                                        <i data-lucide="settings" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                                        <span class="block mt-2 font-medium text-15">2. Sistema / Principal</span>
                                    </a>
                                </li>
                                <li class="group grow group/item">
                                    <a href="javascript:void(0);" data-tab-toggle="sistema_3" data-target="sistema_3" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                                        <i data-lucide="settings" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                                        <span class="block mt-2 font-medium text-15">3. Sistema / Principal</span>
                                    </a>
                                </li>
                                <li class="group grow group/item">
                                    <a href="javascript:void(0);" data-tab-toggle="sistema_4" data-target="sistema_4" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                                        <i data-lucide="settings" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                                        <span class="block mt-2 font-medium text-15">4. Sistema / Principal</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide p-5">
                            <ul class="grid grid-cols-1 gap-3 lg:grid-cols-4 nav-tabs form-wizard p-5">
                                <li class="group grow group/item">
                                    <a href="javascript:void(0);" data-tab-toggle="sistema_5" data-target="sistema_5" class="block px-4 py-1 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-green-500 group-[.active]/item:text-custom-50">
                                        <i data-lucide="settings" class="block h-6 mx-auto dark:fill-zink-400 group-[.active]/item:fill-slate-100"></i>
                                        <span class="block mt-2 font-medium text-15">5. Sistema / Principal</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-button-next after:hidden text-custom-500"><i data-lucide="arrow-right"></i></div>
                    <div class="swiper-button-prev after:hidden text-custom-500"><i data-lucide="arrow-left"></i></div>
                </div>
                
                <form action="{{ route(request()->getHost().'.configuracoes.atualizar') }}" method="POST">
                    @csrf
                    {{-- Tab 1. Configurações Principais --}}
                    <div class="tab-pane" data-tab-id="1" id="sistema_1">
                        <div class="mt-10 grid grid-cols-1 gap-x-5 md:grid-cols-3 xl:grid-cols-3 p-5">
                            <div class="mb-4">
                                <label for="tiposistemaInput" class="inline-block mb-2 text-base font-medium">Tipo Sistema</label>
                                <select name="tiposistemaInput" id="tiposistemaInput" class="tipoSistemaInput form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                    <option value="Farmacia" {{ $configuracao->tipo_sistema == 'Farmacia' ? 'selected' : '' }}>Farmácia</option>
                                    <option value="Loja" {{ $configuracao->tipo_sistema == 'Loja' ? 'selected' : '' }}>Loja</option>
                                </select>
                                @error('tiposistemaInput')
                                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="descontoMaxInput" class="inline-block mb-2 text-base font-medium">Desconto Máximo (%) <span class="text-red-500">*</span></label>
                                <div class="flex flex-wrap">
                                    <div class="inline-flex text-center input-step w-full">
                                        <button type="button" class="border w-20 size-10 leading-[15px] minusBtn bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus" class="lucide lucide-minus inline-block size-4"><path d="M5 12h14"></path></svg></button>
                                        <input type="number" name="descontoMaxInput" id="descontoMaxInput" value="{{ $configuracao->deconto_max }}" class="input_decimal w-full text-center ltr:pl-2 rtl:pr-2 h-10 border-y border-x product-quantity border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" step="0.1">
                                        <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l w-20 size-10 border-slate-200 plusBtn text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
                                    </div>
                                </div>
                                @error('descontoMaxInput')
                                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4 text-center">
                                <label for="statusSenhaMenuInput" class="inline-block mb-2 text-base font-medium"> Solicitar senha ao acessar menus </label>
                                <div class="row mt-2">
                                    <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                        <input type="checkbox" name="statusSenhaMenuInput" id="statusSenhaMenuInput" @if($configuracao->senha_menu) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                        <label for="statusSenhaMenuInput" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                    </div>
                                    <label for="statusSenhaMenuInput" id="switchLabel" class="inline-block text-base font-medium cursor-pointer">{{ $configuracao->senha_menu ? 'Ativo' : 'Inativo' }}</label>
                                </div>
                                @error('statusSenhaMenuInput')
                                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-x-5 md:grid-cols-1 xl:grid-cols-1">
                            <div class="flex justify-center gap-2 mt-10 col-span-1" id="divButtons">
                                <button type="submit" data-action="create" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100">Salvar</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane hidden mt-5" data-tab-id="2" id="sistema_2">
                        <div class="px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
                            <span class="font-bold">A funcionalidade estará pronta em breve, volte depois! TAB 2</span>
                        </div>
                        <div class="flex justify-center gap-2 mt-10" id="divButtons">
                            <button type="submit" data-action="create" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 hidden">Salvar</button>
                        </div>                        
                    </div>
                    <div class="tab-pane hidden mt-5" data-tab-id="3" id="sistema_3">
                        <div class="px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
                            <span class="font-bold">A funcionalidade estará pronta em breve, volte depois! TAB 3</span>
                        </div>
                        <div class="flex justify-center gap-2 mt-10" id="divButtons">
                            <button type="submit" data-action="create" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 hidden">Salvar</button>
                        </div>                      
                    </div>
                    <div class="tab-pane hidden mt-5" data-tab-id="4" id="sistema_4">
                        <div class="px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20">
                            <span class="font-bold">A funcionalidade estará pronta em breve, volte depois! TAB 4</span>
                        </div>
                        <div class="flex justify-center gap-2 mt-10" id="divButtons">
                            <button type="submit" data-action="create" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 hidden">Salvar</button>
                        </div>                         
                    </div>
                </form>
            </div>
        </div>
    </div>
    @component('components.sweet-alert2')@endcomponent
    @component('components.modal-delete')@endcomponent
@endsection

@section('script')
    <script src="{{ global_asset('template/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ global_asset('js/global/custom_input_number.js') }}"></script>
    <script>
        $(document).ready(function () {
            setupStatusChange();
            setupSwiper();
            setupReadOnly();
        });

        const setupSwiper = () => {
            new Swiper(".pagination-slider", {
                pagination: {
                    el: ".swiper-pagination",
                    type: "progressbar",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        };

        const setupStatusChange = () => {
            $('#statusSenhaMenuInput').change(function() {
                const isChecked = $(this).is(':checked');
                $('#switchLabel').text(isChecked ? 'Ativo' : 'Inativo');
            });
        };

        const setupReadOnly = () => {
            const select = $('#tiposistemaInput');

            select.on('mousedown', function(event) {
                event.preventDefault();
                $(this).blur();
                window.focus();
            });
        };
    </script>
@endsection
