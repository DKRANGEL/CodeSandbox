@extends('layouts.base')

@section('content')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        
        @if (tenant())
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-2xl mt-5">Você está no domínio Tenant da empresa: {{ tenant()->razao_social }}</h5>
                    <p class="text-red-500 mt-5">A princípio somente está tela está com os padrões do Multi-Tenancy!</p>
                </div>
            </div>
        @else
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-2xl mt-5">Você está no domínio Central, com acesso somente para Administrador por exemplo Sérgio ou Rodrigo.</h5>
                </div>
            </div>
        @endif
    </div> 
@endsection
