@extends('layouts.base')

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Listagem dos Grupos"])
        @endcomponent
        <div class="card mt-5">
            <div class="card-body">
                <div class="flex items-center justify-between mb-5">
                    <div id="exportBtns"></div>
                    <div>
                        <a href="#" id="toGoBack" type="button" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <a href="{{ route(request()->getHost().'.grupos.adicionar') }}" type="button" class="ml-2 text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg> <span class="align-middle">Novo Grupo</span></a>
                    </div>
                </div>
                <table id="tableGrupos" style="width:100%" class="hover group" data-url="{{ route(request()->getHost().'.grupos.listar') }}">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Desconto</th>
                            <th>Abastecimento de Preço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @component('components.sweet-alert2')@endcomponent
    @component('components.modal-delete')@endcomponent
@endsection

@section('script')
    @component('components.datatables-scripts')@endcomponent
    <script>
        $(document).ready(function () {
            configTabela();
            deletarGrupoClick();
        });

        const renderActions = (data, type, row) => {
            const editarUrl = `{{ route(request()->getHost().'.grupos.editar', ['id' => ':id']) }}`.replace(':id', row.id);
            const deletarUrl = `{{ route(request()->getHost().'.grupos.deletar', ['id' => ':id']) }}`.replace(':id', row.id);

            return `
                <div class="flex gap-2">
                    <a href="${editarUrl}" data-tooltip="default" data-tooltip-content="Editar" type="button" class="tooltip px-2 py-1.5 text-xs text-white btn bg-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-yellow-400/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="pencil" class="lucide lucide-pencil size-4">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                        </svg>
                    </a>
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

        const renderDesconto = (data, type, row) => {
            return data ? data + '%' : `<span class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent status"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x size-3 mr-1.5"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg> NÃO HABILITADO</span>`;
        };

        const renderAbastecerPreco = (data, type, row) => {
            const spanActive = `<span class="px-2.5 py-0.5 text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent inline-flex items-center status"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="check-circle" class="lucide lucide-check-circle size-3 mr-1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><path d="m9 11 3 3L22 4"></path></svg> SIM</span>`;
            const spanInactive = `<span class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent status"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x size-3 mr-1.5"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg> NÃO</span>`;
            
            return data ? spanActive : spanInactive;
        };

        const configTabela = () => {
            const rota = $('#tableGrupos').data('url');
            const tabela = $('#tableGrupos').DataTable({
                pagingType: 'simple_numbers_no_ellipses',
                processing: true,
                serverSide: true,
                responsive: true,
                deferRender: true,
                ajax: rota,
                lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
                pageLength: 5,
                language: { 
                    url: "{{ global_asset('template/assets/json/datatables_pt-BR.json') }}",
                },
                columns: [
                    { data: 'codigo', name: 'codigo' },
                    { data: 'descricao', name: 'descricao' },
                    { data: 'desconto', name: 'desconto', render: renderDesconto },
                    { data: 'abastecer_preco', name: 'abastecer_preco', render: renderAbastecerPreco },
                    { data: null, name: 'actions', orderable: false, searchable: false, render: renderActions }
                ],
                buttons: criarBotao(),
                initComplete: function () {
                    const btns = tabela.buttons().container();
                    $('#exportBtns').append(btns);
                    visibilidadeColuna(this); 
                },
                /* Função para exibição de tooltips */
                drawCallback: exibicaoToolTip,
            });

            $('#tableGrupos').on('processing.dt', ocultarLinhasTabela);
        };

        const deletarGrupoClick = () => {
            $(document).on('click', '#deleteRegister', function () {
                const url = $(this).data('url');
                
                $('#deleteModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');
                $('#formDelete').attr('action', url);
            });
        };
    </script>
@endsection
