@include('partials.sidebar')

<div class="min-h-screen bg-yellow-400">

     <div class="p-4 xl:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
          <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
            <div class="flex items-center">
              <div class="mr-auto md:mr-4 md:w-56">
              </div>
                     <div class="p-2 md:block text-left">
                      <h2 class="text-sm font-semibold text-gray-800"></h2>
                      <p class="text-xs text-gray-500"></p>
                  </div>
              </button>
              </a>
            </div>
          </div>
        </nav> 


  <main >
   



      <form id="search-form" class="max-w-md mx-auto shadow-xl" action="{{route('viewAll')}}" method="GET"> 
        @csrf
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" name="search" id="default-search" class="block shadow-lg w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />

            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Search</button>
        </div>
    </form>
    
<div id="annonces-container">

@foreach ($annonces as $annonce)
    
<div class="grid mt-5 w-full sm:grid-cols-2 xl:grid-cols-5 gap-6">
        <!-- Card -->
        
            <div
                class="relative flex flex-col shadow-md rounded-xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 max-w-sm">
               
                <div
                    class="hover:text-blue-600 text-white text-sm absolute z-30 top-0 right-0 mt-2 mr-3 gap-1 flex items-center">
                  
                </div>
                <div class="h-auto overflow-hidden">
                    <div class="h-44 overflow-hidden relative">
                        <img src="{{asset('images/' . $annonce->image) }}" alt="">
                    </div>
                </div>
                <div class="bg-white py-4 px-3">
                    <div class="flex items-center justify-between gap-0.5">
                        <h3 class="text-sm mb-2 font-medium">{{$annonce->title}}</h3>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-m text-nowrap text-ellipsis	overflow-hidden mb-2 text-gray-400">
                        {{$annonce->description}}
                        </p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-m text-nowrap text-ellipsis	overflow-hidden mb-2 text-gray-400">
                         {{$annonce->price}}
                        </p>
                    </div>
                    <div>
                    @if ($annonce->deleted_at == null)

                    <button ><a href="{{route('admin.annonceref',['id'=>$annonce['id']])}}"><svg class="w-6 h-6 text-gray-800 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                        </svg></a></button>
                    @else
                    
                    <button ><a href="{{route('admin.annonceacc',['id'=>$annonce['id']])}}">  <svg class="w-6 h-6 text-gray-800 dark:text-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 7 3-3-3-3m0 12H5.5a4.5 4.5 0 1 1 0-9H14"/>
                                                    </svg></a></button>
                    @endif

                    </div>
                   
                </div>
            </div>

    </div>
</div>

   @endforeach

</div>
</body>
