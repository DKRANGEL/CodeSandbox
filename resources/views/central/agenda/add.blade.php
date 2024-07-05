@extends('layouts.base')

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow mt-5">
                <h5 class="text-2xl">Cadastro de Agenda</h5>
            </div>
        </div>

        @if ($errors->any())
            <div id="alert-global" class="flex flex-col gap-3">
                <div class="relative p-3 pr-12 text-sm text-yellow-500 border border-t-2 border-transparent rounded-md bg-yellow-50 border-t-yellow-300 dark:bg-yellow-400/20 dark:border-t-yellow-500/50">
                    <button data-drawer-close="alert-global" aria-label="Close" class="absolute top-0 bottom-5 right-0 p-3 text-yellow-500 transition hover:text-yellow-500 dark:text-yellow-400/50 dark:hover:text-yellow-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x h-5"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg></button>
                    <h6 class="mb-1"><i class="ri-error-warning-line ri-lg"></i> Ops! Parece que há alguns problemas. Por favor, verifique os seguintes campos.</h6>
                    <ul class="ml-2 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        
        <div class="card mt-5">
            <div class="card-body">
                <form action="{{ route(request()->getHost().'.agendas.cadastrar') }}" method="POST">
                    @csrf
                    <div class="mt-5 grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3">
                        <div class="mb-4">
                            <label for="nomeAgendaInput" class="inline-block mb-2 text-base font-medium">Nome <span class="text-red-500">*</span></label>
                            <input type="text" id="nomeAgendaInput" name="nomeAgendaInput" value="{{ old('nomeAgendaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" autofocus>
                            @error('nomeAgendaInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="apelidoAgendaInput" class="inline-block mb-2 text-base font-medium">Apelido <span class="text-red-500">*</span></label>
                            <input type="text" id="apelidoAgendaInput" name="apelidoAgendaInput" value="{{ old('apelidoAgendaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('apelidoAgendaInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="empresaAgendaInput" class="inline-block mb-2 text-base font-medium">Nome da Empresa</label>
                            <input type="text" id="empresaAgendaInput" name="empresaAgendaInput" value="{{ old('empresaAgendaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('empresaAgendaInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    {{-- Componente de Endereço --}}
                    @component('components.endereco', ['prefix' => null])
                    @endcomponent

                    <div class="mt-5 grid grid-cols-1 gap-5 xl:grid-cols-4">
                        <div class="mb-4">
                            <label for="emailAgendaInput" class="inline-block mb-2 text-base font-medium">Email</label>
                            <input type="email" id="emailAgendaInput" name="emailAgendaInput" value="{{ old('emailAgendaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('emailAgendaInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="telefoneAgendaInput" class="inline-block mb-2 text-base font-medium">Telefone</label>
                            <input type="text" id="telefoneAgendaInput" name="telefoneAgendaInput" value="{{ old('telefoneAgendaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('telefoneAgendaInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="celularAgendaInput" class="inline-block mb-2 text-base font-medium">Celular <span class="text-red-500">*</span></label>
                            <input type="text" id="celularAgendaInput" name="celularAgendaInput" value="{{ old('celularAgendaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('celularAgendaInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="dataNascAgendaInput" class="inline-block mb-2 text-base font-medium">Data de Nascimento</label>
                            <input type="date" id="dataNascAgendaInput" name="dataNascAgendaInput" value="{{ old('dataNascAgendaInput') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            @error('dataNascAgendaInput')
                                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="obsAgendaInput" class="inline-block mb-2 text-base font-medium">Observação</label>
                        <textarea name="obsAgendaInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="obsAgendaInput" rows="3">{{ old('obsAgendaInput') }}</textarea>
                    </div>
                    <div class="flex justify-end gap-2 mt-5">
                        <a href="#" id="toGoBack" type="button" class="text-red-500 btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Voltar</a>
                        <button type="submit" class="ml-2 text-white transition-all duration-200 ease-linear btn bg-green-500 border-green-500 hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ global_asset('js/global/jquery_mask.js') }}"></script>
    <script src="{{ global_asset('js/global/jquery_mask.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#telefoneAgendaInput').mask('(00) 0000-0000');
            $('#celularAgendaInput').mask('(00) 00000-0000');
            $('#cepInput').mask('00000-000');
            $('#numeroInput').mask('00000');
        });
    </script>
@endsection
