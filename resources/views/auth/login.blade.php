<!DOCTYPE html>
<html lang="pt-br" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alquimia</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ global_asset('template/assets/images/logo_dark.png') }}">
    <!-- StarCode CSS -->
    <link rel="stylesheet" href="{{ global_asset('template/assets/css/starcode2.css') }}" />
</head>

<body class="font-public">

    <div class="relative flex flex-col w-full overflow-hidden xl:flex-row bg-white bg-gradient-to-r from-slate-600">
        
        <div class="absolute inset-0 opacity-20 bg-green-500 bg-pattern-2"></div>

        <div class="min-h-[calc(100vh_-_theme('spacing.4')_*_2)] mx-3 lg:w-[40rem] shrink-0 px-10 py-14 flex items-center justify-center m-4 bg-white rounded z-10 relative md:mx-auto xl:mx-4">
            <div class="flex flex-col w-full h-full">
                <div class="my-auto">

                    <div class="lg:w-[25rem] mx-auto">
                        <div class="flex items-center">
                            <div><img  src="{{ global_asset('template/assets/images/logo_completa_light.png') }}" alt="" width="350rem" height="300rem" ></div>
                        </div>

                        <div class="mt-5 tab-content">

                            <div class="block tab-pane" id="emailLogin">

                                <form action="#" class="mt-10" id="signInForm">
                                    <div class="hidden p-3 mb-3 text-base text-green-500 border border-green-200 rounded-md bg-green-50" id="successAlert">
                                         Logado com <b>sucesso</b>.
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="inline-block mb-2 text-base font-medium">Email</label>
                                        <input type="text" id="email" class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400" placeholder="Digite seu email" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="inline-block mb-2 text-base font-medium">Senha</label>
                                        <input type="password" id="password" class="form-input border-slate-200 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 disabled:border-slate-300 disabled:text-slate-500 placeholder:text-slate-400" placeholder="Digite sua senha" />
                                    </div>
                                    <div class="mt-10">
                                        <button type="submit" class="w-full text-green-500 bg-green-100 btn hover:text-white hover:bg-green-600 focus:text-white focus:bg-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:ring active:ring-green-100">
                                            Entrar
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div>

                        <div class="relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200">
                            <h5 class="inline-block px-4 py-0.5 text-sm bg-white text-slate-500 rounded relative"></h5>
                        </div>
                    </div>

                </div>

                <div class="mt-5">
                    <p class="mb-0 text-center text-15 text-slate-500">
                        <strong><span class="text-xl">©</span> 2024 Alquimia Company.</strong>
                    </p>
                </div>

            </div>
        </div>

        <!-- Carousel -->
        <div class="relative z-10 flex items-center justify-center justify-center min-h-screen px-10 grow py-10">
            <div class="grid grid-cols-1 gap-x-5 2xl:grid-cols-1 2xl:grid-cols-1">
                <div>
                    <div>
                        <div class="swiper pagination-progress shadow shadow-xl shadow-custom-black">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ global_asset('template/assets/images/example-1.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ global_asset('template/assets/images/example-2.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ global_asset('template/assets/images/example-3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next after:hidden text-custom-500"><i data-lucide="chevron-right"></i></div>
                            <div class="swiper-button-prev after:hidden text-custom-500"><i data-lucide="chevron-left"></i></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ global_asset('template/assets/libs/lucide/umd/lucide.js') }}"></script>
    <script src="{{ global_asset('template/assets/js/starcode.bundle.js') }}"></script>
    <script src="{{ global_asset('template/assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".pagination-progress", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>