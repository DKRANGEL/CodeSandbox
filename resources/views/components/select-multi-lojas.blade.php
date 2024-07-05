<div class="mb-4 mt-8" id="divLojaSelectMultiple">
    <div class="flex items-center justify-between">
        <label for="lojaSelectMultiple" class="inline-block mb-2 text-base font-medium">Lojas <span class="text-red-500">*</span></label>
        <div class="flex items-center">
            <label for="selectAll" class="ltr:mr-2 rtl:ml-2 inline-block text-base font-medium cursor-pointer">Selecionar Tudo</label>
            <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                <input type="checkbox" name="selectAll" id="selectAll" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-sky-500 dark:checked:border-sky-500 arrow-none">
                <label for="selectAll" class="selectAll block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-sky-500 peer-checked/published:border-sky-500"></label>
            </div>
        </div>
    </div>
    <select name="lojaSelectMultiple[]" id="lojaSelectMultiple" multiple="" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
        @foreach ($tenants as $tenant)
            <option value="{{ $tenant->id }}" {{ in_array($tenant->id, old('lojaSelectMultiple', [])) ? 'selected' : '' }}>{{ $tenant->fantasia }}</option>
        @endforeach
    </select>
    @error('lojaSelectMultiple')
        <div class="text-sm text-red-500">{{ $message }}</div>
    @enderror
</div>

<script>
    $(document).ready(function () {
        inicializarChoice();
        selectAllOptions();
    });

    let lojaSelect;
    
    const inicializarChoice = () => {
        if (lojaSelect) {
            lojaSelect.destroy();
        }

        lojaSelect = new Choices('#lojaSelectMultiple', {
            searchEnabled: true,
            searchFields: ['label'],
            searchPlaceholderValue: 'Selecione uma ou várias lojas',
            placeholder: true,
            itemSelectText: '',
            noResultsText: 'Nenhum resultado encontrado',
            noChoicesText: 'Não há opções para escolher',
            allowHTML: true,
            removeItemButton: true,
        });
    };

    const selectAllOptions = () => {
        $('#selectAll').on('change', function() {
            const selectAllChecked = this.checked;

            if (lojaSelect) {
                lojaSelect.destroy();
            }

            $('#lojaSelectMultiple option').prop('selected', selectAllChecked);
            $('#lojaSelectMultiple').change();

            inicializarChoice();
        });
    };
</script>
