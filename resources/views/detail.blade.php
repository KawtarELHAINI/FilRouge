@extends('layout')
@include('partials.navbar')

<div class="bg-black">
    <div class="pt-6">
      <nav aria-label="Breadcrumb">
        <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <li>
            <div class="flex items-center">
              <a href="#" class="mr-2 text-sm font-medium text-white">{{ $annonce->title}}</a>
           
            </div>
          </li>
        
        </ol>
      </nav>
  
<div class="max-w-2xl mx-auto mt-20">

	<div>
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <div  data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-white">First Slide</span>
                <img src="{{asset('images/' . $annonce->image) }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            
        </div>
       
    </div>

	
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>


  
      <!-- Product info -->
      <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
        <div class="lg:col-span-2 lg:border-r lg:border-white lg:pr-8">
          <h1 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">{{ $annonce->title }}</h1>
        </div>
  
        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
          <h2 class="sr-only">Product information</h2>
          <p class="text-3xl tracking-tight text-white"> {{ $annonce->price }} MAD day</p>
  
          <form class="mt-10">
            <!-- Colors -->
            <div>
              <h2 class="text-xl font-medium text-white pb-5"></h2>
  
        <div class="grid grid-rows-3 grid-flow-col gap-2">
         
        <img class="h-20 w-20 flex-none rounded-full bg-gray-50 row-span-3" src="{{ $annonce->user->photo }}" alt="">
        
            <h2 class="text-xl font-bold text-gray-600 col-span-5">{{ $annonce->user->name }}</h2>
            <h3 class="text-sm font-medium text-gray-600 col-span-5">{{ $annonce->user->email }}</h3>
            
        </div>
        <a href="{{ route('annonces.reserveForm', ['id' => $annonce->id]) }}"><button type="button" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-yellow-600 px-8 py-3 text-base font-medium text-white hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">Reserve</button></a>
<a href="{{ route ('home')}}"><button    type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-yellow-600 px-8 py-3 text-base font-medium text-white hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">Go back</button></a> 

      </form>
        </div>
  
        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
          <div>
            <h3 class="sr-only">Description</h3>
  
            <div class="space-y-6">
              <p class="text-base text-gray-900">{{ $annonce->location }}</p>
            </div>
          </div>
  
          <div class="mt-10">
            <h3 class="text-sm font-medium text-white">Highlights</h3>
  
            <div class="mt-4">
              <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                <li class="text-white"><span class="text-white">Hand cut and sewn locally</span></li>
                <li class="text-white"><span class="text-white">Dyed with our proprietary colors</span></li>
                <li class="text-white"><span class="text-white">Pre-washed &amp; pre-shrunk</span></li>
                <li class="text-white"><span class="text-white">Ultra-soft 100% cotton</span></li>
              </ul>
            </div>
          </div>
  
          <div class="mt-10">
            <h2 class="text-sm font-medium text-white">Details</h2>
  
            <div class="mt-4 space-y-6">
              <p class="text-sm text-white">{{ $annonce->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  
  