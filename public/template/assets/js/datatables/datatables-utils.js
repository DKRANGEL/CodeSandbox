const classeBotao = 'mb-5 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50';

const criarBotao = () => [
    { extend: 'csv', text: 'CSV', className: classeBotao, exportOptions: { columns: ':visible' } },
    { extend: 'excel', text: 'Excel', className: classeBotao, exportOptions: { columns: ':visible' } },
    { extend: 'pdf', text: 'PDF', className: classeBotao, exportOptions: { columns: ':visible' } },
    { extend: 'print', text: 'Imprimir', className: classeBotao, exportOptions: { columns: ':visible' } },
    {
        extend: 'colvis',
        text: 'Esconder Colunas',
        className: 'button-columns dropdown-toggle text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10',
        columnText: (dt, idx, title) => `<span>${title}</span><i class="ri-check-line ml-2 text-white bg-green-500 rounded-lg"></i>`
    }
];

const ocultarLinhasTabela = (e, settings, processing) => {
    const rows = $('.dataTable tbody tr');
    if (processing) {
        rows.attr('hidden', true);
        $('.dt-processing').show();
    } else {
        rows.removeAttr('hidden');
        $('.dt-processing').hide();
    }
};

const visibilidadeColuna = (dtInstance) => {
    tippy('.button-columns', {
        content: 'Use este botão para selecionar quais colunas deseja ocultar.'
    });

    $(document).on('click', '.dt-button-collection .dt-button', function () {
        $(this).find('i.ri-check-line').toggleClass('hidden');
    });
};

const exibicaoToolTip = () => {
    $('.tooltip').each(function () {
        const content = $(this).data('tooltip-content');
        tippy(this, { content });
    });
};
