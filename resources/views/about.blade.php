<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: Poppins, sans-serif;
        }
    </style>
    <title>Tentang Assalaam Hypermarket</title>
</head>

<body class="max-w-[1920px] max-h-[1080px] mx-auto">
    <div class="bg-gray-200 text-gray-100 text-[15px]">
        {{-- NAVIGASI BAR --}}
        <header class='sticky top-0 bg-white shadow-md py-4 px-4 sm:px-10 z-50 min-h-[70px]'>
            <div class='lg:flex lg:items-center gap-x-2 relative'>
                <div class="flex items-center shrink-0">
                    <a href="/"><img src="{{ asset('images/logoTeks.png') }}" alt="logo" class='w-40' />
                    </a>
                    <button id="toggleOpen" class='lg:hidden ml-auto'>
                        <svg class="w-7 h-7" fill="#FFA500" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div id="collapseMenu"
                    class="lg:ml-14 max-lg:hidden lg:!block w-full max-lg:fixed max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50 z-50">
                    <button id="toggleClose"
                        class='lg:hidden fixed top-6 right-3 z-[100] rounded-full bg-orange-400 p-3'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-white" viewBox="0 0 320.591 320.591">
                            <path
                                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                                data-original="#000000"></path>
                            <path
                                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                                data-original="#000000"></path>
                        </svg>
                    </button>

                    <div
                        class='lg:flex items-center w-full gap-6 max-lg:fixed max-lg:bg-gray-200 max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                        <ul class='lg:flex gap-x-6 max-lg:space-y-3'>
                            <li class='mb-6 hidden max-lg:block'>
                                <a href="/"><img src="{{ asset('images/logoTeks.png') }}" alt="logo"
                                        class='w-40' />
                                </a>
                            </li>
                            <li class='max-lg:border-b max-lg:py-3 px-3'>
                                <a href="/"
                                    class='text-slate-950 hover:text-amber-600 block transition-all font-medium text-sm'>Beranda</a>
                            </li>
                            <li class='max-lg:border-b max-lg:py-3 px-3'>
                                <a href="about"
                                    class='text-slate-950 hover:text-amber-600 block transition-all font-medium text-sm'>Tentang
                                    Kami</a>
                            </li>
                            <li class='max-lg:border-b max-lg:py-3 px-3'>
                                <a href="membership"
                                    class='text-slate-950 hover:text-amber-600 block transition-all font-medium text-sm'>Membership</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        {{-- NAVIGASI BAR --}}

        <section class="min-h-screen bg-contain bg-center bg-repeat"
            style="background-image: url('{{ asset('images/blue.jpg') }}');">

            {{-- HALAMAN TENTANG KAMI --}}
            <div id="about" class="px-4 sm:px-10">
                <div class="max-w-7xl mx-auto">
                    <div class="mb-0 max-w-2xl text-center mx-auto">
                        <h2 class="text-lg text-green-800 font-semibold flex-1 text text-center pt-12">T E N T A N G K A
                            M I
                        </h2>
                    </div>
                    <div>
                        <div
                            class="w-fit-center px-3 py-4 mt-10 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out mx-7">
                            <div class="text-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-12 mb-6 inline-block bg-gray-700 p-3 rounded-xl"
                                    viewBox="0 0 682.667 682.667">
                                    <defs>
                                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                            <path d="M0 512h512V0H0Z" data-original="#000000" />
                                        </clipPath>
                                    </defs>
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="40"
                                        clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                        <!-- Book Shape -->
                                        <path
                                            d="M256 492 60 410.623v-98.925C60 183.674 137.469 68.38 256 20c118.53 48.38 196 163.674 196 291.698v98.925z"
                                            data-original="#000000" />
                                        <!-- Clock Hands -->
                                        <path d="M178 271.894 233.894 216 334 316.105" data-original="#000000" />
                                    </g>
                                </svg>
                            </div>
                            <h2 class="text-sm  font-bold text-slate-950 text-center">S E J A R A H</h2>
                            <p class="text-slate-950 text-center mx-5 mt-2">
                                Assalaam Hypermarket merupakan salah satu unit bisnis usaha PT. Tiga Serangkai Group
                                yang
                                bergerak di bidang retail, mulai beroperasi pada tanggal 15 November 2001, di lokasi
                                yang
                                sangat strategis yakni perlintasan Solo – Yogyakarta – Semarang, tepatnya di Jalan Ahmad
                                Yani No. 308 Pabelan, Kartasura, Sukoharjo. Awal berdiri Assalaam Hypermarket merupakan
                                perusahaan retail franchise Goro Batara Sakti dengan nama Goro Assalaam. Tahun 2007
                                setelah
                                franchise berakhir berubah nama menjadi ASSALAAM HYPERMARKET. Assalaam Hypermarket
                                adalah
                                retail muslim terbesar di area Solo Raya dan sekitarnya dengan luas area kurang lebih
                                sekitar 69.797 m² dan luas bangunan toko 11.673 m² .

                                Untuk memenuhi kebutuhaan masyarakat, saat ini Assalaam Hypermarket telah bekerjasama
                                dengan
                                lebih dari 250 supplier baik lokal maupun nasional dan 200 tenant yang berada di area
                                Assalaam Hypermarket.

                                Selain memenuhi kebutuhan masyarakat dengan layanan prima serta produk lengkap dan
                                halal,
                                Assalaam Hypermarket juga memiliki fasilitas lengkap diantaranya:</p>

                            <p class="text-slate-950 text-center mt-2"> > Masjid Besar Ibaadurrahmaan </p>
                            <p class="text-slate-950 text-center"> > Parkir luas dan nyaman </p>
                            <p class="text-slate-950 text-center"> > Arena bermain anak </p>
                            <p class="text-slate-950 text-center"> > Arena berkuda luar ruangan </p>
                            <p class="text-slate-950 text-center"> > Food Court (area toko & luar area toko)
                            </p>
                            <p class="text-slate-950 text-center"> > Shelter jajanan </p>
                            <p class="text-slate-950 text-center"> > ATM </p>

                        </div>
                        <div
                            class="w-fit-center px-3 py-4 mt-10 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out mx-7">
                            <div class="text-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-12 mb-6 inline-block bg-gray-700 p-3 rounded-xl"
                                    viewBox="0 0 682.667 682.667">
                                    <defs>
                                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                            <path d="M0 512h512V0H0Z" data-original="#000000" />
                                        </clipPath>
                                    </defs>
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="40"
                                        clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                        <!-- Circular Path for Mission -->
                                        <circle cx="256" cy="256" r="200" stroke="currentColor" />
                                        <!-- Arrow representing forward direction -->
                                        <path d="M256 60 L256 256 L376 176" />
                                    </g>
                                </svg>

                                <h2 class="text-sm  font-bold text-slate-950 text-center">M I S I</h2>
                                <p class="text-slate-950 text-center mx-3">> Memberikan kepuasan kepada masyarakat
                                    dengan
                                    layanan yang amanah serta produk yang berkualitas.</p>
                                <p class="text-slate-950 text-center mb-4 mx-3">> Menjadi partner yang strategis
                                    dan
                                    membawa
                                    kemanfaatan bagi para pelanggan, pemasok, karyawan, dan seluruh stakeholder yang
                                    terlibat.
                                </p>
                            </div>
                        </div>
                        <div
                            class="w-fit-center px-3 py-4 mt-10 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out mx-7">
                            <div class="text-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-12 mb-6 inline-block bg-gray-700 p-3 rounded-xl"
                                    viewBox="0 0 682.667 682.667">
                                    <defs>
                                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                            <path d="M0 512h512V0H0Z" data-original="#000000" />
                                        </clipPath>
                                    </defs>
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" stroke-width="40"
                                        clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                        <!-- Eye Shape for Vision -->
                                        <ellipse cx="256" cy="256" rx="180" ry="100" />
                                        <!-- Pupil inside the eye -->
                                        <circle cx="256" cy="256" r="60" />
                                    </g>
                                </svg>

                                <h2 class="text-sm  font-bold text-slate-950 text-center">V I S I</h2>
                                <p class="text-slate-950 text-center mx-3">Menjadi perusahaan retail/distribusi
                                    consumer goods terbaik
                                    untuk
                                    memenuhi kebutuhan masyarakat luas yang dikelola secara islami dan profesional.</p>
                            </div>
                        </div>

                        <div
                            class="w-fit-center px-3 py-4 mt-10 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out mx-7">
                            <div class="text-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-12 mb-6 inline-block bg-gray-700 p-3 rounded-xl"
                                    viewBox="0 0 512.001 512.001">
                                    <path
                                        d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z"
                                        data-original="#000000" />
                                </svg>

                                <h2 class="text-sm  font-bold text-slate-950 text-center">N I L A I - N I L A I</h2>
                                <p class="text-slate-950 text-center mx-3">> Integritas > Kejujuran</p>
                                <p class="text-slate-950 text-center mx-3">> Kerjasama Tim > Keberkahan</p>
                            </div>
                        </div>
                        <div
                            class="w-fit-center px-3 py-4 mt-10 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out mx-7">
                            <div class="text-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-12 mb-6 inline-block bg-gray-700 p-3 rounded-xl" viewBox="0 0 64 64"
                                    width="64" height="50">
                                    <!-- Outer Circle -->
                                    <circle cx="32" cy="32" r="30" fill="none"
                                        stroke="currentColor" stroke-width="3">
                                    </circle>

                                    <!-- Phone Icon -->
                                    <path
                                        d="M22 20 L26 24 Q23 27 27 31 L31 27 Q35 31 32 34 L36 38 Q34 40 28 35 L22 30 Q17 25 22 20 Z"
                                        fill="currentColor" />

                                    <!-- Mail Icon -->
                                    <rect x="32" y="36" width="24" height="16" rx="2" ry="2"
                                        fill="none" stroke="currentColor" stroke-width="2" />
                                    <path d="M32 36 L44 46 L56 36" stroke="currentColor" stroke-width="2"
                                        fill="none" />
                                </svg>
                            </div>
                            <h2 class="text-sm  font-bold text-slate-950 text-center">K O N T A K </h2>
                            <p class="text-slate-950 text-center">> Email : assalaam.hypermarket@gmail.com</p>
                            <p class="text-slate-950 text-center">> WA Customer Care : 0812 2604 8447</p>
                            <p class="text-slate-950 text-center">> Call Center : 0271-743333</p>

                        </div>
                        <div
                            class="w-fit-center px-3 py-4 mt-10 bg-white rounded-xl shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out mx-7">
                            <div class="text-center mt-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-12 mb-6 inline-block bg-gray-700 p-3 rounded-xl" viewBox="0 0 64 64"
                                    width="64" height="50">
                                    <!-- Outer Circle -->
                                    <circle cx="32" cy="32" r="30" fill="none"
                                        stroke="currentColor" stroke-width="3">
                                    </circle>

                                    <!-- Network Connections (Lines) -->
                                    <line x1="32" y1="32" x2="20" y2="20"
                                        stroke="currentColor" stroke-width="2" />
                                    <line x1="32" y1="32" x2="44" y2="20"
                                        stroke="currentColor" stroke-width="2" />
                                    <line x1="32" y1="32" x2="32" y2="44"
                                        stroke="currentColor" stroke-width="2" />

                                    <!-- User Icons -->
                                    <!-- Top Left Icon -->
                                    <circle cx="20" cy="20" r="4" fill="currentColor" />
                                    <circle cx="20" cy="20" r="6" fill="none" stroke="currentColor"
                                        stroke-width="2" />

                                    <!-- Top Right Icon -->
                                    <circle cx="44" cy="20" r="4" fill="currentColor" />
                                    <circle cx="44" cy="20" r="6" fill="none" stroke="currentColor"
                                        stroke-width="2" />

                                    <!-- Bottom Center Icon -->
                                    <circle cx="32" cy="44" r="4" fill="currentColor" />
                                    <circle cx="32" cy="44" r="6" fill="none" stroke="currentColor"
                                        stroke-width="2" />
                                </svg>
                            </div>
                            <h2 class="text-sm  font-bold text-slate-950 text-center">S O S I A L M E D I A</h2>
                            <p class="text-slate-950 text-center">> Whatsapp > Instagram</p>
                            <p class="text-slate-950 text-center">> Tokopedia > Shopee</p>
                            <p class="text-slate-950 text-center">> Facebook > Grab</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- HALAMAN TENTANG KAMI --}}

            {{-- FOOTER --}}
            <footer class="bg-[#131414] font-sans tracking-wide mt-12">
                <div class="py-14 px-6 sm:px-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">

                        <div class="lg:col-span-2">
                            <a href="/"><img src="{{ asset('images/logoTeks.png') }}" alt="logo"
                                    class='w-44 mb-8' /></a>
                            <p class="text-gray-300 text-sm">Belanja Aman, Belanja Halal, Belanja Nyaman</p>
                            <p class="text-gray-300 text-sm">hanya dari rumah.</p>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-8 text-white">Navigasi</h4>
                            <ul class="space-y-4">
                                <li><a href="/" class="text-gray-300 hover:text-amber-300 text-sm">Beranda</a>
                                </li>
                                <li><a href="about" class="text-gray-300 hover:text-amber-300 text-sm">Tentang
                                        Kami</a>
                                </li>
                                <li><a href="membership"
                                        class="text-gray-300 hover:text-amber-300 text-sm">Membership</a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold mb-8 text-white">Sosial Media</h4>

                            <ul class="flex gap-4">

                                <li>
                                    <a
                                        href="https://api.whatsapp.com/send/?phone=6285702143972&text&type=phone_number&app_absent=0">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                                            height="25" viewBox="0 0 48 48">
                                            <path fill="#fff"
                                                d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                                            </path>
                                            <path fill="#fff"
                                                d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                                            </path>
                                            <path fill="#cfd8dc"
                                                d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                                            </path>
                                            <path fill="#40c351"
                                                d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                                            </path>
                                            <path fill="#fff" fill-rule="evenodd"
                                                d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/AssalaamHypermarket">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                                            height="25" viewBox="0 0 48 48">
                                            <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1"
                                                x1="9.993" x2="40.615" y1="9.993" y2="40.615"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#2aa4f4"></stop>
                                                <stop offset="1" stop-color="#007ad9"></stop>
                                            </linearGradient>
                                            <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                                                d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">
                                            </path>
                                            <path fill="#fff"
                                                d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/assalaamhypermarket/"
                                        class="text-gray-300 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                                            height="25" viewBox="0 0 48 48">
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1"
                                                cx="19.38" cy="42.035" r="44.899"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#fd5"></stop>
                                                <stop offset=".328" stop-color="#ff543f"></stop>
                                                <stop offset=".348" stop-color="#fc5245"></stop>
                                                <stop offset=".504" stop-color="#e64771"></stop>
                                                <stop offset=".643" stop-color="#d53e91"></stop>
                                                <stop offset=".761" stop-color="#cc39a4"></stop>
                                                <stop offset=".841" stop-color="#c837ab"></stop>
                                            </radialGradient>
                                            <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2"
                                                cx="11.786" cy="5.54" r="29.813"
                                                gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#4168c9"></stop>
                                                <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                                            </radialGradient>
                                            <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)"
                                                d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z">
                                            </path>
                                            <path fill="#fff"
                                                d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z">
                                            </path>
                                            <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                                            <path fill="#fff"
                                                d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.tokopedia.com/assalaamhypermarket?_branch_match_id=1351942385925470724&utm_source=sellerchannel&utm_campaign=Shop-0-11976487-0&utm_medium=share&_branch_referrer=H4sIAAAAAAAAAwXBSwqAMAwFwBvZvSCuPIdE%2BmxL%2BuMlIG48uzPZfdoagg8dE7HIUkvXIGZSRVp%2BJ9iECt8%2F4gZZejovjsfA7YgJP1sJ8n5CAAAA"
                                        class="text-gray-300 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                                            height="25" viewBox="0 0 64 64">
                                            <linearGradient id="BByzyhRg08SueoHenzjo7a_QxTCUohbBw9U_gr1"
                                                x1="32.135" x2="32.135" y1="1.445" y2="51.043"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6dc7ff"></stop>
                                                <stop offset=".492" stop-color="#aab9ff"></stop>
                                                <stop offset="1" stop-color="#e6abff"></stop>
                                            </linearGradient>
                                            <path fill="url(#BByzyhRg08SueoHenzjo7a_QxTCUohbBw9U_gr1)"
                                                d="M54,13.6v24.51c0,8.79-7.12,15.91-15.9,15.91H10.27V13.6h12.59c2.93,0,6.62,1.99,9.28,4.64 c2.65-2.65,6.34-4.64,9.27-4.64H54z">
                                            </path>
                                            <circle cx="22.859" cy="30.163" r="9.276" fill="#fff"></circle>
                                            <circle cx="41.411" cy="30.163" r="9.276" fill="#fff"></circle>
                                            <path fill="#fff"
                                                d="M44,48.473c0,0.799-0.109,2.78-0.298,3.527H20.568c-0.189-0.746-0.298-2.728-0.298-3.527 C20.27,42.688,25.583,38,32.14,38C38.687,38,44,42.688,44,48.473z">
                                            </path>
                                            <linearGradient id="BByzyhRg08SueoHenzjo7b_QxTCUohbBw9U_gr2"
                                                x1="23.522" x2="23.522" y1="-3.418" y2="63.822"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1a6dff"></stop>
                                                <stop offset="1" stop-color="#c822ff"></stop>
                                            </linearGradient>
                                            <circle cx="23.522" cy="30.825" r="4.638"
                                                fill="url(#BByzyhRg08SueoHenzjo7b_QxTCUohbBw9U_gr2)"></circle>
                                            <circle cx="21.203" cy="27.181" r="2.982" fill="#fff"></circle>
                                            <path fill="#fff"
                                                d="M41.41,14.6c-2.53,0-5.97,1.74-8.57,4.34c-0.19,0.2-0.45,0.3-0.7,0.3c-0.26,0-0.52-0.1-0.71-0.3 c-2.6-2.6-6.04-4.34-8.57-4.34H11.27v38.42H38.1c8.21,0,14.9-6.69,14.9-14.91V14.6H41.41z M51,38.11 c0,7.12-5.79,12.91-12.9,12.91H13.27V16.6h9.59c1.69,0,4.69,1.29,7.15,3.76c0.57,0.56,1.32,0.88,2.13,0.88 c0.8,0,1.55-0.32,2.12-0.88c2.46-2.47,5.46-3.76,7.15-3.76H51V38.11z">
                                            </path>
                                            <linearGradient id="BByzyhRg08SueoHenzjo7c_QxTCUohbBw9U_gr3"
                                                x1="32.135" x2="32.135" y1="-3.418" y2="63.822"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1a6dff"></stop>
                                                <stop offset="1" stop-color="#c822ff"></stop>
                                            </linearGradient>
                                            <path fill="url(#BByzyhRg08SueoHenzjo7c_QxTCUohbBw9U_gr3)"
                                                d="M41.067,20.23 c-3.929,0-7.322,2.299-8.932,5.617c-1.61-3.318-5.003-5.617-8.933-5.617c-5.477,0-9.932,4.455-9.932,9.932s4.456,9.933,9.932,9.933 c3.929,0,7.323-2.299,8.933-5.618c1.61,3.318,5.003,5.618,8.932,5.618c5.477,0,9.933-4.456,9.933-9.933S46.544,20.23,41.067,20.23z M23.203,38.095c-4.374,0-7.932-3.559-7.932-7.933c0-4.373,3.558-7.932,7.932-7.932s7.933,3.559,7.933,7.932 C31.135,34.536,27.577,38.095,23.203,38.095z M41.067,38.095c-4.374,0-7.932-3.559-7.932-7.933c0-4.373,3.558-7.932,7.932-7.932 S49,25.789,49,30.162C49,34.536,45.441,38.095,41.067,38.095z">
                                            </path>
                                            <linearGradient id="BByzyhRg08SueoHenzjo7d_QxTCUohbBw9U_gr4"
                                                x1="40.749" x2="40.749" y1="-3.418" y2="63.822"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1a6dff"></stop>
                                                <stop offset="1" stop-color="#c822ff"></stop>
                                            </linearGradient>
                                            <circle cx="40.749" cy="30.825" r="4.638"
                                                fill="url(#BByzyhRg08SueoHenzjo7d_QxTCUohbBw9U_gr4)"></circle>
                                            <circle cx="38.43" cy="27.181" r="2.982" fill="#fff"></circle>
                                            <linearGradient id="BByzyhRg08SueoHenzjo7e_QxTCUohbBw9U_gr5"
                                                x1="31.85" x2="31.85" y1="37.11" y2="43.98"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#6dc7ff"></stop>
                                                <stop offset=".492" stop-color="#aab9ff"></stop>
                                                <stop offset="1" stop-color="#e6abff"></stop>
                                            </linearGradient>
                                            <path fill="url(#BByzyhRg08SueoHenzjo7e_QxTCUohbBw9U_gr5)"
                                                d="M36.57,39.3l-4.43,4.44l-0.24,0.24 l-4.77-4.77c1.14-1.29,2.82-2.1,4.67-2.1c0.12,0,0.22,0.02,0.34,0.02C33.91,37.22,35.48,38.04,36.57,39.3z">
                                            </path>
                                            <linearGradient id="BByzyhRg08SueoHenzjo7f_QxTCUohbBw9U_gr6"
                                                x1="31.846" x2="31.846" y1="-4.535" y2="62.706"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1a6dff"></stop>
                                                <stop offset="1" stop-color="#c822ff"></stop>
                                            </linearGradient>
                                            <path fill="url(#BByzyhRg08SueoHenzjo7f_QxTCUohbBw9U_gr6)"
                                                d="M31.9,45.278l-6.142-6.143l0.623-0.704 c1.369-1.549,3.344-2.438,5.419-2.438c0.091,0,0.175,0.006,0.258,0.014l0.133,0.007c1.997,0.102,3.82,0.994,5.135,2.515 l0.608,0.703L31.9,45.278z M28.562,39.112l3.337,3.337l3.25-3.258c-0.865-0.709-1.924-1.121-3.061-1.179 c-0.035,0.004-0.123-0.005-0.208-0.013c-0.007,0-0.015,0-0.021,0C30.619,38,29.474,38.398,28.562,39.112z">
                                            </path>
                                            <linearGradient id="BByzyhRg08SueoHenzjo7g_QxTCUohbBw9U_gr7"
                                                x1="32.135" x2="32.135" y1="-3.418" y2="63.822"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="0" stop-color="#1a6dff"></stop>
                                                <stop offset="1" stop-color="#c822ff"></stop>
                                            </linearGradient>
                                            <path fill="url(#BByzyhRg08SueoHenzjo7g_QxTCUohbBw9U_gr7)"
                                                d="M54,12.6H42.264 c-0.798-4.877-5.03-8.616-10.129-8.616S22.804,7.723,22.006,12.6H10.27c-0.55,0-1,0.45-1,1v40.42c0,0.55,0.45,1,1,1H38.1 c9.32,0,16.9-7.59,16.9-16.91V13.6C55,13.05,54.55,12.6,54,12.6z M32.135,5.984c4.025,0,7.384,2.89,8.122,6.703 c-2.603,0.367-5.616,1.906-8.117,4.172c-2.51-2.266-5.523-3.805-8.126-4.172C24.751,8.875,28.11,5.984,32.135,5.984z M53,38.11 c0,8.22-6.69,14.91-14.9,14.91H11.27V14.6h11.59c2.53,0,5.97,1.74,8.57,4.34c0.19,0.2,0.45,0.3,0.71,0.3c0.25,0,0.51-0.1,0.7-0.3 c2.6-2.6,6.04-4.34,8.57-4.34H53V38.11z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://shopee.co.id/assalaamhypermarketofficial?v=0ca&smtt=0.0.3"
                                        class="text-gray-300 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                                            height="25" viewBox="0 0 48 48">
                                            <path fill="#ef4e2d"
                                                d="M36.683,43H11.317c-2.136,0-3.896-1.679-3.996-3.813l-1.272-27.14C6.022,11.477,6.477,11,7.048,11 h33.904c0.571,0,1.026,0.477,0.999,1.047l-1.272,27.14C40.579,41.321,38.819,43,36.683,43z">
                                            </path>
                                            <path
                                                d="M24.066,16.073c-4.029,0-7.067,2.596-7.067,6.039c0,3.955,3.624,5.28,6.271,6.247 c3.21,1.173,4.278,1.83,4.278,3.41c0,1.255-1.653,2.314-3.609,2.314c-2.463,0-4.673-1.864-4.695-1.882l-0.104-0.097 c-0.186-0.171-0.428-0.264-0.677-0.264c-0.038,0-0.077,0.002-0.115,0.007c-0.289,0.034-0.549,0.191-0.712,0.432l-1.046,1.542 c-0.291,0.429-0.206,1.008,0.195,1.336l0.106,0.087c0.78,0.631,3.582,2.683,7.049,2.683c4.18,0,7.454-2.705,7.454-6.158 c0-4.535-3.93-5.971-6.8-7.019c-2.767-1.011-3.749-1.562-3.749-2.638c0-1.272,1.356-2.195,3.224-2.195 c1.464,0,2.767,0.584,3.413,0.933c0.089,0.048,0.411,0.241,0.59,0.361l0.13,0.087c0.166,0.111,0.36,0.169,0.556,0.169 c0.071,0,0.143-0.008,0.213-0.023c0.266-0.058,0.496-0.222,0.639-0.453l0.958-1.558c0.283-0.461,0.149-1.064-0.304-1.36 l-0.157-0.103C29.267,17.404,26.979,16.073,24.066,16.073L24.066,16.073z"
                                                opacity=".05"></path>
                                            <path
                                                d="M24.066,16.573c-3.744,0-6.567,2.381-6.567,5.539c0,3.606,3.295,4.81,5.942,5.778 c3.132,1.145,4.607,1.9,4.607,3.88c0,1.552-1.843,2.814-4.109,2.814c-2.664,0-4.997-1.983-5.021-2.003L18.8,32.472 c-0.093-0.085-0.214-0.132-0.338-0.132c-0.019,0-0.038,0.001-0.058,0.003c-0.144,0.017-0.275,0.096-0.356,0.216l-1.046,1.542 c-0.145,0.214-0.103,0.504,0.098,0.668l0.106,0.087c0.746,0.604,3.43,2.571,6.732,2.571c3.9,0,6.954-2.485,6.954-5.658 c0-4.185-3.589-5.496-6.472-6.55c-2.772-1.013-4.078-1.65-4.078-3.107c0-1.561,1.566-2.695,3.724-2.695 c1.574,0,2.963,0.622,3.65,0.992c0.11,0.059,0.443,0.26,0.631,0.385l0.13,0.087c0.083,0.056,0.18,0.084,0.278,0.084 c0.036,0,0.071-0.004,0.107-0.011c0.133-0.029,0.248-0.111,0.319-0.227l0.958-1.558c0.142-0.23,0.074-0.532-0.152-0.68 l-0.157-0.103C29.026,17.844,26.841,16.573,24.066,16.573L24.066,16.573z"
                                                opacity=".07"></path>
                                            <path fill="#ef4e2d"
                                                d="M32.5,11.5h-2C30.5,7.364,27.584,4,24,4s-6.5,3.364-6.5,7.5h-2C15.5,6.262,19.313,2,24,2 S32.5,6.262,32.5,11.5z">
                                            </path>
                                            <path fill="#fff"
                                                d="M24.248,25.688c-2.741-1.002-4.405-1.743-4.405-3.577c0-1.851,1.776-3.195,4.224-3.195 c1.685,0,3.159,0.66,3.888,1.052c0.124,0.067,0.474,0.277,0.672,0.41l0.13,0.087l0.958-1.558l-0.157-0.103 c-0.772-0.521-2.854-1.733-5.49-1.733c-3.459,0-6.067,2.166-6.067,5.039c0,3.257,2.983,4.347,5.615,5.309 c3.07,1.122,4.934,1.975,4.934,4.349c0,1.828-2.067,3.314-4.609,3.314c-2.864,0-5.326-2.105-5.349-2.125l-0.128-0.118l-1.046,1.542 l0.106,0.087c0.712,0.577,3.276,2.458,6.416,2.458c3.619,0,6.454-2.266,6.454-5.158C30.393,27.933,27.128,26.741,24.248,25.688z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-8 text-white">Kontak</h4>
                            <div class="space-y-4">
                                <p class="text-gray-300 text-sm">Jl. A. Yani No.308, Gumpang Lor, Pabelan, Kec.
                                    Kartasura,
                                    Kabupaten Sukoharjo, Jawa Tengah 57169</p>
                                <p class="text-gray-300 text-sm">assalamhypermarket@gmail.com</p>
                                <p class="text-gray-300 text-sm">0271-743333</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center py-5 bg-gray-100">
                    <p class='text-slate-950 text-sm underline'>©2024 WebsiteAssalaamHypermarket</p>
                </div>
            </footer>
            {{-- FOOTER --}}
        </section>

    </div>

    {{-- SCRIPT --}}
    <script>
        var toggleOpen = document.getElementById('toggleOpen');
        var toggleClose = document.getElementById('toggleClose');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
        }

        toggleOpen.addEventListener('click', handleClick);
        toggleClose.addEventListener('click', handleClick);
    </script>
    {{-- SCRIPT --}}

</body>

</html>
