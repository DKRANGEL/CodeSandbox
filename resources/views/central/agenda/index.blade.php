@extends('layouts.base')

@section('css')
@endsection

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Listagem de Agenda"])
        @endcomponent

        <div class="card mt-5">
            <div class="card-body">
                <div class="flex items-center justify-between mb-5">
                    <div id="exportBtns"></div>
                    <div>
                        <a href="#" id="toGoBack" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <a href="{{ route(request()->getHost().'.agendas.adicionar') }}" class="text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus inline-block size-4">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <span class="align-middle">Nova Agenda</span>
                        </a>
                    </div>
                </div>
                <table id="tableAgenda" style="width:100%" class="hover group" data-url="{{ route(request()->getHost().'.agendas.listar') }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Apelido</th>
                            <th>Empresa</th>
                            <th>Telefone</th>
                            <th>Celular</th>
                            <th>Cidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    @component('components.sweet-alert2')@endcomponent
    @component('components.modal-delete')@endcomponent
@endsection

@section('script')
    <script src="{{ global_asset('template/assets/js/datatables/data-tables.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/data-tables.tailwindcss.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/datatables.buttons.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/jszip.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/simple_pagination.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/buttons.colvis.min.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/datatables/datatables-utils.js') }}"></script>
    <script>
        $(document).ready(function () {
            configTabela();
            deletarAgendaClick();
        });

        const renderDefault = (data) => data ?? "NÃO CADASTRADO";

        const configTabela = () => {
            const rota = $('#tableAgenda').data('url');
            const tabela = $('#tableAgenda').DataTable({
                pagingType: 'simple_numbers_no_ellipses',
                processing: true,
                serverSide: true,
                responsive: true,
                deferRender: true,
                ajax: rota,
                lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
                pageLength: 5,
                language: { url: "{{ global_asset('template/assets/json/datatables_pt-BR.json') }}" },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nome', name: 'nome' },
                    { data: 'apelido', name: 'apelido', render: renderDefault },
                    { data: 'empresa', name: 'empresa', render: renderDefault },
                    { data: 'telefone', name: 'telefone', render: renderDefault },
                    { data: 'celular', name: 'celular'},
                    {
                        data: 'cidade_nome', name: 'cidade_nome', render: (data, type, row) => data ? row.endereco.cidade.nome : "NÃO CADASTRADO"
                    },
                    {
                        data: null, name: 'actions', orderable: false, searchable: false,
                        render: (data, type, row) => {
                            const editarUrl = `{{ route(request()->getHost().'.agendas.editar', ['id' => ':id']) }}`.replace(':id', row.id);
                            const deletarUrl = `{{ route(request()->getHost().'.agendas.deletar', ['id' => ':id']) }}`.replace(':id', row.id);
                            return `
                                <div class="flex gap-2">
                                    <a href="${editarUrl}" data-tooltip="default" data-tooltip-content="Editar" class="tooltip px-2 py-1.5 text-xs text-white btn bg-yellow-500 border-yellow-500 hover:text-white hover:bg-yellow-600 hover:border-yellow-600 focus:text-white focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-100 active:text-white active:bg-yellow-600 active:border-yellow-600 active:ring active:ring-yellow-100 dark:ring-yellow-400/20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil size-4">
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

            $('#tableAgenda').on('processing.dt', ocultarLinhasTabela);
        };

        const deletarAgendaClick = () => {
            $(document).on('click', '#deleteRegister', function () {
                const url = $(this).data('url');

                $('#deleteModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');
                $('#formDelete').attr('action', url);
            });
        };
    </script>
@endsection
