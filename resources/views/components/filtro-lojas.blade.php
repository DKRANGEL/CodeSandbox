<div class="filter-container card-body">
    <h4 class="mb-5"><i class="ri-filter-2-line"></i>Filtro de Lojas </h4>
    <div class="grid items-center grid-cols-1 gap-5 xl:grid-cols-12 mb-5">
        <div class="md:col-span-4">
            <select data-choices="" name="lojaSelect" id="lojaSelect" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                @foreach ($tenants as $tenant)
                <option value="{{ $tenant->id }}" {{ (old('idTenant') == $tenant->id || (session()->has('lojaSelect') && session('lojaSelect') == $tenant->id)) ? 'selected' : '' }}>
                    {{ $tenant->fantasia }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>