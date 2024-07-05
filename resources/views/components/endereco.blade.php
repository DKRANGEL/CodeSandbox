<div class="mt-8 grid grid-cols-1 gap-5 xl:grid-cols-12">
    <div class="mb-4 md:col-span-2">
        <label for="{{ $prefix ? $prefix.'_cepInput' : 'cepInput' }}" class="inline-block mb-2 text-base font-medium mascCEP">CEP <span class="text-red-500">*</span></label>
        <input type="text" id="{{ $prefix ? $prefix.'_cepInput' : 'cepInput' }}" name="{{ $prefix ? $prefix.'_cepInput' : 'cepInput' }}" onblur="pesquisarCEP(this.value, '{{ $prefix ?? null }}')" value="{{ $prefix ? ($cep ?? old('resp_cepInput')) : ($cep ?? old('cepInput')) }}" class="{{ $prefix ? $prefix.'_cepInput' : 'cepInput' }} form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
        @error('cepInput')
            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4 md:col-span-4">
        <label for="{{ $prefix ? $prefix.'_logradouroInput' : 'logradouroInput' }}" class="inline-block mb-2 text-base font-medium">Endereço <span class="text-red-500">*</span></label>
        <input type="text" id="{{ $prefix ? $prefix.'_logradouroInput' : 'logradouroInput' }}" name="{{ $prefix ? $prefix.'_logradouroInput' : 'logradouroInput' }}" value="{{ $prefix ? ($endereco ?? old('resp_logradouroInput')) : ($endereco ?? old('logradouroInput')) }}" class="{{ $prefix ? $prefix.'_logradouroInput' : 'logradouroInput' }} form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
        @error('logradouroInput')
            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4 md:col-span-4">
        <label for="{{ $prefix ? $prefix.'_bairroInput' : 'bairroInput' }}" class="inline-block mb-2 text-base font-medium">Bairro <span class="text-red-500">*</span></label>
        <input type="text" id="{{ $prefix ? $prefix.'_bairroInput' : 'bairroInput' }}" name="{{ $prefix ? $prefix.'_bairroInput' : 'bairroInput' }}" value="{{ $prefix ? ($bairro ?? old('resp_bairroInput')) : ($bairro ?? old('bairroInput')) }}" class="{{ $prefix ? $prefix.'_bairroInput' : 'bairroInput' }} form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
        @error('bairroInput')
            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4 md:col-span-2">
        <label for="{{ $prefix ? $prefix.'_cidadeInput' : 'cidadeInput' }}" class="inline-block mb-2 text-base font-medium">Cidade <span class="text-red-500">*</span></label>
        <input type="text" id="{{ $prefix ? $prefix.'_cidadeInput' : 'cidadeInput' }}" name="{{ $prefix ? $prefix.'_cidadeInput' : 'cidadeInput' }}" value="{{ $prefix ? ($cidade ?? old('resp_cidadeInput')) : ($cidade ?? old('cidadeInput')) }}" class="{{ $prefix ? $prefix.'_cidadeInput' : 'cidadeInput' }} form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
        @error('cidadeInput')
            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-12">
    <div class="mb-4 md:col-span-2">
        <label for="{{ $prefix ? $prefix.'_numeroInput' : 'numeroInput' }}" class="inline-block mb-2 text-base font-medium">Número <span class="text-red-500">*</span></label>
        <input type="text" id="{{ $prefix ? $prefix.'_numeroInput' : 'numeroInput' }}" name="{{ $prefix ? $prefix.'_numeroInput' : 'numeroInput' }}" value="{{ $prefix ? ($numero ?? old('resp_numeroInput')) : ($numero ?? old('numeroInput')) }}" class="{{ $prefix ? $prefix.'_numeroInput' : 'numeroInput' }} form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
        @error('numeroInput')
            <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-4 md:col-span-6">
        <label for="{{ $prefix ? $prefix.'_complementoInput' : 'complementoInput' }}" class="inline-block mb-2 text-base font-medium">Complemento</label>
        <input type="text" id="{{ $prefix ? $prefix.'_complementoInput' : 'complementoInput' }}" name="{{ $prefix ? $prefix.'_complementoInput' : 'complementoInput' }}" value="{{ $prefix ? ($complemento ?? old('resp_complementoInput')) : ($complemento ?? old('complementoInput')) }}" class="{{ $prefix ? $prefix.'_complementoInput' : 'complementoInput' }} form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
    </div>
    <div class="mb-4 md:col-span-4">
        <label for="{{ $prefix ? $prefix.'_estadoInput' : 'estadoInput' }}" class="inline-block mb-2 text-base font-medium">Estado</label>
        <select name="{{ $prefix ? $prefix.'_estadoInput' : 'estadoInput' }}" id="{{ $prefix ? $prefix.'_estadoInput' : 'estadoInput' }}" class="{{ $prefix ? $prefix.'_estadoInput' : 'estadoInput' }} form-select border-slate-200 dark:border-zink-500 focus outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark placeholder:text-zink-200">
            <option value="">Selecione</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->sigla }}"
                    {{ (($prefix ? old($prefix.'_estadoInput') : old('estadoInput')) == $estado->sigla) || (isset($sigla_estado) && $estado->sigla == $sigla_estado) ? 'selected' : '' }}>
                    {{ $estado->nome }}
                </option>
            @endforeach
        </select> 
    </div>
