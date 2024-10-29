<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resource/js/app.js')

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="build/css/tailwind.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap"
        rel="stylesheet" />

    <title>Form Member</title>


</head>

<body>
    <div class="drawer bg-slate-200">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex mx-4 flex-col ">
            <!-- NAVBAR FORM-->
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
                <div class="mx-2 flex-1 px-2">FORM PAGE</div>
                <div class="hidden flex-none lg:block">
                    <ul class="menu menu-horizontal">
                        <!-- Navbar menu content here -->
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
            <!-- NAVBAR FORM-->

            <!-- PAGE CONTENT START -->
            <div class="mt-10">
                <!-- HALAMAN FORM -->
                <div class=" mx-4">

                    <!-- TEXT PERSONAL MEMBER -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <h1 class="text-lg font-semibold dark:text-gray-800 ml-2">PERSONAL MEMBER</h1>
                        <div class="mb-2 flex justify-center md:justify-end ">
                            <input type="text" placeholder="No Card."
                                class=" text-stone-800 shadow border p-2 rounded w-full max-w-md md:w-56 mx-1 bg-sky-50 ">
                        </div>
                    </div>
                    <!-- TEXT PERSONAL MEMBER -->

                    <!-- FORM -->
                    <div class="container mx-auto p-1">
                        <div class=" dark:bg-sky-50 rounded-lg p-6 shadow-2xl">
                            <form class="w-full">

                                <!-- NAMA MEMBER, NO IDENTITAS, KEWARGANEGARAAN -->
                                <div class="flex flex-wrap -mx-3 mb-1">
                                    <!-- NAMA MEMBER -->
                                    <div class="w-full md:w-5/12 sm:w-1/2 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-first-name">
                                            Nama Member
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            id="grid-first-name" type="text" placeholder="">
                                    </div>
                                    <!-- NAMA MEMBER -->

                                    <!-- NO IDENTITAS -->
                                    <div class="w-full sm:w-1/2 md:w-1/6 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name">
                                            No Identitas
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-last-name" type="text" placeholder="">
                                    </div>
                                    <!-- NO IDENTITAS -->

                                    <!-- KEWARGANEGARAAN -->
                                    <div class="w-full sm:w-1/2 md:w-[150px] px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-state">
                                            Kewarganegaraan
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="block appearance-none w-full bg-gray-100 border border-slate-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer"
                                                id="grid-state">
                                                <option>WNI</option>
                                                <option>WNA</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- KEWARGANEGARAAN -->
                                </div>
                                <!-- NAMA MEMBER, NO IDENTITAS, KEWARGANEGARAAN -->


                                <!-- KELOMPOK, TIPE MEMBER-->
                                <div class="flex flex-wrap -mx-3 mb-1">
                                    <!-- KELOMPOK -->
                                    <div class="w-full sm:w-1/2 md:w-[130px] px-3 mb-4">
                                        <label class="block uppercase tracking-wide text-red-700 text-xs font-bold mb-2"
                                            for="grid-state">
                                            Kelompok
                                        </label>
                                        <div class="relative">
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 mb-1 leading-tight focus:outline-none focus:bg-gray-200 cursor-not-allowed"
                                                id="tempat-lahir" type="text" placeholder="END USER" value="END USER"
                                                readonly>
                                        </div>
                                    </div>
                                    <!-- KELOMPOK -->

                                    <!-- TIPE MEMBER-->
                                    <div class="w-full sm:w-1/2 md:w-[110px] px-3 mb-4">
                                        <label class="block uppercase tracking-wide text-red-700 text-xs font-bold mb-2"
                                            for="grid-state">
                                            Tipe Member
                                        </label>
                                        <div class="relative">
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 mb-1 leading-tight focus:outline-none focus:bg-gray-200 cursor-not-allowed"
                                                id="tempat-lahir" type="text" placeholder="PAS" value="PAS"
                                                readonly>
                                        </div>
                                    </div>
                                    <!-- TIPE MEMBER-->
                                </div>
                                <!-- KELOMPOK, TIPE MEMBER-->


                                <!-- TEMPAT, TANGGAL LAHIR-->
                                <div class="flex flex-wrap -mx-3 mb-2">
                                    <!-- TEMPAT LAHIR -->
                                    <div class="w-full sm:w-1/2 md:w-1/3 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="tempat-lahir">
                                            Tempat Lahir
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 mb-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="tempat-lahir" type="text" placeholder="Tempat Lahir">
                                    </div>
                                    <!-- TEMPAT LAHIR -->

                                    <!-- TANGGAL LAHIR -->
                                    <div class="w-full sm:w-1/2 md:w-1/4 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="tanggal-lahir">
                                            Tanggal Lahir
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="tanggal-lahir" type="date" placeholder="Tanggal Lahir">
                                    </div>
                                    <!-- TANGGAL LAHIR -->
                                </div>
                                <!-- TEMPAT, TANGGAL LAHIR-->


                                <!-- AGAMA, JENIS KELAMIN-->
                                <div class="flex flex-wrap -mx-3 mb-2">
                                    <!-- AGAMA-->
                                    <div class="w-full sm:w-1/2 md:w-1/6 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="agama">
                                            Agama
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="block appearance-none w-full bg-gray-100 border border-slate-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer"
                                                id="agama">
                                                <option>ISLAM</option>
                                                <option>KATHOLIK</option>
                                                <option>KRISTEN</option>
                                                <option>HINDU</option>
                                                <option>BUDHA</option>
                                                <option>KONGHUCU</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- AGAMA-->

                                    <!-- JENIS KELAMIN -->
                                    <div class="w-full sm:w-1/2 md:w-1/6 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="jenis-kelamin">
                                            Jenis Kelamin
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="block appearance-none w-full bg-gray-100 border border-slate-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer"
                                                id="jenis-kelamin">
                                                <option>LAKI-LAKI</option>
                                                <option>PEREMPUAN</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- JENIS KELAMIN -->
                                </div>
                                <!-- AGAMA, JENIS KELAMIN-->


                                <!-- ALAMAT, KOTA, KECAMATAN, KELURAHAN, RT, RW, KODEPOS, NO HP, NO TELEPON-->
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <!-- ALAMAT -->
                                    <div class="w-full px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="alamat">
                                            Alamat
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="alamat" type="text" placeholder="">
                                    </div>
                                    <!-- ALAMAT -->

                                    <!-- KOTA -->
                                    <div class="w-full md:w-1/3 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="kota">
                                            Kota
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="kota" type="text" placeholder="">
                                    </div>
                                    <!-- KOTA -->

                                    <!-- KECAMATAN -->
                                    <div class="w-full md:w-1/3 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="kecamatan">
                                            Kecamatan
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="kecamatan" type="text" placeholder="">
                                    </div>
                                    <!-- KECAMATAN -->

                                    <!-- KELURAHAN -->
                                    <div class="w-full md:w-1/3 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="kelurahan">
                                            Kelurahan
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="kelurahan" type="text" placeholder="">
                                    </div>
                                    <!-- KELURAHAN -->

                                    <!-- RT -->
                                    <div class="w-full md:w-1/6 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="rt">
                                            RT
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="rt" type="text" placeholder="">
                                    </div>
                                    <!-- RT -->

                                    <!-- RW -->
                                    <div class="w-full md:w-1/6 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="rw">
                                            RW
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="rw" type="text" placeholder="">
                                    </div>
                                    <!-- RW -->

                                    <!-- KODE POS -->
                                    <div class="w-full md:w-1/6 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="kode-pos">
                                            Kode Pos
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="kode-pos" type="text" placeholder="">
                                    </div>
                                    <!-- KODE POS -->

                                    <!-- NO HP -->
                                    <div class="w-full md:w-1/3 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="no-hp">
                                            No HP
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="no-hp" type="text" placeholder="">
                                    </div>
                                    <!-- NO HP -->

                                    <!-- NO TELEPON -->
                                    <div class="w-full md:w-1/3 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="no-telepon">
                                            No Telepon
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="no-telepon" type="text" placeholder="">
                                    </div>
                                    <!-- NO TELEPON -->
                                </div>
                                <!-- ALAMAT, KOTA, KECAMATAN, KELURAHAN, RT, RW, KODEPOS, NO HP, NO TELEPON-->


                                <!-- STATUS, JUMLAH TANGGUNGAN-->
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <!-- STATUS-->
                                    <div class="w-full md:w-1/3 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-state">
                                            Status
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="block appearance-none w-full bg-gray-100 border border-slate-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer"
                                                id="grid-state">
                                                <option>MENIKAH</option>
                                                <option>BELUM MENIKAH</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- STATUS-->

                                    <!-- JUMLAH TANGGUNGAN-->
                                    <div class="w-full md:w-1/4 px-3 mb-4">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="jumlah-tanggungan">
                                            Jumlah Tanggungan
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="jumlah-tanggungan" type="number" name="jumlah_tanggungan"
                                            value="{{ old('jumlah_tanggungan') }}" min="0" step="1">
                                    </div>
                                    <!-- JUMLAH TANGGUNGAN-->
                                </div>
                                <!-- STATUS, JUMLAH TANGGUNGAN-->


                                <!-- PENDAPATAN BULANAN-->
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full md:w-2/5 px-3 mb-4 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-state">
                                            Pendapatan/Bulan
                                        </label>
                                        <div class="relative">
                                            <select
                                                class="block appearance-none w-full bg-gray-100 border border-slate-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 cursor-pointer"
                                                id="grid-state">
                                                <option>0-Rp. 1.000.000,00</option>
                                                <option>Rp. 1.000.000,00 - Rp. 2.000.000,00</option>
                                                <option>Rp. 2.000.000,00 - Rp. 3.000.000,00</option>
                                                <option>Rp. 3.000.000,00 - Rp. 4.000.000,00</option>
                                                <option>Rp. 4.000.000,00 - Rp. 5.000.000,00</option>
                                                <option>Rp. Di atas Rp. 5.000.000</option>
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- PENDAPATAN BULANAN-->


                                <!-- PENGUSAHA KENA PAJAK-->
                                <div class="flex items-center mb-4">
                                    <label class="flex items-center text-gray-700 text-xs font-bold">
                                        PENGUSAHA KENA PAJAK
                                        <input class="mx-2 leading-tight" type="checkbox">
                                        <span class="text-sm">Ya</span>
                                    </label>
                                </div>
                                <!-- PENGUSAHA KENA PAJAK-->


                                <!-- NPWP-->
                                <div class="flex flex-wrap -mx-3 mb-4">
                                    <div class="w-full md:w-1/3 px-3 mb-4 md:mb-0">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-npwp">
                                            NPWP
                                        </label>
                                        <input
                                            class="appearance-none block w-full bg-gray-100 text-gray-700 border border-slate-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-npwp" type="text" placeholder="">
                                    </div>
                                </div>
                                <!-- NPWP -->

                            </form>

                            <!-- BUTTON SIMPAN -->
                            <div class="flex justify-center items-center w-full border-b border-teal-500 py-4">
                                <button
                                    class=" bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-lg border-4 text-white py-2 px-12 rounded font-semibold"
                                    type="button">
                                    Simpan
                                </button>
                            </div>
                            <!-- BUTTON SIMPAN -->
                        </div>
                    </div>
                    <!-- FORM -->
                </div>
                <!-- HALAMAN FORM -->
            </div>
        </div>
        <!-- PAGE CONTENT END -->

        <!-- SIDEBAR MENU -->
        <div class="drawer-side z-50">
            <label for="my-drawer-3" aria-label="close sidebar"
                class="drawer-overlay !bg-white/0 !opacity-100"></label>
            <div class="bg-gray-100/0  h-screen p-2">
                <ul
                    class="menu drop-shadow-lg outline outline-2  outline-gray-800/10 backdrop-blur-sm bg-white/30 rounded-3xl gap-2 min-h-full w-80 p-4">
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
        <!-- SIDEBAR MENU -->

    </div>
</body>

</html>

<!-- JAVASCRIPT -->
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
