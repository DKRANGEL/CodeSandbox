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

        .choices__item.choices__item--selectable {
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Listagem dos Brindes"])
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
                <div class="flex items-center justify-between mb-5">
                    <div id="exportBtns"></div>
                    <div>
                        <a href="#" id="toGoBack" type="button" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <button data-url="{{ route(request()->getHost().'.brindes.cadastrar') }}" data-modal-target="brindeModal" type="button" id="addBrinde" class="mb-5 ml-2 text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20">
                            <i data-lucide="plus" class="inline-block size-4"></i>
                            <span class="align-middle">Novo Brinde</span>
                        </button>
                    </div>
                </div>
                @if (request()->getHost() == getCentralDomain())
                    @component('components.filtro-lojas') @endcomponent
                @endif
                <table id="tableBrindes" style="width:100%" class="hover group" data-url="{{ route(request()->getHost().'.brindes.listar') }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descrição</th>
                            <th>Pontos</th>
                            <th>Estoque</th>
                            <th>Status</th>
                            <th>Observação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div id="brindeModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                <h5 class="text-16" id="titleBrinde"></h5>
                <button data-modal-close="brindeModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <form action="" method="POST" id="brindeForm">
                <input type="text" name="idTenant" id="idTenant" hidden>
                <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                    @csrf
                    <div class="grid items-center grid-cols-1 gap-5 xl:grid-cols-3">
                        <div class="md:col-span-2 mb-4">
                            <label for="descricaoBrindeInput" class="inline-block mb-2 text-base font-medium">Descrição <span class="text-red-500">*</span></label>
                            <input type="text" name="descricaoBrindeInput" id="descricaoBrindeInput" value="{{ old('descricaoBrindeInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('descricaoBrindeInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="statusBrindeInput" class="inline-block mb-2 text-base font-medium">Status</label>
                            <div class="flex items-center justify-center">
                                <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                    <input type="checkbox" name="statusBrindeInput" id="statusBrindeInput" @if(old('statusBrindeInput')) checked @endif class="absolute block size-5 transition duration-300 ease-linear border-2 border-slate-200 dark:border-zink-500 rounded-full appearance-none cursor-pointer bg-white/80 dark:bg-zink-600 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-custom-500 dark:checked:border-custom-500 arrow-none after:absolute after:text-slate-500 dark:after:text-zink-200 after:content-['\eb99'] after:text-xs after:inset-0 after:flex after:items-center after:justify-center after:font-remix after:leading-none checked:after:text-custom-500 dark:checked:after:text-custom-500 checked:after:content-['\eb7b']">
                                    <label for="statusBrindeInput" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-500 peer-checked/published:border-custom-500"></label>
                                </div>
                                <label for="statusBrindeInput" id="switchLabel" class="inline-block text-base font-medium cursor-pointer">{{ old('statusBrindeInput') ? 'Ativo' : 'Inativo' }}</label>
                            </div>
                            @error('statusBrindeInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="grid items-center grid-cols-1 gap-5 xl:grid-cols-2">
                        <div class="mb-4">
                            <label for="pontosBrindeInput" class="inline-block mb-2 text-base font-medium">Pontos <span class="text-red-500">*</span></label>
                            <div class="flex flex-wrap gap-4 justify-center">
                                <div class="inline-flex text-center input-step">
                                    <button type="button" class="border size-9 leading-[15px] minusBtn bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus" class="lucide lucide-minus inline-block size-4"><path d="M5 12h14"></path></svg></button>
                                    <input type="number" name="pontosBrindeInput" id="pontosBrindeInput" value="{{ old('pontosBrindeInput') }}" class="w-28 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500" step="0.1">
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
                                </div>
                            </div>
                            @error('pontosBrindeInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="estoqueBrindeInput" class="inline-block mb-2 text-base font-medium">Estoque <span class="text-red-500">*</span></label>
                            <div class="flex flex-wrap gap-4">
                                <div class="inline-flex text-center input-step">
                                    <button type="button" class="border size-9 leading-[15px] minusBtn bg-white dark:bg-zink-700 dark:border-zink-500 ltr:rounded-l rtl:rounded-r transition-all duration-200 ease-linear border-slate-200 text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="minus" class="lucide lucide-minus inline-block size-4"><path d="M5 12h14"></path></svg></button>
                                    <input type="number" name="estoqueBrindeInput" id="estoqueBrindeInput" value="{{ old('estoqueBrindeInput') }}" class="w-28 text-center ltr:pl-2 rtl:pr-2 h-9 border-y product-quantity dark:bg-zink-700 focus:shadow-none dark:border-zink-500" step="0.1">
                                    <button type="button" class="transition-all duration-200 ease-linear bg-white border dark:bg-zink-700 dark:border-zink-500 ltr:rounded-r rtl:rounded-l size-9 border-slate-200 plusBtn text-slate-500 dark:text-zink-200 hover:bg-custom-500 dark:hover:bg-custom-500 hover:text-custom-50 dark:hover:text-custom-50 hover:border-custom-500 dark:hover:border-custom-500 focus:bg-custom-500 dark:focus:bg-custom-500 focus:border-custom-500 dark:focus:border-custom-500 focus:text-custom-50 dark:focus:text-custom-50"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
                                </div>
                            </div>
                            @error('estoqueBrindeInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="obsBrindeInput" class="inline-block mb-2 text-base font-medium">Observação</label>
                        <textarea name="obsBrindeInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="obsBrindeInput" rows="3">{{ old('obsBrindeInput') }}</textarea>
                    </div>
                    @if (request()->getHost() == getCentralDomain())
                        @component('components.select-multi-lojas') @endcomponent
                    @endif
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="button" data-modal-close="brindeModal" class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500">Fechar</button>
                        <button type="submit" id="sendForm" class="text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @component('components.sweet-alert2')@endcomponent
    @component('components.modal-delete')@endcomponent
@endsection

@section('script')
    @component('components.datatables-scripts')@endcomponent
    <script src="{{ global_asset('js/global/custom_input_number.js') }}"></script>
    <script>
        $(document).ready(function () {
            configTabela();
            getDataTenantBrinde();
            $('#lojaSelect').trigger('change');
            exibirModalClick();
            exibirStatusMudanca();
            cadastrarBrindeClick();
            editarBrindeClick();
            deletarBrindeClick();
        });

        const renderFloat = (data) => parseFloat(data).toFixed(2);
        
        const renderStatus = (data) => {
            const spanActive = `<span class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent inline-flex items-center status"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-circle" class="lucide lucide-check-circle size-3 mr-1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><path d="m9 11 3 3L22 4"></path></svg> ATIVO</span>`;
            const spanInactive = `<span class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent status"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x size-3 mr-1.5"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg> INATIVO</span>`;
            
            return data ? spanActive : spanInactive;
        };

        const renderObs = (data) => {
            if (data && data.length > 20) {
                return `
                    <span>${data.substr(0, 20)}...</span>
                    <button type="button" data-obs="${data}" class="popoverButton rounded-full items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-slate-500 bg-white btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye inline-block mr-1 size-4">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                `;
            } else {
                return `<span>${data ?? "SEM OBSERVAÇÃO"}</span>`;
            }
        };

        const configTabela = () => {
            const rota = $('#tableBrindes').data('url');
            const tabela = $('#tableBrindes').DataTable({
                pagingType: 'simple_numbers_no_ellipses',
                processing: true,
                serverSide: true,
                responsive: true,
                deferRender: true,
                ajax: rota,
                lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
                pageLength: 5,
                language: { url: "{{ global_asset('template/assets/json/datatables_pt-BR.json') }}" },
                order: [[0, 'desc']],
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'descricao', name: 'descricao' },
                    { data: 'pontos', name: 'pontos', render: renderFloat },
                    { data: 'estoque', name: 'estoque', render: renderFloat },
                    { data: 'status', name: 'status', render: renderStatus },
                    { data: 'obs', name: 'obs', render: renderObs },
                    {
                        data: null, name: 'actions', orderable: false, searchable: false,
                        render: (data, type, row) => {

                            const idTenant = getIdTenant();
                            const editarUrl = `{{ route(request()->getHost().'.brindes.atualizar', ['id' => ':id']) }}`.replace(':id', row.id) + '/' + idTenant;
                            const deletarUrl = `{{ route(request()->getHost().'.brindes.deletar', ['id' => ':id']) }}`.replace(':id', row.id) + '/' + idTenant;

                            return `
                                <div class="flex gap-2">
                                    <button data-item='${JSON.stringify(row)}' data-url="${editarUrl}" data-tooltip="default" data-tooltip-content="Editar" id="editBrinde" class="tooltip px-2 py-1.5 text-xs text-white btn bg-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-yellow-400/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil size-4">
                                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                                            <path d="m15 5 4 4"></path>
                                        </svg>
                                    </button>
                                    <button data-url="${deletarUrl}" id="deleteRegister" data-tooltip="default" data-tooltip-content="Excluir" class="tooltip px-2 py-1.5 text-xs text-white btn bg-red-500 border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-red-400/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2 size-4">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg>
                                    </button>
                                </div>
                            `;
                        }
                    }
                ],
                buttons: criarBotao(),
                initComplete: function () {
                    $('#exportBtns').append(tabela.buttons().container());
                    visibilidadeColuna(this);
                },
                /* Função para exibição de tooltips */
                drawCallback: exibicaoToolTip,
            });

            $('#tableBrindes').on('processing.dt', ocultarLinhasTabela);
        };

        const getDataTenantBrinde = () => {
            $('#lojaSelect').on('change', function() {
                const lojaId = $(this).val();
                const route = `{{ route(request()->getHost().'.brindes.listar') }}` + '/' + lojaId;
                const tabela = $('#tableBrindes').DataTable();
                tabela.clear().draw();
                tabela.ajax.url(route).load();
            });
        };
        
        const exibirModalClick = () => {
            $(document).on('click', '.popoverButton', function () {
                const obs = $(this).data('obs');
                const template = `
                    <swal-html>
                        <div class="text-center"><strong>Observação</strong></div>
                        <div class="text-center mt-2">${obs}</div>
                    </swal-html>
                `;
                Swal.fire({
                    toast: true,
                    position: 'center',
                    showConfirmButton: true,
                    html: template
                });
            });
        };

        const exibirStatusMudanca = () => {
            $('#statusBrindeInput').change(function() {
                const isChecked = $(this).is(':checked');
                
                $('#switchLabel').text(isChecked ? 'Ativo' : 'Inativo');
            });
        };

        const cadastrarBrindeClick = () => {
            $('#addBrinde').click(function() {
                const url = $(this).data('url');
                
                $('#brindeModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');

                $('#divLojaSelectMultiple').prop('hidden', false);
                $('#idTenant').val(getIdTenant());
                $('#brindeForm').attr('action', url);
                $('#titleBrinde').text('Cadastro de Brinde');
                $('#sendForm').text('Cadastrar');
            });
        };

        const editarBrindeClick = () => {
            $(document).on('click', '#editBrinde', function () {
                const url = $(this).data('url');
                const item = $(this).data('item');
                
                $('#brindeModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');

                $('#brindeForm').attr('action', url);
                $('#titleBrinde').text(`Edição do registro: ${item.descricao}`);
                $('#descricaoBrindeInput').val(item.descricao);
                $('#statusBrindeInput').prop('checked', item.status);
                $('#switchLabel').text(item.status ? 'Ativo' : 'Inativo');
                $('#pontosBrindeInput').val(item.pontos);
                $('#estoqueBrindeInput').val(item.estoque);
                $('#obsBrindeInput').val(item.obs ?? '');
                $('#sendForm').text('Salvar');
            });
        };

        const deletarBrindeClick = () => {
            $(document).on('click', '#deleteRegister', function () {
                const url = $(this).data('url');
                $('#deleteModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');
                $('#divSelectMultipleDelete').prop('hidden', false);
                $('#obs').removeClass('hidden');
                $('#formDelete').attr('action', url);
            });
        }; 

        const getIdTenant = () => {
            return $('#lojaSelect').val();
        }
    </script>
@endsection
