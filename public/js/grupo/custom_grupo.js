$(document).ready(function () {
    $('#descontoGrupoSwitch').change(function() {
        const isChecked = $(this).is(':checked');
        $('#switchLabel1').text(isChecked ? 'Sim' : 'Não');

        if (isChecked) {
            $('#descontoGrupoInput').prop('disabled', false);
            $('#descontoMinusBtn').prop('disabled', false);
            $('#descontoPlusBtn').prop('disabled', false);
        } else {
            $('#descontoGrupoInput').prop('disabled', true);
            $('#descontoMinusBtn').prop('disabled', true);
            $('#descontoPlusBtn').prop('disabled', true);
            $('#descontoGrupoInput').val('');
        }
    });

    $('#descontoGrupoSwitch').change();

    $('#abastecerPrecoGrupoInput').change(function() {
        const isChecked = $(this).is(':checked');
        $('#switchLabel2').text(isChecked ? 'Sim' : 'Não');
    });
});