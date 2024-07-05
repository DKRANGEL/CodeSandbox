@extends('layouts.base')

@section('css')
@endsection

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Listagem das Cidades"])
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
                        <button data-url="{{ route(request()->getHost().'.cidades.cadastrar') }}" data-modal-target="cidadeModal" type="button" id="addCidade" class="mb-5 ml-2 text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20">
                            <i data-lucide="plus" class="inline-block size-4"></i>
                            <span class="align-middle">Nova Cidade</span>
                        </button>
                    </div>
                </div>
                <table id="tableCidades" style="width:100%" class="hover group" data-url="{{ route(request()->getHost().'.cidades.listar') }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Cidade</th>
                            <th>Cód. Cidade IBGE</th>
                            <th>Estado</th>
                            <th>Cód. Estado IBGE</th>
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
    <div id="cidadeModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-300/20">
                <h5 class="text-16" id="titleCidade"></h5>
                <button data-modal-close="cidadeModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <form action="" method="POST" id="cidadeForm">
                <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                    @csrf
                    <div class="grid items-center grid-cols-1 gap-5 xl:grid-cols-2">
                        <div class="md:col-span-2 mb-4">
                            <label for="nomeCidadeInput" class="inline-block mb-2 text-base font-medium">Cidade <span class="text-red-500">*</span></label>
                            <input type="text" name="nomeCidadeInput" id="nomeCidadeInput" value="{{ old('nomeCidadeInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('nomeCidadeInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="grid items-center grid-cols-1 gap-5 xl:grid-cols-2">
                        <div class="md:col-span-2 mb-4">
                            <label for="codIbgeCidadeInput" class="inline-block mb-2 text-base font-medium">Código Cidade IBGE <span class="text-red-500">*</span></label>
                            <input type="text" name="codIbgeCidadeInput" id="codIbgeCidadeInput" value="{{ old('codIbgeCidadeInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('codIbgeCidadeInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="grid items-center grid-cols-1 gap-5 xl:grid-cols-2">
                        <div class="md:col-span-2 mb-4">
                            <label for="estadoCidadeSelect" class="inline-block mb-2 text-base font-medium">Estado <span class="text-red-500">*</span></label>
                            <select name="estadoCidadeSelect" id="estadoCidadeSelect" class="form-select border-slate-200 dark:border-zink-500 focus outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark placeholder:text-zink-200">
                                @foreach($estados as $estado)
                                    <option value="{{ $estado->id }}" {{ old('estadoCidadeSelect') == $estado->id ? 'selected' : '' }}>
                                        {{ $estado->nome }}
                                    </option>
                                @endforeach
                            </select>
                            @error('estadoCidadeSelect')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="cidadeModal" class="text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500">Fechar</button>
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
            cadastrarCidadeClick();
            editarCidadeClick();
            deletarCidadeClick();
        });

        const renderStatus = (data) => data ? 'ATIVO' : 'INATIVO';
        const renderActions = (data, type, row) => {
            const editarUrl = `{{ route(request()->getHost().'.cidades.atualizar', ['id' => ':id']) }}`.replace(':id', row.id);
            const deletarUrl = `{{ route(request()->getHost().'.cidades.deletar', ['id' => ':id']) }}`.replace(':id', row.id);
            return `
                <div class="flex gap-2">
                    <button data-item='${JSON.stringify(row)}' data-url="${editarUrl}" data-tooltip="default" data-tooltip-content="Editar" id="editCidade" class="tooltip px-2 py-1.5 text-xs text-white btn bg-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-yellow-400/20">
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
        };

        const configTabela = () => {
            const rota = $('#tableCidades').data('url');
            const tabela = $('#tableCidades').DataTable({
                pagingType: 'simple_numbers_no_ellipses',
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: rota,
                lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
                pageLength: 5,
                language: { url: "{{ global_asset('template/assets/json/datatables_pt-BR.json') }}" },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nome', name: 'nome' },
                    { data: 'codigo_ibge', name: 'codigo_ibge' },
                    { data: 'estado_nome', name: 'estado_nome' },
                    { data: 'estado_codigo_ibge', name: 'estado_codigo_ibge' },
                    { data: null, name: 'actions', orderable: false, searchable: false, render: renderActions }
                ],
                buttons: criarBotao(),
                initComplete: function () {
                    $('#exportBtns').append(tabela.buttons().container());
                    visibilidadeColuna(this);
                },
                /* Função para exibição de tooltips */
                drawCallback: exibicaoToolTip,
            });

            $('#tableCidades').on('processing.dt', ocultarLinhasTabela);
        };

        const cadastrarCidadeClick = () => {
            $('#addCidade').click(function () {
                const url = $(this).data('url');

                $("#cidadeForm").trigger('reset').attr('action', url);
                $('#titleCidade').text('Cadastro de Cidade');
                $('#sendForm').text('Cadastrar');
            });
        };

        const editarCidadeClick = () => {
            $(document).on('click', '#editCidade', function () {
                const url = $(this).data('url');
                const item = $(this).data('item');

                $('#cidadeModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');
                $('#cidadeForm').attr('action', url);
                $('#titleCidade').text('Edição do registro: ' + item.nome);
                $('#estadoCidadeSelect').val(item.estado_id);   
                $('#nomeCidadeInput').val(item.nome);
                $('#codIbgeCidadeInput').val(item.codigo_ibge);
                $('#sendForm').text('Salvar');
            });
        };

        const deletarCidadeClick = () => {
            $(document).on('click', '#deleteRegister', function () {
                const url = $(this).data('url');

                $('#formDelete').attr('action', url);
                $('#deleteModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');
            });
        };
    </script>
@endsection
