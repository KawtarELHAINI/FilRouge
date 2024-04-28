@extends('layout')
@include('partials.navbar')

<div class="bg-gradient-to-r from-yellow-400 to-yellow-600">
    
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
              <p class="mb-3 font-normal text-white dark:text-white  rounded drop-shadow-md px-5 py-0.5 ">location :{{ $annonce->location }} </p>
              <p class="mb-3 font-normal text-white dark:text-white  rounded drop-shadow-md px-5 py-0.5 ">Price : {{ $annonce->price }}</p>
              <p class="mb-3 font-normal text-white dark:text-white rounded drop-shadow-md px-5 py-0.5">contact : 0645982736</p>
              <p class="mb-3 font-normal text-white dark:text-white  px-5 py-0.5">April 14</p>
              </div>
              <a href="{{ route('details', ['id' => $annonce->id]) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            
          </div>
      </div>  
        @endforeach
 
      </div>
    </div>
  </div>

  






























  <!-- component -->
{{-- <div
class="flex flex-col space-y-8  min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-gray-300">
<div class="block rounded-lg bg-white w-72 mt-32">
<div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init data-te-ripple-color="light">
    <img class="rounded-lg  sm:m-h-64 md:h-64 w-full" src="https://a0.muscache.com/im/pictures/prohost-api/Hosting-51701996/original/ac2eabbe-da86-4646-a7d7-f6fe48c083b8.jpeg?im_w=720"
                                alt="" />
    <a href="#!">
        <div
            class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
        </div>
    </a>
</div>

<div class="p-2">
    <div class="flex justify-between">
        <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
            Location Name
        </h5>
        <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50 flex">
            5.0 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-4 h-4 ml-1">
                <path fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd" />
            </svg>

        </h5>
    </div>
    <p class="mb-1 text-sm text-neutral-600 dark:text-neutral-200">
        Added X weeks ago
    </p>

    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
        Date Range - Owner
    </p>
    <h5 class="mb-2 text-sm font-bold leading-tight text-neutral-800 dark:text-neutral-50">
        Price per night
    </h5>
</div> 
</div>
</div>
--}}


  
  

  