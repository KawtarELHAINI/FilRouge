<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body >
<!-- component -->

<div class="flex flex-wrap place-items-center ">
  <section class="relative mx-auto">
      <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
      <div class="px-5 xl:px-12 py-6 flex w-full items-center">
      <a  href="#">
                            <img class="flex flex-shrink-0 text-gray-800 mr-16" src="./images/logo.png"
                            alt="" width="100" height="100">
                    
                        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="/">Home</a></li>
          <li><a class="hover:text-gray-200" href="/about">About</a></li>
          <li><a class="hover:text-gray-200" href="/register">Sign up</a></li>
          <!-- <li><a class="hover:text-gray-200" href="#">Contact Us</a></li> -->
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
        
          <a class="flex items-center hover:text-gray-200" href="/login">Login
              
          </a>
          <a class="flex items-center hover:text-gray-200" href="/login">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
          </a>
          
        </div>
      </div>
      <!-- Responsive navbar -->
      <a class="xl:hidden flex mr-6 items-center" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="flex absolute -mt-5 ml-4">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
          </span>
        </span>
      </a>
      <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </a>
    </nav>
    
  </section>
</div>
<div class="bg-gray-200">
    
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>

  
<form class="flex items-center max-w-lg mx-auto mb-20" method="GET" action="{{ route('home') }}">
  @csrf   
  <label for="voice-search" class="sr-only">Search</label>
  <div class="relative w-full">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
        
      </div>
      <input type="text" id="voice-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900  shadow-lg text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search cars..." required />
     

  </div>
 
  <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 shadow-xl text-sm font-medium text-white bg-yellow-700 rounded-lg border border-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
      <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
      </svg>Search
  </button>
</form>




<form action="{{ route('home') }}" method="GET">
    @csrf
    
    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
        <button type="submit" name="category_id" value="" class="text-yellow-700 hover:text-white border border-yellow-600 bg-white hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-500 dark:bg-gray-900 dark:focus:ring-yellow-800">All categories</button>
        @foreach($categories as $category)
            <button type="submit" name="category_id" value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }} class="text-gray-900 border border-white bg-gray-200 hover:border-gray-200 hover:text-white hover:bg-yellow-400 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">{{ $category->name }}</button>
        @endforeach
    </div>

</form>


  
      <div class="grid grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      
    
    @foreach ($annonces as $annonce)
    
        <div class="max-w-sm bg-black border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        
              <a href="#">
                <img class="rounded-t-lg object-fill h-48 w-full" src="{{asset('images/' . $annonce->image) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." />
            </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white== pb-5">{{ $annonce->title }}</h5>
              </a>
            
              <div class="grid grid-cols-1 gap-2">
              <p class="mb-3 font-normal text-white dark:text-white  rounded drop-shadow-md px-5 py-0.5 ">Price : {{ $annonce->price }}</p>
              <p class="mb-3 font-normal text-white dark:text-white rounded drop-shadow-md px-5 py-0.5">contact : 0645982736</p>
              <p class="mb-3 font-normal text-white dark:text-white  px-5 py-0.5">April 14</p>
              </div>
             
            
          </div>
      </div>  
        @endforeach
 
      </div>
    </div>
  </div>
  <footer class="bg-black font-sans dark:bg-white ">
    <div class="container px-6 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
            <div class="sm:col-span-2">
                <h1 class="max-w-lg text-xl font-semibold tracking-tight text-white xl:text-2xl dark:text-white">Subscribe our newsletter to get an update.</h1>

                <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                    <input id="email" type="text" class="px-4 py-2 text-white bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-yellow-400 dark:focus:border-yellow-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-yellow-300" placeholder="Email Address" />
            
                    <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        Subscribe
                    </button>
                </div>
            </div>

            <div>
                <p class="font-semibold text-white dark:text-white">Quick Link</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <p class="text-white transition-colors duration-300 dark:text-white dark:hover:text-yellow-400 hover:underline hover:cursor-pointer hover:text-yellow-500">Home</p>
                    <p class="text-white transition-colors duration-300 dark:text-white dark:hover:text-yellow-400 hover:underline hover:cursor-pointer hover:text-yellow-500">Who We Are</p>
                    <p class="text-white transition-colors duration-300 dark:text-white dark:hover:text-yellow-400 hover:underline hover:cursor-pointer hover:text-yellow-500">Our Philosophy</p>
                </div>
            </div>

            <div>
                <p class="font-semibold text-white dark:text-white">Industries</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <p class="text-white transition-colors duration-300 dark:text-white dark:hover:text-yellow-400 hover:underline hover:cursor-pointer hover:text-yellow-500">Retail & E-Commerce</p>
                    <p class="text-white transition-colors duration-300 dark:text-white dark:hover:text-yellow-400 hover:underline hover:cursor-pointer hover:text-yellow-500">Information Technology</p>
                    <p class="text-white transition-colors duration-300 dark:text-white dark:hover:text-yellow-400 hover:underline hover:cursor-pointer hover:text-yellow-500">Finance & Insurance</p>
                </div>
            </div>
        </div>
        
        <hr class="my-6 border-[#023e8a] md:my-8 dark:border-gray-700 h-2" />
        
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex flex-1 gap-4 hover:cursor-pointer">
                <img src="https://www.svgrepo.com/show/303139/google-play-badge-logo.svg" width="130" height="110" alt="" />
                <img src="https://www.svgrepo.com/show/303128/download-on-the-app-store-apple-logo.svg" width="130" height="110" alt="" />
            </div>
            
            <div class="flex gap-4 hover:cursor-pointer">
                <img src="https://www.svgrepo.com/show/303114/facebook-3-logo.svg" width="30" height="30" alt="fb" />
                <img src="https://www.svgrepo.com/show/303115/twitter-3-logo.svg" width="30" height="30" alt="tw" />
                <img src="https://www.svgrepo.com/show/303145/instagram-2-1-logo.svg" width="30" height="30" alt="inst" />
                <!-- <img src="https://www.svgrepo.com/show/94698/github.svg" class="" width="30" height="30" alt="gt" /> -->
                <img src="https://www.svgrepo.com/show/22037/path.svg" width="30" height="30" alt="pn" />
                <img src="https://www.svgrepo.com/show/28145/linkedin.svg" width="30" height="30" alt="in" />
                <!-- <img src="https://www.svgrepo.com/show/22048/dribbble.svg" class="" width="30" height="30" alt="db" /> -->
            </div>
        </div>
        <p class="font-sans p-8 text-start md:text-center md:text-lg md:p-4">© 2024 AutoKaw.</p>
    </div>
</footer>
  


  
  

  