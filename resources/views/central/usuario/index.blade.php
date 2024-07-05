@extends('layouts.base')

@section('css')
    <style>
        .swal2-popup.swal2-toast .swal2-actions {
            justify-content: center;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        @component('components.titulo-pagina', ['nome' => "Listagem dos Usuários"])
        @endcomponent
        <div class="card mt-5">
            <div class="card-body">
                <div class="flex items-center justify-between mb-5">
                    <div id="exportBtns"></div>
                    <div>
                        <a href="#" id="toGoBack" type="button" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <a href="{{ route(request()->getHost().'.usuarios.adicionar') }}" type="button" class="ml-2 text-white btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg> <span class="align-middle">Novo Usuário</span></a>
                    </div>
                </div>
                <table id="tableUsuarios" style="width:100%" class="hover group" data-url="{{ route(request()->getHost().'.usuarios.listar') }}">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Cargo</th>
                            <th>Permissão</th>
                            <th>Endereço</th>
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
            modalFullEndereco();
            deletarTranspClick();
        });

        const renderBotaoEndereco = (data, type, row) => {
            return data
                ?
                    `
                        <button type="button" data-dados="${encodeURIComponent(JSON.stringify(row))}" class="buttonFullEndereco items-center justify-center transition-all duration-200 ease-linear p-0 text-green-500 bg-green-100 btn hover:text-white hover:bg-green-600 focus:text-white focus:bg-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:ring active:ring-green-100 dark:bg-green-500/20 dark:text-green-400 dark:hover:bg-green-500 dark:hover:text-white dark:focus:bg-green-500 dark:focus:text-white dark:active:bg-green-500 dark:active:text-white dark:ring-green-400/20">
                            <span class="align-middle p-3">Ver Endereço</span>
                        </button>
                    `
                :
                    '<span class="px-2.5 py-0.5 inline-flex items-center text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent status">NÃO CADASTRADO</span>';
        };

        const renderActions = (data, type, row) => {
            const editarUrl = `{{ route(request()->getHost().'.usuarios.editar', ['id' => ':id']) }}`.replace(':id', row.id);
            const deletarUrl = `{{ route(request()->getHost().'.usuarios.deletar', ['id' => ':id']) }}`.replace(':id', row.id);
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

        const configTabela = () => {
            const rota = $('#tableUsuarios').data('url');
            const tabela = $('#tableUsuarios').DataTable({
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
                    { data: 'cargo', name: 'cargo' },
                    { data: 'permissao', name: 'permissao' },
                    { data: 'endereco', name: 'endereco', render: renderBotaoEndereco },
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

            $('#tableUsuarios').on('processing.dt', ocultarLinhasTabela);
        };

        const modalFullEndereco = () => {
            $(document).on('click', '.buttonFullEndereco', function () {
                
                const dados = JSON.parse(decodeURIComponent($(this).data('dados')));
                const template = `
                    <swal-html>
                        <div class="text-center"><strong>Endereço do Usuário: ${dados.nome}</strong></div>
                        <div class="text-start mt-5">
                            <ul class="mt-5 space-y-5 list-disc list-inside rounded-md">
                                <li><strong>Cep</strong>: ${dados.endereco.cep}</li>
                                <li><strong>Endereço</strong>: ${dados.endereco.logradouro}</li>
                                <li><strong>Bairro</strong>: ${dados.endereco.bairro}</li>
                                <li><strong>Cidade</strong>: ${dados.endereco.cidade.nome}</li>
                                <li><strong>Estado</strong>: ${dados.endereco.cidade.estado.nome}</li>
                                <li><strong>Complemento</strong>: ${dados.complemento}</li>
                                <li><strong>Número</strong>: ${dados.end_num}</li>
                            </ul>
                        </div>
                    </swal-html>
                `;
                Swal.fire({
                    toast: true,
                    position: 'center',
                    width: 500,
                    showConfirmButton: true,
                    html: template
                });
            });
        };

        const deletarTranspClick = () => {
            $(document).on('click', '#deleteRegister', function () {
                const url = $(this).data('url');

                $('#deleteModal').removeClass('hidden show');
                $('#backDropDiv').removeClass('hidden');
                $('#obs').removeClass('hidden');
                $('#formDelete').attr('action', url);
            });
        };
    </script>
@endsection
