@extends('layouts.base')

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Listagem das Lojas"])
        @endcomponent
        <div class="card mt-5">
            <div class="card-body">
                <div class="flex items-center justify-between">
                    <div id="exportBtns"></div>
                    <div>
                        <a href="#" id="toGoBack" type="button" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <a href="{{ route(request()->getHost().'.lojas.adicionar') }}" type="button" class="ml-2 text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg> <span class="align-middle">Nova Loja</span></a>
                    </div>
                </div>
                <table id="tableLojas" style="width:100%" class="hover group" data-url="{{ route(request()->getHost().'.lojas.listar') }}">
                    <thead>
                        <tr>
                            <th>Matriz</th>
                            <th>Razão Social</th>
                            <th>CNPJ</th>
                            <th>Site</th>
                            <th>Nome Fantasia</th>
                            <th>Telefone</th>
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
            deletarLojaClick();
        });

        const renderActions = (data, type, row) => {
            const editarUrl = `{{ route(request()->getHost().'.lojas.editar', ['id' => ':id']) }}`.replace(':id', row.id);
            const deletarUrl = `{{ route(request()->getHost().'.lojas.deletar', ['id' => ':id']) }}`.replace(':id', row.id);
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

        const renderButtonSite = (data, type, row) => {
            const id = row.id;
            const centralDomain = '{{ getCentralDomain() }}';
            return `<a href="#" type="button" onclick="redirecionarDominioTenant('${centralDomain}','${id}'); return false;" class="text-green-500 bg-green-100 btn hover:text-white hover:bg-green-600 focus:text-white focus:bg-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:ring active:ring-green-100 dark:bg-green-500/20 dark:text-green-400 dark:hover:bg-green-500 dark:hover:text-white dark:focus:bg-green-500 dark:focus:text-white dark:active:bg-green-500 dark:active:text-white dark:ring-green-400/20">Visitar Site</a>`;
        };

        const renderMatrizStar = (data, type, row) => {
            return row.matriz === true ? 
                `<span class="flex items-center">
                    <i data-lucide="star" class="text-yellow-500 mb-1 h-4 w-4 mr-1"></i>${data}
                </span>` 
                : data;
        };

        const configTabela = () => {
            const rota = $('#tableLojas').data('url');
            const tabela = $('#tableLojas').DataTable({
                pagingType: 'simple_numbers_no_ellipses',
                processing: true,
                serverSide: true,
                responsive: true,
                deferRender: true,
                ajax: rota,
                lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
                pageLength: 5,
                language: { url: "{{ global_asset('template/assets/json/datatables_pt-BR.json') }}" },
                order: [[0, 'desc'], [1, 'asc']],
                columns: [
                    { data: 'matriz', name: 'matriz', visible: false },
                    { data: 'razao_social', name: 'razao_social', render: renderMatrizStar },
                    { data: 'id', name: 'id', render: function(data, type, row) {
                            const cnpj = data.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})$/, '$1.$2.$3/$4-$5');
                            return cnpj;
                        }
                    },
                    { data: null, name: 'site', orderable: false, searchable: false, render: renderButtonSite },
                    { data: 'fantasia', name: 'fantasia' },
                    { data: 'telefone', name: 'telefone' },
                    { data: null, name: 'actions', orderable: false, searchable: false, render: renderActions }
                ],
                buttons: criarBotao(),
                initComplete: function () {
                    const btns = tabela.buttons().container();
                    $('#exportBtns').append(btns);
                    visibilidadeColuna(this);
                },
                /* Função para exibição de tooltips */
                drawCallback: function() {
                    exibicaoToolTip();
                    lucide.createIcons();
                }
            });

            $('#tableLojas').on('processing.dt', ocultarLinhasTabela);
        };

        const deletarLojaClick = () => {
            $(document).on('click', '#deleteRegister', function () {
                const url = $(this).data('url');

                $('#deleteModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');
                $('#formDelete').attr('action', url);
            });
        };

        const redirecionarDominioTenant = (domainCentral, domainTenant) => {
            const url = domainTenant + "." + domainCentral;
            let route = '{{ tenant_route("placeholder", request()->getHost().'.home') }}';
            route = route.replace('placeholder', url);
            window.open(route, '_blank');
        }
    </script>
@endsection
