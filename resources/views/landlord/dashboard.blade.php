@include('partials.navbar')

<body class="bg-gradient-to-r from-yellow-600 to-yellow-200">
    {{-- <div class="relative overflow-hidden min-h-screen ">
    <img src="{{ asset('images/pexels-anni-roenkae-2156881.jpg') }}" alt="" class="absolute inset-0 -z-10 h-screen  w-full object-cover object-right bg-cover  md:object-center">
    --}}



        <form class="max-w-md mx-auto mt-10 shadow-xl mb-20" action="{{ route('landlord.dashboard') }}" method="GET">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-white rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                    placeholder="Search users" required /> <!-- 2. Update input name -->
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Search</button>
            </div>
        </form>
    </div>






    <div class="grid grid-cols-1 gap-x-4 gap-y-20 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 ml-72">

        @foreach ($annonces as $annonce)
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg object-fill h-48 w-full" src="{{ asset('images/' . $annonce->image) }}"
                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white pb-5">
                            {{ $annonce->title }}</h5>
                    </a>


                    <div class="grid grid-cols-1 gap-2">
                       
                        <p
                            class="mb-3 font-normal text-green-700 dark:text-green-400  rounded drop-shadow-md px-5 py-0.5 ">
                            Price : {{ $annonce->price }}</p>
                        <p class="mb-3 font-normal text-red-700 dark:text-red-400  rounded drop-shadow-md px-5 py-0.5">
                            contact : 0645982736</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400  px-5 py-0.5">April 14</p>
                    </div>
                    {{-- <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    update
                  </button> --}}

                    <form class="mt-1 text-xs leading-5 text-red-500" action="{{ route('deleteAd', $annonce->id) }}"
                        method="post">
                        @csrf
                        @method('delete')

                      <div class="grid grid-cols-3 gap-2">  

                        <button type="submit"
                            class="mt-1 text-base text-white bg-red-600 px-5 py-3 rounded-lg hover:bg-red-700 ">delete</button>
                    </form>

                    <a href="{{ route('annonces.edit', $annonce->id) }}" class="mt-1 text-base  text-green-500  font-bold  px-5 py-3  ">Edit</a>

                   </div>

                </div>
            </div>
        @endforeach
