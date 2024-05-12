<div :class="{ 'mt-16': !menuOpen, 'mt-20': menuOpen }" class="   text-black  flex-col space-y-2 w-full font-[Quicksand]   absolute  h-[calc(100vh)]">
    <div class="overflow-y-scroll overflow-x-hidden  h-[88vh] sidebar-scroll   group/item">
        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Dashboard</div>
                    <!-- <div class="text-sm font-semibold  text-gray-400 w-full" x-show="!menuOpen">***</div> -->
                </div>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" flex  absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-gradient-to-bl from-blue-900 to-cyan-500  p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  transform  duration-500" :class="{ ' fill-white': !menuOpen, 'fill-blue-700' : menuOpen }" viewBox="0 0 16 16">
                                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Dashboard</span>
                    </div>

                    <div class="absolute  inset-y-0 left-12 hidden items-center overflow-visible group-hover:block translate-x-60 z-[9999]">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Dashboard
                        </div>
                    </div>
                </a>
            </li>

            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Manajemen Website</div>
                    <!-- <div class="text-sm font-semibold  text-gray-400 w-full" x-show="!menuOpen">***</div> -->
                </div>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengumuman</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengumuman
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                                <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Unggah Dokumen</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Unggah Dokumen
                        </div>
                    </div>
                </a>
            </li>

            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Manajemen Pengguna</div>
                    <!-- <div class="text-sm font-semibold  text-gray-400 w-full" x-show="!menuOpen">***</div> -->
                </div>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Data Dosen</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Data Dosen
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Data Rekening</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Data Rekening
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengaturan Pengguna</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengaturan Pengguna
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengaturan Jabatan</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengaturan Jabatan
                        </div>
                    </div>
                </a>
            </li>
            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Manajemen Remunerasi</div>
                    <!-- <div class="text-sm font-semibold  text-gray-400 w-full" x-show="!menuOpen">***</div> -->
                </div>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengatuan Harga Poin</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengatuan Harga Poin
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 24 24">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path d="M9 1v2h6V1h2v2h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2zm11 9H4v9h16v-9zm-4.964 1.136l1.414 1.414-4.95 4.95-3.536-3.536L9.38 12.55l2.121 2.122 3.536-3.536zM7 5H4v3h16V5h-3v1h-2V5H9v1H7V5z" />
                                </g>
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengaturan Periode</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengaturan Periode
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengaturan Login Pengguna</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengaturan Login Pengguna
                        </div>
                    </div>
                </a>
            </li>
            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Monitoring Remunerasi</div>
                    <!-- <div class="text-sm font-semibold  text-gray-400 w-full" x-show="!menuOpen">***</div> -->
                </div>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Isian Rubrik</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Isian Rubrik
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Isian Per Rubrik</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Isian Per Rubrik
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pesan</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pesan
                        </div>
                    </div>
                </a>
            </li>
            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Rekapitulasi Remunerasi</div>
                    <!-- <div class="text-sm font-semibold  text-gray-400 w-full" x-show="!menuOpen">***</div> -->
                </div>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Generate Poin</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Generate Poin
                        </div>
                    </div>
                </a>
            </li>

            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Laporan Remunerasi</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Laporan Remunerasi
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=" #" class="relative group  flex flex-row items-center h-11 focus:outline-none    text-gray-600 hover:text-gray-800   border-transparent hover:border-blue-700  pr-6" :class="{ 'my-1': !menuOpen }">
                    <div class=" group-hover:block hidden absolute w-2 h-full bg-blue-700 shadow-md shadow-black rounded-r-md duration-300 transform"> </div>
                    <div class="group-hover:scale-[99%] transform duration-300 flex flex-row " :class="{ 'ml-0': !menuOpen, 'group-hover:ml-5  ml-4': menuOpen }">
                        <span class=" inline-flex justify-center items-center ml-4  transform ease-in-out duration-500" :class="{ 'translate-x-56  bg-white group-hover:bg-gradient-to-bl group-hover:from-blue-900 group-hover:to-cyan-500 group p-2 rounded-lg shadow-md shadow-gray-400': !menuOpen }">
                            <svg class="w-5 h-5  fill-gray-500" :class="{ 'group-hover:fill-blue-700': menuOpen, 'group-hover:fill-white': !menuOpen }" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Grafik Remunerasi</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Grafik Remunerasi
                        </div>
                    </div>
                </a>
            </li>






        </ul>
    </div>
</div>
