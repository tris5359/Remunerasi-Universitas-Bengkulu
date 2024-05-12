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
                    <div class="text-sm font-semibold  text-gray-400 w-full" x-show="menuOpen">Verifikasi Kinerja</div>
                    <!-- <div class="text-sm font-semibold  text-gray-400 w-full" x-show="!menuOpen">***</div> -->
                </div>
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
                        <span class="ml-2 text-sm  truncate  group-hover:text-blue-700  font-bold" :class="{ 'hidden': !menuOpen }">Data Rubrik Dosen</span>
                    </div>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:block translate-x-60 z-[9999]" x-show="!menuOpen">
                        <div class="relative whitespace-nowrap rounded-md bg-blue-700 px-4 py-2 text-sm font-semibold text-white drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-blue-700"></div>
                            </div>
                            Data Rubrik Dosen
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





        </ul>
    </div>
</div>
