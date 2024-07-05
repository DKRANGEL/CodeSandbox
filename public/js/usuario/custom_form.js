$(document).ready(function () {
    $('#cpfUsuarioInput').mask('000.000.000-00');
    $('#telefoneUsuarioInput').mask('(00) 0000-0000');
    $('#celularUsuarioInput').mask('(00) 00000-0000');
    $('#cepInput').mask('00000-000');
    $('#numeroInput').mask('00000');
    $('#statusUsuarioInput').change(function() {
        const isChecked = $(this).is(':checked');
        $('#switchLabel').text(isChecked ? 'Ativo' : 'Inativo');
    });
    $('#comissaoUsuarioInput').change(function() {
        const isChecked = $(this).is(':checked');
        $('#switchLabel2').text(isChecked ? 'Sim' : 'Não');
    });

    $('.toggle-password').click(function() {
        const target = $($(this).data('target'));
        const inputType = target.attr('type');
        const newType = inputType === 'password' ? 'text' : 'password';
        target.attr('type', newType);
        $(this).find('i').toggleClass('ri-eye-fill ri-eye-off-fill');
    });

    $('.nav-tabs li a').click(function() {
        const tabToggle = $(this).data('tab-toggle');
        
        if (tabToggle) {
            if (tabToggle === 'permissoesAutorizacoes') {
                $('#acessoUsuarioTab').removeClass("hidden").addClass("block");
                $('#liAcessoUsuarioTab').addClass("active");
            } else {
                $('#acessoUsuarioTab').removeClass("block").addClass("hidden");
                $('#liAutorizacaoUsuarioTab').removeClass("active");
            }
        }
    });
});


let selectedIds = {};
let tabela;

// Função para renderizar o checkbox de ação com base nos dados
const renderAcaoCheckbox = (data, type, row) => {
    const randomNumber = Math.floor(Math.random() * 1000000) + 1;
    let name;
    let className;

    // Define o nome e a classe do checkbox com base nos dados
    switch (data) {
        case "1":
            name = `checkboxIdAcaoAcessar_${randomNumber}`;
            className = 'checkboxIdAcaoAcessar';
            break;
        case "2":
            name = `checkboxIdAcaoCadastrar_${randomNumber}`;
            className = 'checkboxIdAcaoCadastrar';
            break;
        case "3":
            name = `checkboxIdAcaoAlterar_${randomNumber}`;
            className = 'checkboxIdAcaoAlterar';
            break;
        case "4":
            name = `checkboxIdAcaoDeletar_${randomNumber}`;
            className = 'checkboxIdAcaoDeletar';
            break;
        default:
            name = `checkboxIdAcaoPadrao_${randomNumber}`;
            className = 'checkboxIdAcaoPadrao';
            break;
    }

    const id = data.toString() + "_" + randomNumber.toString();

    // Retorna o HTML do checkbox com os atributos dinâmicos
    return `
        <input type="checkbox" name="${name}" value="${data}" data-id="${id}" class="${className} checkboxAction border rounded-sm appearance-none cursor-pointer size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400">
    `;
};

