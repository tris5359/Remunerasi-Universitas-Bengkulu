@extends('layouts.auth')

@section('content')
<div class="  relative z-10 grid justify-center lg:h-screen grid-cols-1 px-3   mx-auto overflow-hidden duration-300 transform lg:grid-cols-3  ">
    <div class="col-span-1 px-8  my-10 lg:my-4 2xl:my-0   mx-5 md:mx-20   place-self-center w-full max-w-lg  ">
        <div class="max-w-lg 2xl:mt-0 2xl:max-w-xl">
            <div class=" pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl w-full text-center">
                <img src="{{ asset('Logo.svg') }}" class="h-28 w-28 mx-auto mb-5" alt="logo">
                <h3 class="text-3xl  z-10  text-transparent bg-gradient-to-tl from-black to-blue-500 font-[arial] font-extrabold  bg-clip-text">
                    SIREMUN DOSEN</h3>
                <p class="mb-0 text-sm leading-7 line-clamp-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae rerum distinctio perspiciatis beatae aspernatur quis labore doloremque error eum vel hic quos illum consequatur eligendi et in voluptatum, amet qui.</p>
            </div>

            <form class="w-full mt-2 text-gray-700 " method="POST" action="{{ route('loginuser') }}">
                @csrf
                <div class="my-2 ">
                    <label class=" after:content-['*'] after:text-red-500 font-semibold text-gray-700
                                after:ml-2 text-sm pb-2">Pilih Role User</label>
                    <select class=" w-full rounded-lg border mt-1 border-[#ccc]
                                bg-transparent px-3 py-2.5 text-sm font-normal text-white-700 duration-300 transform
                                placeholder:text-gray-600  focus:ring-[#ccc]
                                focus:shadow-[-4px_4px_10px_0px_#ccc]
                                 form-control @error('role') is-invalid @enderror" id="role" name="role" required autocomplete="role" autofocus placeholder="role">
                        <option value="">---- Pilih Role User ----</option>
                        <option value="admin">Admin</option>
                        <option value="operator">Operator</option>
                        <option value="verifikator">Verifikator</option>
                    </select>
                    @error('role')
                    <span class="mt-2 text-sm text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="my-2 ">
                    <label class=" after:content-['*'] after:text-red-500 font-semibold text-gray-700
                                after:ml-2 text-sm pb-2">Username</label>
                    <input class=" w-full rounded-lg border mt-1 border-[#ccc]
                                bg-transparent px-3 py-2.5 text-sm font-normal text-white-700 duration-300 transform
                                placeholder:text-gray-600  focus:ring-[#ccc]
                                focus:shadow-[-4px_4px_10px_0px_#ccc]
                                 form-control @error('username') is-invalid @enderror" id="username" type="text" name="email" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="username" />
                    @error('username')
                    <span class="mt-2 text-sm text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-span-1 " x-data=" { show: false }">
                    <label class=" after:content-['*'] after:text-red-500    text-gray-700 font-semibold after:ml-2 text-sm
                                    pb-2">Password</label>
                    <div class="relative flex items-center ">
                        <input :type=" show ? 'text': 'password' " id="password" name="password" required autocomplete="current-password" class=" w-full rounded-lg border mt-1 border-[#ccc]
                                    bg-transparent px-3 py-2.5 text-sm font-normal text-white-700 duration-300 transform
                                    placeholder:text-gray-600 focus:ring-[#ccc]
                                    focus:shadow-[-4px_4px_10px_0px_#ccc]
                                    form-control @error('password') is-invalid @enderror " placeholder="Password" />
                        <span class="absolute flex items-center justify-center pt-1 bg-transparent cursor-pointer right-2 " @click="show = !show">
                            <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                </path>
                            </svg>

                            <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </span>

                    </div>
                    @error('password')
                    <span class="mt-2 text-sm text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="w-full   py-2     text-white text-[14px] transition-all   duration-300 transform         bg-gradient-to-r  from-[#0d276e] to-[#3d8bff]   rounded-lg  bg-size-200 bg-pos-0 hover:bg-pos-100 hover:scale-[99%] active:scale-95  px-5 space-x-2 mt-8   focus:ring-blue-500">
                    LOGIN
                </button>


            </form>
            <p class="mb-0 text-sm leading-7 bg-orange-100 px-4 py-1 w-full rounded-xl mt-10 text-center">Masa Kinerja Juli - Desember 2023<br>
                Masa Pembayaran Januari - Maret 2024 (3 Bulan)
            </p>

        </div>
    </div>
    <div class="col-span-1 max-w-80"></div>
    <div class="col-span-1 lg:-left-32 2xl:-left-52 relative    px-8     mx-5 md:mx-20 w-[135%]  place-self-center    ">
        <div class="   w-full      grid  ">
            <div class="      lg:text-white  text-sm leading-7 2xl:mb-5">
                <h2 class="text-xl text-center font-bold my-3">
                    Pengumuman
                </h2>
                <div x-data class="grid grid-cols-1 md:grid-cols-3 gap-5 pt-4 border-t mx-auto   border-gray-300">
                    <template x-for="i in 3">
                        <a href="" class="max-w-sm bg-white shadow-lg rounded-lg mx-auto overflow-hidden lg:my-4 hover:scale-[98%] active:scale-95 hover:brightness-50 duration-300 transform">
                            <img class="w-full h-20 2xl:h-32 object-cover object-center brightness-75" src="{{asset('Rektorat.jpg')}}" alt="avatar">
                            <div class="flex items-center px-4 py-2 bg-gray-900">
                                <h1 class="  text-gray-300   text-sm">04 Mei 2024</h1>
                            </div>
                            <div class="py-3 px-4">
                                <h1 class="2xl:text-base text-sm font-semibold text-gray-800 line-clamp-2">Masa Kinerja Juli - Desember 2023 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maxime minus voluptatum, ullam commodi enim ratione voluptates voluptate, placeat nesciunt eum doloribus. Impedit quos sapiente illum asperiores est maiores sint!</h1>

                            </div>
                        </a>
                    </template>
                </div>
            </div>
        </div>
        <div class="   w-full      grid  ">
            <div class="     lg:text-white  text-sm leading-7 2xl:mb-5">
                <h2 class="text-xl text-center font-bold my-3">
                    Dokumen
                </h2>
                <div x-data class="grid grid-cols-1 md:grid-cols-3 gap-5 pt-4 border-t border-gray-300">
                    <template x-for="i in 3">
                        <a href="" class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden mx-auto lg:my-4 hover:scale-[98%] active:scale-95 hover:brightness-50 duration-300 transform">
                            <div class="w-full h-20 2xl:h-32 grid bg-gray-100 shadow-[inset_0px_0px_10px_0px_#000]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="2xl:w-16 2xl:h-16 h-10 w-10 place-self-center" viewBox="0 0 16 16">
                                    <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                                    <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
                                </svg>

                            </div>

                            <div class="flex items-center px-4 py-2 bg-gray-900">
                                <h1 class="  text-gray-300   text-sm">04 Mei 2024</h1>
                            </div>
                            <div class="py-3 px-4">
                                <h1 class="2xl:text-base text-sm font-semibold text-gray-800 line-clamp-2">Masa Kinerja Juli - Desember 2023 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maxime minus voluptatum, ullam commodi enim ratione voluptates voluptate, placeat nesciunt eum doloribus. Impedit quos sapiente illum asperiores est maiores sint!</h1>

                            </div>
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </div>

</div>
<style>
    #rect1 {
        fill: url(#Gradient1);
    }

    .stop1 {
        stop-color: #1e40af;
    }


    .stop2 {
        stop-color: #0F236A;
    }

    .stop3 {
        stop-color: #111;
    }
</style>

<!-- <div class="h-screen w-screen absolute top-0 left-0 " style=" background: transparent url({{asset('Rektorat.jpg')}}) no-repeat scroll 50% / cover; background-attachment: fixed; ">
    <div class=" h-screen w-screen absolute top-0 left-0 bg-gradient-to-r to-[#0b215f92] to-50% from-[#3b83f675]">

    </div>

</div> -->


<svg id="visual" viewBox="0 0 960 540" style="filter: drop-shadow(-15px 10px 20px #000);" class="lg:h-screen hidden lg:block absolute right-0 top-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
    <defs>
        <linearGradient id="Gradient1">
            <stop class="stop1" offset="0%" />
            <stop class="stop2" offset="50%" />
            <stop class="stop3" offset="100%" />
        </linearGradient>
    </defs>
    <!-- <rect x="0" y="0" width="960" height="540" fill="#002233"></rect> -->

    <path d="M264 540L298 517.5C332 495 400 450 402.2 405C404.3 360 340.7 315 299.8 270C259 225 241 180 239.2 135C237.3 90 251.7 45 258.8 22.5L266 0L960 0L960 22.5C960 45 960 90 960 135C960 180 960 225 960 270C960 315 960 360 960 405C960 450 960 495 960 517.5L960 540Z" id="rect1" stroke-linecap="round" stroke-linejoin="miter"></path>
</svg>
@endsection
