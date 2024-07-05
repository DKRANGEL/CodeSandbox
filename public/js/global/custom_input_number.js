$('.minusBtn').on('click', function() {
    var input = $(this).siblings('input[type="number"]');
    // Obtém o valor atual e converte para número
    var currentValue = parseFloat(input.val() || 0);
    // Diminui 0.1 e atualiza o valor no input
    input.val((currentValue - 0.1).toFixed(2)); // Fixa 2 casas decimais
});

$('.plusBtn').on('click', function() {
    var input = $(this).siblings('input[type="number"]');
    // Obtém o valor atual e converte para número
    var currentValue = parseFloat(input.val() || 0);
    // Aumenta 0.1 e atualiza o valor no input
    input.val((currentValue + 0.1).toFixed(2)); // Fixa 2 casas decimais
});