</div>

<script>
    function limparFormularioCEP(prefix = '') {
        $('#' + (prefix ? prefix + '_' : '') + 'logradouroInput').val("");
        $('#' + (prefix ? prefix + '_' : '') + 'bairroInput').val("");
        $('#' + (prefix ? prefix + '_' : '') + 'cidadeInput').val("");
        $('#' + (prefix ? prefix + '_' : '') + 'estadoInput').val("");
    }

    function meuCallback(conteudo, prefix = '') {
        if (!("erro" in conteudo)) {
            conteudo = converterParaMaiusculas(conteudo);
            $('#' + (prefix ? prefix + '_' : '') + 'logradouroInput').val(conteudo.logradouro);
            $('#' + (prefix ? prefix + '_' : '') + 'bairroInput').val(conteudo.bairro);
            $('#' + (prefix ? prefix + '_' : '') + 'cidadeInput').val(conteudo.localidade);
            $('#' + (prefix ? prefix + '_' : '') + 'estadoInput').val(conteudo.uf);

            prefix ? $("#resp_numeroInput").focus() : $("#numeroInput").focus();

        } else {
            limparFormularioCEP(prefix);
            alert("CEP não encontrado.");
        }
    }

    function pesquisarCEP(valor, prefix) {
        const cep = valor.replace(/\D/g, '');

        if (cep !== "") {
            const validacep = /^[0-9]{8}$/;

            if(validacep.test(cep)) {
                $('#' + (prefix ? prefix + '_' : '') + 'cepInput').val(cep.substring(0,5)+"-"+cep.substring(5));
                $('#' + (prefix ? prefix + '_' : '') + 'logradouroInput').val("...");
                $('#' + (prefix ? prefix + '_' : '') + 'bairroInput').val("...");
                $('#' + (prefix ? prefix + '_' : '') + 'cidadeInput').val("...");
                $('#' + (prefix ? prefix + '_' : '') + 'estadoInput').val("...");

                window['meu_callback_' + prefix] = (conteudo) => meuCallback(conteudo, prefix);

                const script = document.createElement('script');
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback_' + prefix;
                document.body.appendChild(script);
            } else {
                limparFormularioCEP(prefix);
                alert("Formato de CEP inválido.");
            }
        } else {
            limparFormularioCEP(prefix);
        }
    }

    function converterParaMaiusculas(conteudo) {
        const conteudoMaiusculo = {};
        for (const prop in conteudo) {
            if (Object.hasOwnProperty.call(conteudo, prop) && typeof conteudo[prop] === 'string') {
                conteudoMaiusculo[prop] = conteudo[prop].toUpperCase();
            }
        }
        return conteudoMaiusculo;
    }
</script>
