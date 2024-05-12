@extends('layouts.admin')
@section('breadcrumbs', 'Dashboard')

@section('content')


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-3 gap-6">
    <div class="relative bg-white  py-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow- transform duration-500 ease-in bg-white left-4 -top-4">
            <img alt="img" src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border- "></div>
        <p class="font-bold text-gray-600 text-base   px-6 mt-2">Fakultas KIP</p>
    </div>
    <div class="relative bg-white  pt-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow-[#DF0A0C] transform duration-500 ease-in bg-[#DF0A0C] left-4 -top-4">
            <img alt="img" src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border-[#DF0A0C] "></div>
        <p class="font-bold text-gray-600 text-base group-hover:bg-[#DF0A0C] group-hover:text-white  duration-300 transform   px-6 py-3 rounded-b-xl">Fakultas Hukum</p>
    </div>
    <div class="relative bg-white  pt-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow-[#FBFD47] transform duration-500 ease-in bg-[#FBFD47] left-4 -top-4">
            <img src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border-[#FBFD47] "></div>
        <p class="font-bold text-gray-600 text-base group-hover:bg-[#FBFD47]    duration-300 transform   px-6 py-3 rounded-b-xl">Fakultas Ekonomi</p>
    </div>
    <div class="relative bg-white  pt-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow-[#BF8118] transform duration-500 ease-in bg-[#BF8118] left-4 -top-4">
            <img alt="img" src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border-[#BF8118] "></div>
        <p class="font-bold text-gray-600 text-base group-hover:bg-[#BF8118] group-hover:text-white  duration-300 transform   px-6 py-3 rounded-b-xl">Fakultas ISIP</p>
    </div>
    <div class="relative bg-white  pt-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow-[#33AD17] transform duration-500 ease-in bg-[#33AD17] left-4 -top-4">
            <img alt="img" src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border-[#33AD17] "></div>
        <p class="font-bold text-gray-600 text-base group-hover:bg-[#33AD17] group-hover:text-white  duration-300 transform   px-6 py-3 rounded-b-xl">Fakultas Pertanian</p>
    </div>
    <div class="relative bg-white  pt-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow-[#8DC7FF] transform duration-500 ease-in bg-[#8DC7FF] left-4 -top-4">
            <img alt="img" src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border-[#8DC7FF] "></div>
        <p class="font-bold text-gray-600 text-base group-hover:bg-[#8DC7FF] group-hover:text-white  duration-300 transform   px-6 py-3 rounded-b-xl">Fakultas MIPA</p>
    </div>
    <div class="relative bg-white  pt-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow-[#FD7D23] transform duration-500 ease-in bg-[#FD7D23] left-4 -top-4">
            <img alt="img" src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border-[#FD7D23] "></div>
        <p class="font-bold text-gray-600 text-base group-hover:bg-[#FD7D23] group-hover:text-white  duration-300 transform   px-6 py-3 rounded-b-xl">Fakultas Teknik</p>
    </div>
    <div class="relative bg-white  pt-3  rounded-xl w-full my-5 shadow-[0px_0px_10px_0px_#9ca3af] group">
        <div class=" text-white flex items-center absolute rounded-xl group-hover:rotate-[360deg] p-4 shadow-lg shadow-gray-400 group-hover:shadow-xl group-hover:shadow-[#EA00DD] transform duration-500 ease-in bg-[#EA00DD] left-4 -top-4">
            <img alt="img" src="{{ asset('Logo.svg') }}" class="w-12 h-12 lg:w-14 lg:h-14">

        </div>
        <div class="mt-12 px-6">
            <div class="float-right right-2 -mt-6 mb-4 ">
                <p class="text-base font-semibold text-right text-gray-600">65/71</p>
                <p class="text-2xl font-extrabold text-right text-gray-800">91.5%</p>
            </div>
        </div>
        <div class="border-t-2 clear-both border-[#EA00DD] "></div>
        <p class="font-bold text-gray-600 text-base group-hover:bg-[#EA00DD] group-hover:text-white  duration-300 transform   px-6 py-3 rounded-b-xl">Fakultas Kedokteran</p>
    </div>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-5 md:mt-10">
    <div class="col-span-1 lg:col-span-2 bg-white shadow-gray-300 shadow-lg   rounded-lg     p-5   text-gray-800  text-sm leading-7 mb-5">
        <h2 class="text-xl font-bold my-3 text-blue-900" style="text-shadow: 1px 1px 1px darkslategrey;">
            Statistic
        </h2>
        <p class="italic pt-4 border-t border-gray-300 text-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis repellendus quod doloribus dolorum adipisci reprehenderit repellat aut non tempora, quibusdam, ad hic possimus delectus eveniet quisquam quae obcaecati facilis numquam?
        </p>
    </div>
    <div class="col-span-1 bg-white shadow-gray-300 shadow-lg   rounded-lg     p-5   text-gray-800  text-sm leading-7 mb-5">
        <h2 class="text-xl font-bold my-3 text-blue-900" style="text-shadow: 1px 1px 1px darkslategrey;">
            Pesan Terbaru
        </h2>
        <p class="italic pt-4 border-t border-gray-300 text-gray-600">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit pariatur earum iusto blanditiis in dignissimos iste! Debitis, magnam obcaecati quasi sapiente voluptate laboriosam illo sint officiis ut. Laboriosam, ea ex.
        </p>
    </div>
</div>
@endsection
