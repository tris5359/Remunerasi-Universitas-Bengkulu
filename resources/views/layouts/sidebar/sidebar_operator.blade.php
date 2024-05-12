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
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Isi Kinerja Dosen</div>
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


            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Rubrik Kinerja</div>
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pendidikan</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pendidikan
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Penelitian</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Penelitian
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengabdian</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengabdian
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Kedokteran/D3 Kesehatan</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Kedokteran/D3 Kesehatan
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pembinaan Sivitas Akademik</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pembinaan Sivitas Akademik
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Administrasi dan Manajemen</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Administrasi dan Manajemen
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Penghargaan Atas Prestasi</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Penghargaan Atas Prestasi
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Pengelola Keuangan</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Pengelola Keuangan
                        </div>
                    </div>
                </a>
            </li>


            <li class="px-5" :class="{ 'hidden ': !menuOpen }">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Monitoring Isian Kinerja</div>
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Detail Isian Rubrik</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Detail Isian Rubrik
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Riwayat Entri Data</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Riwayat Entri Data
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
