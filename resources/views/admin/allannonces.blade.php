<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>
<body>
<div class="min-h-screen bg-yellow-400">

 <!-- <div class="min-h-screen bg-yellow-400"> -->
    <aside class="bg-black -translate-x-80 fixed inset-0 z-50   h-[100vh] w-72  transition-transform duration-300 xl:translate-x-0">
      <div class="relative border-b border-white/20">
        <a class="flex items-center gap-4 py-6 px-8" href="/">
                            <img class="flex flex-shrink-0 text-gray-800 mr-16" src="/images/logo.png"
                            alt="" width="100" height="100">
                    
                        </a>
        <button class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden" type="button">
          <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </span>
        </button>
      </div>
      <div class="m-4">
        <ul class="mb-4 flex flex-col gap-1">
         
          <li>
            <a aria-current="page" class="active" href="/admin/statistique">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                  </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">statistique</p>
              </button>
            </a>
          </li>
         
          
          <li>
            <a aria-current="page" class="active" href="/admin/cars">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                  </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">cars</p>
              </button>
            </a>
          </li>

          
          <li>
            <a aria-current="page" class="active" href="/admin/category">
                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                  </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">category</p>
              </button>
            </a>
          </li>
          <li>
            <a class="" href="/admin/users">
              <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                </svg>
                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">users</p>
              </button>
            </a>
          </li>
         
         
        </ul>
        <ul class="mb-4 flex flex-col gap-1">
          <li>
            <a class="" href="#">
              <form action="/logout" method="POST">
               
                <button class=" middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-red-800 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                  </svg>
                  <p class=" block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">log out</p>
                </button>
            </form>
             
            </a>
          </li>
         
        </ul>
      </div>
    </aside>
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
   

<!--    
      <dl class="grid grid-cols-2 gap-x-8 gap-y-16 lg:grid-cols-3 md:grid-cols-1 ml-72 mt-32 mb-20">
       
        <div class="container mx-auto">
          <div class="w-72 bg-white max-w-xs mx-auto rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-20 bg-purple-400 flex items-center justify-between">
              <p class="mr-0 text-white text-lg pl-5">Advertisements</p>
            </div>
            <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
              <p>TOTAL</p>
            </div>
            <p class="py-4 text-3xl ml-5">{{$totalAnnonce}}</p>
        
             <hr > -->
          <!-- </div>
        </div>
      
        <div class="container mx-auto">
          <div class="w-72 bg-white max-w-xs mx-auto rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
            <div class="h-20 bg-red-400 flex items-center justify-between">
              <p class="mr-0 text-white text-lg pl-5">Categories</p>
            </div>
            <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
              <p>TOTAL</p>
            </div>
            <p class="py-4 text-3xl ml-5">{{$categories}}</p>
             <hr > -->
          <!-- </div>
        </div>
    
      </dl>  --> 
      



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
                    <div class="flex justify-between items-center">
                        <p class="text-m text-nowrap text-ellipsis	overflow-hidden mb-2 text-gray-400">
                         {{$annonce->status}}
                        </p>
                    </div>
                </div>
            </div>

    </div>
</div>

   @endforeach

</div>
</body>
