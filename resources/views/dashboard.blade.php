<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resource/js/app.js')

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="build/css/tailwind.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.css" />

    <title>Dashboard</title>

</head>

<body>
    {{-- BODY --}}
    <div class="drawer bg-slate-200">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />

        {{-- HALAMAN DASHBOARD --}}
        <div class="drawer-content flex mx-4 flex-col ">

            <!-- NAVBAR -->
            <div
                class="navbar top-4 rounded-xl outline outline-2  outline-gray-800/10 backdrop-blur-sm bg-white/50 sticky z-50 w-full">
                <div class="flex-none">
                    <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block h-6 w-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="mx-2 flex-1 px-2">DASHBOARD</div>
                <div class="hidden flex-none lg:block">
                    <ul class="menu menu-horizontal">

                        <!-- ISIAN NAVBAR -->
                        <li><a>
                                <div class="flex items-center -m-2 gap-2 p-1.5"><img
                                        src="{{ asset('images/surya.jpg') }}" alt="Laurent Perrier"
                                        class="inline-block relative object-cover object-center w-9 h-9 rounded-md">
                                    <div>
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-semibold">
                                            Surya Adi</p>
                                        <p class="block antialiased font-sans text-xs font-normal text-blue-gray-500">
                                            suryaadi.datago@gmail.com</p>
                                    </div>
                                </div>
                            </a></li>
                        <li class="sm:block md:block"><a><img class="w-8 h-8"
                                    src="https://img.icons8.com/ios-filled/50/737373/gears.png" alt="gears" /></a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- NAVBAR --}}

            <!-- WELCOMING CARD -->
            <div class="flex flex-col md:flex-row justify-center items-center md:justify-start">
                <div data-aos="zoom-in"
                    class="mt-10 group relative bg-gradient-to-br from-orange-800 via-gray-900 to-black h-auto md:h-56 w-[90%] md:w-[70%] mx-4 border border-gray-700 text-left p-6 rounded-lg shadow-xl overflow-hidden transition-all duration-300 ease-in-out 
        hover:border-green-400 hover:shadow-green-500/40">
                    <!-- Cahaya bergerak -->
                    <div class="absolute inset-0 z-0 overflow-hidden">
                        <!-- Bola Cahaya Kecil -->
                        <div
                            class="absolute w-16 h-16 bg-violet-500 rounded-full blur-xl opacity-60 top-4 left-4 animate-ping">
                        </div>

                        <!-- Bola Cahaya Utama yang Berkeliaran -->
                        <div
                            class="absolute w-28 h-28 bg-rose-300 rounded-full blur-2xl opacity-60 animate-wander-global">
                        </div>

                        <!-- Bola Cahaya Kanan yang Bergerak -->
                        <div
                            class="absolute w-20 h-20 bg-rose-300 rounded-full blur-lg opacity-40 animate-wander-right">
                        </div>
                    </div>
                    <!-- Cahaya bergerak -->
                    <!--Card -->
                    <div class="relative z-10">
                        <!-- Ucapan -->
                        <h1
                            class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-3 mt-3 ml-4">
                            {{ $greeting }}, {{ ucwords($user->name) }}!
                        </h1>

                        <!-- Jam dan Tanggal -->
                        <p
                            class="text-base sm:text-lg md:text-xl font-semibold text-gray-700 dark:text-amber-300 mb-3 ml-4">
                            {{ $currentDateTime }}
                        </p>

                        <!-- Pesan tambahan -->
                        <p class="text-sm sm:text-lg font-medium text-gray-600 dark:text-gray-300 ml-4">
                            Semoga harimu penuh kebahagiaan dan produktifitas!
                        </p>

                    </div>
                    <!--Card -->
                </div>
                <!-- Kontainer untuk card tambahan -->
                <div data-aos="fade-up" class="h-auto md:h-56 w-[90%] md:w-[30%] mt-4 md:mt-10 mx-4 md:mx-4 bg-fill">
                    <!-- Tambahkan card tambahan di sini -->
                    <div class="bg-white border border-gray-300 rounded-lg overflow-hidden shadow-lg h-full">
                        <img src="images/card.png" alt="card" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <style>
                @keyframes wander-global {
                    0% {
                        transform: translate(0, 0);
                    }

                    20% {
                        transform: translate(80px, -50px);
                    }

                    40% {
                        transform: translate(-100px, 40px);
                    }

                    60% {
                        transform: translate(60px, 100px);
                    }

                    80% {
                        transform: translate(-50px, -30px);
                    }

                    100% {
                        transform: translate(0, 0);
                    }
                }

                @keyframes wander-right {
                    0% {
                        transform: translate(0, 0);
                    }

                    25% {
                        transform: translate(30px, -40px);
                    }

                    50% {
                        transform: translate(-30px, 40px);
                    }

                    75% {
                        transform: translate(60px, 20px);
                    }

                    100% {
                        transform: translate(0, 0);
                    }
                }

                @keyframes spin-slow {
                    0% {
                        transform: rotate(0deg);
                    }

                    100% {
                        transform: rotate(360deg);
                    }
                }

                .animate-wander-global {
                    animation: wander-global 8s ease-in-out infinite;
                    position: absolute;
                    top: 0;
                    left: 0;
                }

                .animate-wander-right {
                    animation: wander-right 8s ease-in-out infinite;
                    position: absolute;
                    right: 6px;
                    top: 3px;
                }

                .animate-spin-slow {
                    animation: spin-slow 10s linear infinite;
                }
            </style>
            <!-- CSS WELCOMING CARD -->

            <div class="mt-4 flex flex-col gap-6">
                <!-- STATISTIC CARD -->
                <div class="h-full ">
                    <section class="bg-cover bg-center bg-no-repeat rounded-xl"
                        style="background-image: url('{{ asset('') }}');">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 p-4 gap-4">

                            <div
                                class="dark:bg-gray-100 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 dark:border-gray-200 text-white font-medium group">
                                <div
                                    class="flex justify-center items-center w-14 h-14 bg-gray-800 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="stroke-current dark:text-gray-200 transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-right">
                                    <p class="text-2xl text-gray-800">$75,257</p>
                                    <p class="text-gray-800">Total Belanja</p>
                                    <span
                                        class="inline-block px-2 py-px ml-2 text-xs text-green-700 bg-green-100 rounded-md">
                                        +4.4%
                                    </span>
                                </div>
                            </div>

                            <div
                                class="dark:bg-gray-100 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 dark:border-gray-200 text-white font-medium group">
                                <div
                                    class="flex justify-center items-center w-14 h-14 bg-gray-800 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="stroke-current dark:text-gray-200 transform transition-transform duration-500 ease-in-out">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div class="text-right">
                                    <p class="text-2xl text-gray-800">145</p>
                                    <p class="text-gray-800">Total Point</p>
                                    <span
                                        class="inline-block px-2 py-px ml-2 text-xs text-green-700 bg-green-100 rounded-md">
                                        +3.1%
                                    </span>
                                </div>
                            </div>
                    </section>

                </div>
                <!-- STATISTIC CARD -->

                <!-- RIWAYAT TRANSAKSI-->
                <div data-aos="fade-up" class=" mx-4">
                    <!-- Sticky Header for RIWAYAT TRANSAKSI -->
                    <div data-aos="fade-up" class="w-full dark:bg-gray-100 z-10 rounded-lg mb-2 shadow-lg">
                        <h3 class="font-bold text-base  dark:text-gray-800 py-3 text-center sticky top-0 w-full">
                            RIWAYAT TRANSAKSI
                        </h3>
                    </div>

                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <!-- Scrollable container for the table -->
                        <div class="w-full overflow-x-auto">
                            <table class="w-full min-w-[700px]">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left uppercase border-b dark:border-gray-700 dark:bg-gray-100 shadow-lg">
                                        <th class="px-4 py-3 text-gray-800">No. Transaksi</th>
                                        <th class="px-4 py-3 text-gray-800">Waktu/Tanggal</th>
                                        <th class="px-4 py-3 text-gray-800">Total Harga</th>
                                        <th class="px-4 py-3 text-gray-800">Point</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-100">
                                    <tr
                                        class=" dark:bg-gray-100 dark:hover:bg-gray-200 text-gray-700 dark:text-gray-800">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">172410100018</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">07:55:00 <br>15-01-2021</br></td>
                                        <td class="px-4 py-3 text-sm">Rp. 99.000,00</td>
                                        <td class="px-4 py-3 text-sm">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight rounded-md dark:bg-green-700 dark:text-green-100">9</span>
                                        </td>
                                    </tr>
                                    <tr
                                        class="dark:bg-gray-100 dark:hover:bg-gray-200 text-gray-700 dark:text-gray-800">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">172410100018</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">07:55:00 <br>15-01-2021</br></td>
                                        <td class="px-4 py-3 text-sm">Rp. 199.000,00</td>
                                        <td class="px-4 py-3 text-sm">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight rounded-md dark:bg-green-700 dark:text-green-100">
                                                19 </span>
                                        </td>

                                    </tr>
                                    <tr
                                        class="dark:bg-gray-100 dark:hover:bg-gray-200 text-gray-700 dark:text-gray-800">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">172410100018</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">07:55:00 <br>15-01-2021</br></td>
                                        <td class="px-4 py-3 text-sm">Rp. 299.000,00</td>
                                        <td class="px-4 py-3 text-sm">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight  rounded-md dark:bg-green-700 dark:text-green-100">
                                                29 </span>
                                        </td>
                                    </tr>
                                    <tr
                                        class="dark:bg-gray-100 dark:hover:bg-gray-200 text-gray-700 dark:text-gray-800">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">172410100018</p>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">07:55:00 <br>15-01-2021</br></td>
                                        <td class="px-4 py-3 text-sm">Rp. 399.000,00</td>
                                        <td class="px-4 py-3 text-sm">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight rounded-md dark:bg-green-700 dark:text-green-100">
                                                39</span>
                                        </td>
                                    </tr>
                                    <tr
                                        class="dark:bg-gray-100 dark:hover:bg-gray-200 text-gray-700 dark:text-gray-800">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">172410100018</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">07:55:00 <br>15-01-2021</br></td>
                                        <td class="px-4 py-3 text-sm">Rp. 499.000,00</td>
                                        <td class="px-4 py-3 text-sm">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight rounded-md dark:bg-green-700 dark:text-green-100">
                                                49 </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div
                            class="grid px-4 py-3 text-xs font-semibold tracking-wide uppercase border-t dark:border-gray-800  sm:grid-cols-9 dark:text-gray-800 dark:bg-gray-100">
                            <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                            <span class="col-span-2"></span>



                            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                <nav aria-label="Table navigation">
                                    <ul class="inline-flex items-center">
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Previous">
                                                <svg aria-hidden="true" class="w-4 h-4 fill-current"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 dark:text-gray-100 transition-colors duration-150  dark:bg-gray-800 border border-r-0  dark:border-gray-800 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                                        </li>
                                        <li>
                                            <span class="px-3 py-1">...</span>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Next">
                                                <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </nav>
                            </span>
                        </div>
                        <!-- Pagination -->

                    </div>
                </div>
                <!-- RIWAYAT TRANSAKSI-->

                <!-- SOCIAL TRAFFIC DAN AKTIFITAS TERKINI -->
                <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
                    <div data-aos="fade-up"
                        class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words  dark:bg-gray-800 w-full shadow-2xl rounded-xl">
                        <div class="rounded-t mb-0 px-0 border-0">
                            <div class="flex flex-wrap items-center px-4 py-2">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">SOCIAL TRAFFIC
                                    </h3>
                                </div>
                                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                    <button
                                        class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button">lihat semua</button>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Website</th>
                                            <th
                                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Pengunjung</th>
                                            <th
                                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Facebook</th>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                5,480</td>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">70%</span>
                                                    <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                            <div style="width: 70%"
                                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Blibli</th>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                3,380</td>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">40%</span>
                                                    <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                            <div style="width: 40%"
                                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Instagram</th>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                4,105</td>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">45%</span>
                                                    <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                                                            <div style="width: 45%"
                                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Shopee</th>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                4,985</td>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">60%</span>
                                                    <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                            <div style="width: 60%"
                                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700 dark:text-gray-100">
                                            <th
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                Tokopedia</th>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                2,250</td>
                                            <td
                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                <div class="flex items-center">
                                                    <span class="mr-2">30%</span>
                                                    <div class="relative w-full">
                                                        <div
                                                            class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                            <div style="width: 30%"
                                                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-700">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ./Social Traffic -->

                    <!-- Recent Activities -->
                    <div data-aos="fade-up"
                        class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-2xl rounded-xl">
                        <div class="rounded-t mb-0 px-0 border-0">
                            <div class="flex flex-wrap items-center px-4 py-2">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">AKTIVITAS
                                        TERKINI</h3>
                                </div>
                                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                    <button
                                        class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                        type="button">lihat semua</button>
                                </div>
                            </div>
                            <div class="block w-full">
                                <div
                                    class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Hari Ini
                                </div>
                                <ul class="my-1">
                                    <li class="flex px-4">
                                        <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
                                                <path
                                                    d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div
                                            class="flex-grow flex items-center border-b border-gray-100 dark:border-gray-400 text-sm text-gray-600 dark:text-gray-100 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                    <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                        href="#0" style="outline: none;">Anda</a>
                                                    Baru saja mendapatkan <a
                                                        class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                        href="#0" style="outline: none;">poin belanja sebesar 30!
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                        href="#0" style="outline: none;">
                                                        Lihat<span><svg width="20" height="20"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                class="transform transition-transform duration-500 ease-in-out">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex px-4">
                                        <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36">
                                                <path
                                                    d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div
                                            class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                    Cek <a
                                                        class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                        href="#0" style="outline: none;">Promo dan Diskon</a>
                                                    di <a
                                                        class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                        href="#0" style="outline: none;">Shopee Assalaam
                                                        Hypermarket sekarang
                                                        juga!</a>
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                        href="https://shopee.co.id/assalaamhypermarketofficial?v=0ca&smtt=0.0.3"
                                                        style="outline: none;">
                                                        Lihat<span><svg width="20" height="20"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                class="transform transition-transform duration-500 ease-in-out">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div
                                    class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    kemarin
                                </div>
                                <ul class="my-1">
                                    <li class="flex px-4">
                                        <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36">
                                                <path
                                                    d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div
                                            class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                    <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100"
                                                        href="#0" style="outline: none;">40+</a> Kunjungi
                                                    Tokopedia Assalaam Hypermarket <a
                                                        class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100"
                                                        href="#0" style="outline: none;">harga sudah pasti
                                                        terjangkau</a>
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500"
                                                        href="#0" style="outline: none;">
                                                        Lihat<span><svg width="20" height="20"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                class="transform transition-transform duration-500 ease-in-out">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ./Recent Activities -->
                </div>
                <!-- SOCIAL TRAFFIC DAN AKTIFITAS TERKINI -->

                <!-- CONTACT FORM -->
                <div data-aos="fade-up" class="mx-4 mb-10 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                        <div class="p-6  dark:bg-gray-100 sm:rounded-lg shadow-2xl">
                            <h1 class="text-3xl sm:text-2xl  dark:text-gray-800 font-extrabold tracking-tight">
                                Kontak Kami</h1>
                            <p class=" text-lg sm:text-md font-medium  dark:text-gray-600 mt-2">
                                Hubungi</p>

                            <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    class="w-5 h-5 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-96">Jl. Ahmad Yani 308,
                                    Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah 57169</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    class="w-5 h-5 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">0271 - 743333</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    class="w-5 h-5 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-36">
                                    assalaam.hypermarket@gmail.com</div>
                            </div>
                        </div>
                        <form class="p-6 flex flex-col justify-center bg-gray-100 rounded-lg shadow-xl">
                            <div class="flex flex-col">
                                <label for="name" class="hidden">Nama Lengkap</label>
                                <input type="name" name="name" id="name" placeholder="Nama Lengkap"
                                    class="w-100 mt-2 py-3 px-3 rounded-lg  dark:bg-gray-200 border  dark:border-gray-700  dark:text-gray-800 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="email" class="hidden">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    class="w-100 mt-2 py-3 px-3 rounded-lg  dark:bg-gray-200 border  dark:border-gray-700  dark:text-gray-800 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="tel" class="hidden">Number</label>
                                <input type="tel" name="tel" id="tel" placeholder="Nomor Telepon"
                                    class="w-100 mt-2 py-3 px-3 rounded-lg  dark:bg-gray-200 border  dark:border-gray-700  dark:text-gray-800 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <button type="submit"
                                class="md:w-full bg-blue-600 dark:bg-green-700 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-800 hover:text-white transition ease-in-out duration-300">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- CONTACT FORM -->
            </div>
        </div>
        {{-- HALAMAN DASHBOARD --}}

        {{-- MENU SIDEBAR --}}
        <div class="drawer-side z-50">
            <label for="my-drawer-3" aria-label="close sidebar"
                class="drawer-overlay !bg-white/0 !opacity-100"></label>
            <div class="bg-gray-100/0  h-screen p-2">
                <ul
                    class="menu drop-shadow-lg outline outline-2  outline-gray-800/10  bg-white rounded-3xl gap-2 min-h-full w-80 p-4">
                    <!-- Sidebar content here -->
                    <header class="flex flex-col items-center">
                        <div class="">
                            <img class="w-36" src="{{ asset('images/logoTeks.png') }}">
                        </div>
                        <hr class="w-full mt-2 border-gray-600" />
                    </header>
                    <li
                        class="group transition-colors duration-300 rounded-md hover:bg-gradient-to-tr from-[#026631] to-[#22AA62]">
                        <a href="dashboard">
                            <img class="w-8 h-8"
                                src="https://img.icons8.com/external-creatype-glyph-colourcreatype/64/FAB005/external-dashboard-basic-creatype-glyph-colourcreatype.png"
                                alt="external-dashboard-basic-creatype-glyph-colourcreatype" />
                            <p class="font-semibold group-hover:text-white">Dashboard</p>
                        </a>
                    </li>
                    <li
                        class="group transition-colors duration-300 rounded-md hover:bg-gradient-to-tr from-[#026631] to-[#22AA62]">
                        <a href="formpage">
                            <img class="w-8 h-8"
                                src="https://img.icons8.com/ios-glyphs/50/FAB005/terms-and-conditions.png"
                                alt="terms-and-conditions" />
                            <p class="font-semibold group-hover:text-white"> Form </p>
                        </a>
                    </li>
                    <li
                        class="group transition-colors duration-300 rounded-md hover:bg-gradient-to-tr from-[#026631] to-[#22AA62]">
                        <a href="#">
                            <img class="w-8 h-8"
                                src="https://img.icons8.com/ios-filled/50/FAB005/table-properties.png"
                                alt="table-properties" />
                            <p class="font-semibold group-hover:text-white">Table</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- MENU SIDEBAR --}}

    </div>
    {{-- BODY --}}
</body>

</html>

<!--JAVASCRIPT -->
<script>
    // Animasi sederhana untuk elemen dengan ID 'animateMe'
    gsap.from("#animateMe", {
        duration: 1,
        opacity: 0,
        y: -50
    });
</script>
<script>
    AOS.init();
</script>
<!--JAVASCRIPT -->
