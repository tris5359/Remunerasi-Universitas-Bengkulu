@extends('layouts.auth')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-2 container mx-auto z-10 overflow-hidden h-screen px-3 justify-center relative pt-10 lg:pt-0 duration-300 transform">

    <div class="col-span-2 px-8  text-white  mx-5   mt-12     bg-white shadow-lg dark:bg-black dark:bg-opacity-30
                    border-t-4 border-[#10306B] dark:border-yellow-500 py-10 rounded-xl place-self-center w-full max-w-lg 2xl:max-w-xl">
        <div class="   2xl:mt-0  max-w-lg 2xl:max-w-xl">
            <h2 class="font-extrabold font-[arial] text-3xl lg:text-4xl 2xl:text-5xl  text-transparent bg-clip-text bg-gradient-to-r from-[#0d276e] to-[#2367ce] dark:from-yellow-600 dark:to-yellow-200  text-sh2 inline-block">
                {{ __('Register') }}
            </h2>

            <form class="w-full mt-2 text-gray-700 dark:text-gray-300" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="my-2  ">
                    <label class=" after:content-['*'] after:text-red-500 font-semibold text-gray-700 dark:text-gray-300
                                after:ml-2 text-sm pb-2">{{ __('Name') }}</label>
                    <input class=" w-full rounded-lg border mt-1 border-[#ccc] dark:text-white dark:border-gray-500
                                bg-transparent px-3 py-2.5 text-sm font-normal text-white-700 duration-300 transform
                                placeholder:text-gray-600 dark:placeholder:text-gray-100
                                dark:focus:ring-gray-500 focus:ring-[#ccc]
                                focus:shadow-[-4px_4px_10px_0px_#ccc]
                                dark:focus:shadow-[-4px_4px_10px_0px_#222] form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" />
                    @error('name')
                    <span class="text-sm mt-2 text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="my-2  ">
                    <label class=" after:content-['*'] after:text-red-500 font-semibold text-gray-700 dark:text-gray-300
                                after:ml-2 text-sm pb-2">{{ __('Email Address') }}</label>
                    <input class=" w-full rounded-lg border mt-1 border-[#ccc] dark:text-white dark:border-gray-500
                                bg-transparent px-3 py-2.5 text-sm font-normal text-white-700 duration-300 transform
                                placeholder:text-gray-600 dark:placeholder:text-gray-100
                                dark:focus:ring-gray-500 focus:ring-[#ccc]
                                focus:shadow-[-4px_4px_10px_0px_#ccc]
                                dark:focus:shadow-[-4px_4px_10px_0px_#222] form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />
                    @error('email')
                    <span class="text-sm mt-2 text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class=" col-span-1 " x-data=" { show: false }">
                    <label class=" after:content-['*'] after:text-red-500    text-gray-700 dark:text-gray-300 font-semibold after:ml-2 text-sm
                                    pb-2">{{ __('Password') }}</label>
                    <div class="relative flex items-center ">
                        <input :type=" show ? 'text': 'password' " id="password" name="password" required autocomplete="current-password" class=" w-full rounded-lg border mt-1 border-[#ccc] dark:text-white dark:border-gray-500
                                    bg-transparent px-3 py-2.5 text-sm font-normal text-white-700 duration-300 transform
                                    placeholder:text-gray-600 dark:placeholder:text-gray-100
                                    dark:focus:ring-gray-500 focus:ring-[#ccc]
                                    focus:shadow-[-4px_4px_10px_0px_#ccc]
                                    dark:focus:shadow-[-4px_4px_10px_0px_#222] form-control @error('password') is-invalid @enderror " placeholder="Password" />
                        <span class="absolute right-2 pt-1 bg-transparent flex items-center justify-center cursor-pointer " @click="show = !show">
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
                    <span class="text-sm mt-2 text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class=" col-span-1 mt-1 " x-data=" { show: false }">
                    <label class=" after:content-['*'] after:text-red-500    text-gray-700 dark:text-gray-300 font-semibold after:ml-2 text-sm
                                    pb-2">{{ __('Confirm Password') }}</label>
                    <div class="relative flex items-center ">
                        <input :type=" show ? 'text': 'password' " id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class=" w-full rounded-lg border mt-1 border-[#ccc] dark:text-white dark:border-gray-500
                                    bg-transparent px-3 py-2.5 text-sm font-normal text-white-700 duration-300 transform
                                    placeholder:text-gray-600 dark:placeholder:text-gray-100
                                    dark:focus:ring-gray-500 focus:ring-[#ccc]
                                    focus:shadow-[-4px_4px_10px_0px_#ccc]
                                    dark:focus:shadow-[-4px_4px_10px_0px_#222] form-control @error('password_confirmation') is-invalid @enderror " placeholder="Confirm Password" />
                        <span class="absolute right-2 pt-1 bg-transparent flex items-center justify-center cursor-pointer " @click="show = !show">
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
                    @error('password_confirmation')
                    <span class="text-sm mt-2 text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="w-full   py-2     text-white text-[14px] transition-all   duration-300 transform         bg-gradient-to-r  from-[#0d276e] to-[#3d8bff]   rounded-lg  bg-size-200 bg-pos-0 hover:bg-pos-100 hover:scale-[99%] active:scale-95  px-5 space-x-2 mt-8 dark:from-yellow-700 dark:to-yellow-300  focus:ring-blue-500">
                    {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