// Função para configurar a tabela DataTables
const configTabela = () => {
    tabela = $('#tableAutorizacoes').DataTable({
        pagingType: 'simple_numbers_no_ellipses',
        processing: true,
        responsive: true,
        deferRender: true,
        lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
        pageLength: 5,
        language: { url: "../../template/assets/json/datatables_pt-BR.json" },
        columnDefs: [
            {
                targets: [2, 3, 4, 5], // Colunas nas quais aplicar a renderização do checkbox
                render: renderAcaoCheckbox, // Função de renderização dos checkboxes
                orderable: false, // Não permitir ordenação
                searchable: false // Não permitir busca
            }
        ],
        initComplete: function () {
            // Adiciona classe CSS e elemento HTML após o elemento wrapper da tabela
            $('#tableAutorizacoes_wrapper .self-center').addClass('flex justify-between items-center');
            $('#tableAutorizacoes_wrapper .dataTables_length').after(`
                <div class="flex items-center">
                    <label for="checkAllRows" class="ltr:mr-2 rtl:ml-2 inline-block text-base font-medium cursor-pointer">Selecionar Tudo</label>
                    <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                        <input type="checkbox" name="checkAllRows" id="checkAllRows" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-sky-500 dark:checked:border-sky-500 arrow-none">
                        <label for="checkAllRows" class="checkAllRows block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-sky-500 peer-checked/published:border-sky-500"></label>
                    </div>
                </div>
            `);

            // Evento de mudança no checkbox "Selecionar Tudo"
            $('#checkAllRows').on('change', function() {
                const isChecked = $(this).prop('checked');

                // Para cada linha da tabela, define o estado dos checkboxes conforme o "isChecked"
                tabela.rows().every(function () {
                    const row = this.node();
                    $('input[type="checkbox"]', row).prop('checked', isChecked);
                });

                // Atualiza os IDs selecionados e o input hidden
                selectedIds = isChecked ? collectAllIdsAndValues() : {};
                updateHiddenInput();
            });
        }
    });

    // Evento de mudança nos checkboxes individuais de seleção
    $('#tableAutorizacoes').on('change', '.checkAllCheckbox', function() {
        const id = $(this).data('id');
        const checkboxes = $(this).closest('tr').find('input[type="checkbox"]');

        // Define o estado dos checkboxes com base no estado do checkbox "checkAllCheckbox"
        checkboxes.prop('checked', $(this).prop('checked'));

        // Atualiza os IDs selecionados e o input hidden
        if ($(this).prop('checked')) {
            if (!selectedIds[id]) {
                selectedIds[id] = [];
            }
            checkboxes.each(function() {
                const value = $(this).val();
                if (value !== "on" && !selectedIds[id].includes(parseInt(value))) {
                    selectedIds[id].push(parseInt(value));
                }
            });
        } else {
            delete selectedIds[id];
        }

        updateCheckAllRows();
        updateHiddenInput();
    });

    // Evento de mudança nos checkboxes de ação
    $('#tableAutorizacoes').on('change', '.checkboxAction', function() {
        const value = parseInt($(this).val());
        const checkAllCheckbox = $(this).closest('tr').find('.checkAllCheckbox').data('id');
        const checkboxes = $(this).closest('tr').find('.checkboxAction');
        const isChecked = $(this).prop('checked');
        const allChecked = checkboxes.length === checkboxes.filter(':checked').length;

        // Atualiza os IDs selecionados com base no estado dos checkboxes de ação
        if (isChecked) {
            if (!selectedIds[checkAllCheckbox]) {
                selectedIds[checkAllCheckbox] = [];
            }
            selectedIds[checkAllCheckbox].push(value);
        } else {
            if (selectedIds[checkAllCheckbox]) {
                selectedIds[checkAllCheckbox] = selectedIds[checkAllCheckbox].filter(item => item !== value);
            }
        }

        // Define o estado do checkbox "checkAllCheckbox" com base nos checkboxes de ação
        $(this).closest('tr').find('.checkAllCheckbox').prop('checked', allChecked);

        updateCheckAllRows();
        updateHiddenInput();
    });
};

// Função para coletar todos os IDs e valores selecionados na tabela
const collectAllIdsAndValues = () => {
    const idsAndValues = {};
    tabela.rows().every(function () {
        const row = this.node();
        const dataId = $(row).find('.checkAllCheckbox').data('id');

        idsAndValues[dataId] = [];
        $(row).find('input[type="checkbox"]').each(function() {
            const value = $(this).val();
            if (value !== "on") {
                idsAndValues[dataId].push(parseInt(value));
            }
        });
    });
    return idsAndValues;
};

// Função para atualizar o valor do input hidden com os IDs selecionados
const updateHiddenInput = () => {
    const value = Object.keys(selectedIds).length ? JSON.stringify(selectedIds) : null;
    $('#selectedIdsHidden').val(value);
};

// Função para marcar os checkboxes com base nos IDs selecionados
const markCheckboxes = () => {
    const keys = Object.keys(selectedIds);
    const totalRows = tabela.rows().count();

    // Verifica se todos os checkboxes devem ser marcados
    if (totalRows === keys.length) {
        tabela.on('init.dt', function () {
            const checkAllRowsInTable = $(tabela.table().container().querySelector('#checkAllRows'));
            checkAllRowsInTable.prop('checked', true);
        });
    }

    // Marca os checkboxes de acordo com os IDs selecionados
    tabela.rows().every(function() {
        const row = this.node();
        const telaId = $(row).find('.checkAllCheckbox').data('id');

        if (selectedIds[telaId]) {
            $(row).find('input[type="checkbox"]').each(function() {
                const acaoId = parseInt($(this).val());
                if (selectedIds[telaId].includes(acaoId)) {
                    $(this).prop('checked', true);
                }
            });

            const checkboxes = $(row).find('.checkboxAction');
            const allChecked = checkboxes.length === checkboxes.filter(':checked').length;

            $(row).find('.checkAllCheckbox').prop('checked', allChecked);
        }
    });
    updateHiddenInput();
};

// Função para verificar e atualizar o estado do checkbox "checkAllRows"
const updateCheckAllRows = () => {
    let totalCheckboxes = 0;
    let totalChecked = 0;

    tabela.rows().every(function() {
        const row = this.node();
        const checkboxes = $(row).find('.checkAllCheckbox');
        totalCheckboxes += checkboxes.length;
        totalChecked += checkboxes.filter(':checked').length;
    });

    totalChecked === totalCheckboxes ? $('#checkAllRows').prop('checked', true) : $('#checkAllRows').prop('checked', false);
};
