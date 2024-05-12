<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content=" lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ">
    <meta name="keywords" content="lorem lorem lorem lorem lorem lorem lorem " />
    <link rel="shortcut icon" href="{{ asset('Logo.svg') }}">

    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css' ])
</head>

<body class="body bg-white  " x-data="{ menuOpen: true }">
    <div class="fixed w-full z-30 flex bg-white bg-gradient-to-r from-blue-800 to-[#0F236A] p-2 items-center justify-center h-16 px-10">
        <div class="logo ml-16    transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
            <div class="flex place-self-center  text-white font-['Lilita_One'] uppercase">
                <img alt="img" src="{{ asset('Logo.svg') }}" class="w-9 h-9">
                <div class="transform ease-in-out duration-300 text-2xl ml-1 mt-1">
                    SIREMUN
                </div>
            </div>
        </div>
        <!-- SPACER -->
        <div class=" grow h-full flex items-center justify-center"></div>
        <div class="flex-none h-full text-center flex items-center justify-center">
            <ul class="ml-auto flex items-center">
                <li class="dropdown">
                    <button name="notifications" type=" button" class="dropdown-toggle text-gray-400 mr-2 w-8 h-8 rounded flex items-center justify-center  hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="fill-white hover:fill-gray-300 hover:scale-95" viewBox="0 0 24 24">
                            <path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu shadow-md shadow-black/5 z-[9999] hidden max-w-64     w-full bg-white rounded-md border border-gray-100">
                        <div class="flex items-center px-4 pt-4 border-b border-b-gray-100 notification-tab">
                            <button type="button" data-tab="notification" data-tab-page="notifications" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1 active">Notifications</button>
                            <button type="button" data-tab="notification" data-tab-page="messages" class="text-gray-400 font-medium text-[13px] hover:text-gray-600 border-b-2 border-b-transparent mr-4 pb-1">Messages</button>
                        </div>
                        <div class="my-2">
                            <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img alt="img" src="https://placehold.co/32x32" class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">New order</div>
                                            <div class="text-[11px] text-gray-400">from a user</div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <ul class="max-h-64 overflow-y-auto hidden" data-tab-for="notification" data-page="messages">
                                <li>
                                    <a href="#" class="py-2 px-4 flex items-center hover:bg-gray-50 group">
                                        <img alt="img" src="https://placehold.co/32x32" class="w-8 h-8 rounded block object-cover align-middle">
                                        <div class="ml-2">
                                            <div class="text-[13px] text-gray-600 font-medium truncate group-hover:text-blue-500">John Doe</div>
                                            <div class="text-[11px] text-gray-400">Hello there!</div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
                <button id="fullscreen-button" name="fullscreen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="fill-white hover:fill-gray-300 hover:scale-95 mr-6 hidden lg:block" viewBox="0 0 24 24">
                        <path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"></path>
                    </svg>
                </button>

                <li class="dropdown ">
                    <button type="button" name="avatar" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <!-- <img alt="img" class="w-8 h-8 rounded-full bg-black" src="{{ asset('Logo.svg') }}" /> -->
                                <img alt="img" class="w-8 h-8 rounded-full" src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg" />
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping"></div>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full"></div>
                            </div>
                        </div>
                        <div class="p-2   text-left hidden md:block">
                            <h2 class="text-sm font-semibold text-white">{{ Auth::user()->name }}</h2>
                            <p class="text-sm italic text-yellow-400 capitalize ">{{ Auth::user()->role }}</p>
                        </div>
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Reset Password</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <form method="POST" action="{{route('logoutuser')}}">

                                @csrf
                                @method('DELETE')
                                <button class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <aside class="w-72   fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-white shadow-[4px_76px_10px_0px_#d1d5db]  ">
        <!-- open sidebar button -->
        <div class="absolute bg-blue-800 h-16 w-full duration-1000 transform" :class="{ 'opacity-0': menuOpen, 'opacity-100': !menuOpen }">

        </div>
        <div class="max-toolbar translate-x-0  w-full -right-6 transition transform ease-in duration-300 items-center justify-between flex  absolute top-2 rounded-full h-12">
            <div class="w-full grid mr-12">
                <div class="flex place-self-center  text-black font-['Lilita_One'] uppercase">
                    <img alt="img" src="{{ asset('Logo.svg') }}" class="w-9 h-9">
                    <div class="transform ease-in-out duration-300 text-2xl ml-1 mt-1">
                        SIREMUN
                    </div>
                </div>
            </div>

        </div>
        <div onclick="openNav()" @click.prevent="menuOpen =!menuOpen" class="-right-6 transition transform ease-in-out duration-500 flex border-4 border-white   bg-blue-800   hover:bg-blue-500 absolute top-2 p-3 rounded-full shadow-[-3px_0px_5px_0px_#555] text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>

        </div>
        @include('layouts.sidebar.sidebar_admin')

    </aside>
    <!-- CONTENT -->
    <div class="content  md:ml-72 ml-16 transform ease-in-out duration-500 pt-20 px-5 lg:px-8 pb-4 font-[Quicksand]">
        <nav class=" flex px-5 py-3 text-gray-700 rounded-xl bg-gray-50  shadow-md shadow-gray-300 mb-5 " aria-label=" Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900  ">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        SIREMUN
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path>
                        </svg>
                        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2  ">@yield('breadcrumbs')</a>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- content  -->
        @yield('content')
        <!-- end content  -->


    </div>


    <script src="{{ asset('popperjs.js') }}"></script>

    <script>
        const sidebar = document.querySelector("aside");
        const showSidebar = document.querySelector(".showmenu");
        const hideSidebar = document.querySelector(".hidemenu");
        const roundout = document.querySelector(".roundout");
        const maxToolbar = document.querySelector(".max-toolbar");
        const logo = document.querySelector(".logo");
        const content = document.querySelector(".content");

        function openNav() {
            if (sidebar.classList.contains("-translate-x-56")) {
                // max sidebar
                sidebar.classList.remove("-translate-x-56");
                sidebar.classList.add("translate-x-none");
                maxToolbar.classList.add("translate-x-0");
                maxToolbar.classList.remove("translate-x-32", "scale-x-0");
                logo.classList.remove("ml-16");
                content.classList.remove("ml-16");
                content.classList.add("ml-16", "md:ml-72");
            } else {
                // mini sidebar
                sidebar.classList.add("-translate-x-56");
                sidebar.classList.remove("translate-x-none");
                maxToolbar.classList.add("translate-x-32", "scale-x-0");
                maxToolbar.classList.remove("translate-x-0");
                logo.classList.add("ml-16");
                content.classList.remove("ml-16", "md:ml-72");
                content.classList.add("ml-16");
            }
        }
    </script>

    @vite([ 'resources/js/app.js'])

</body>

</html>
