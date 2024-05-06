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


  
      <div id="annonce-wrapper" class="grid grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      
    
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

  

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
     $(document).ready(function(){

        $('#voice-search').on('keyup', function(){
            $.ajax({
                type:"GET",
                url: '/home',
                data: {search: $('#voice-search').val()},
                success: function(data) {
                    
                    $('#annonce-wrapper').children().remove()
                    console.log(data);
                    data.forEach((annonce) => {
                        let html = `<div class="max-w-sm bg-black border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        
                                        <a href="#">
                                        <img class="rounded-t-lg object-fill h-48 w-full" src=${'http://127.0.0.1:8000/images/' + annonce.image} alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." />
                                    </a>
                                    <div class="p-5">
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white== pb-5">${annonce.title}</[>
                                        </a>
                                    
                                        <div class="grid grid-cols-1 gap-2">
                                        <p class="mb-3 font-normal text-white dark:text-white  rounded drop-shadow-md px-5 py-0.5 ">Price : ${ annonce.price }</p>
                                        <p class="mb-3 font-normal text-white dark:text-white rounded drop-shadow-md px-5 py-0.5">contact : 0645982736</p>
                                        <p class="mb-3 font-normal text-white dark:text-white  px-5 py-0.5">April 14</p>
                                        </div>
                                        <a href="${ 'http://127.0.0.1:8000/details/' + annonce.id }" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                    
                                    </div>
                                </div>`
                        $('#annonce-wrapper').append(html)
                    })
                }
            });
        })
    })
  </script>



























  

  