$(document).ready(function () {
    setupMasks();
    setupAjaxCNPJ();
    setupSwitchLabels();
    setupTogglePassword();
});

const masks = {
    cnpj: '00.000.000/0000-00',
    telefone: '(00) 0000-0000',
    celular: '(00) 00000-0000',
    inscricaoMunicipal: '000000000000000',
    cep: '00000-000',
    numero: '00000',
    cpf: '000.000.000-00',
    respNumero: '00000',
    valorInstalacao: '#.##0,00'
};

const setupMasks = () => {
    $('#cnpjLojaInput').mask(masks.cnpj);
    $('#telefoneLojaInput').mask(masks.telefone);
    $('#celularLojaInput').mask(masks.celular);
    $('#inscricaoMunicipalInput').mask(masks.inscricaoMunicipal);
    $('#cepInput').mask(masks.cep);
    $('#numeroInput').mask(masks.numero);
    $('#cpfRespInput').mask(masks.cpf);
    $('#resp_numeroInput').mask(masks.respNumero);
    $('#valorInstalacaoRespInput').mask(masks.valorInstalacao, { reverse: true });
};

const setupAjaxCNPJ = () => {
    $('#cnpjLojaInput').on('blur', function() {
        const cnpj = $(this).val().replace(/[^0-9]/g, '');
    
        if (cnpj) {
            $.ajax({
                url: 'https://www.receitaws.com.br/v1/cnpj/' + cnpj,
                method: 'GET',
                dataType: 'jsonp',
                complete: function(xhr) {
                    const response = xhr.responseJSON;            
                    if (response.status == 'OK') {
                        $('#razaoSocialLojaInput').val(response.nome);
                        $('#fantasiaLojaInput').val(response.fantasia);
                    } else {
                        console.error(response.message);
                    }
                }
            });
        }
    });
};

const setupSwitchLabels = () => {
    configureSwitchChange('#statusLojaInput', '#switchLabel', 'Ativa', 'Inativa');
    configureSwitchChange('#lojaIntegradaSwitch', '#switchLabel1', 'Sim', 'Não');
    configureSwitchChange('#lojaMatrizSwitch', '#switchLabel4', 'Sim', 'Não');
    configureSwitchChange('#abastecerPrecoLojaInput', '#switchLabel2', 'Sim', 'Não');
    configureSwitchChange('#abastecerPrecoLojaInput2', '#switchLabel5', 'Sim', 'Não');
    configureSwitchChange('#producaoFarmaPopular', '#switchLabel3', 'Sim', 'Não');
};

const configureSwitchChange = (switchSelector, labelSelector, checkedText, uncheckedText) => {
    $(switchSelector).change(function() {
        const isChecked = $(this).is(':checked');
        console.log(`Switch ${switchSelector} changed: ${isChecked}`);
        $(labelSelector).text(isChecked ? checkedText : uncheckedText);
    });

    const isChecked = $(switchSelector).is(':checked');
    console.log(`Switch ${switchSelector} initial state: ${isChecked}`);
    $(labelSelector).text(isChecked ? checkedText : uncheckedText);
};

const setupTogglePassword = () => {
    $('.toggle-password').click(function() {
        const target = $($(this).data('target'));
        const inputType = target.attr('type');
        const newType = inputType === 'password' ? 'text' : 'password';
        target.attr('type', newType);
        $(this).find('i').toggleClass('ri-eye-fill ri-eye-off-fill');
    });
};
