@include('partials.sidebar')

<div class="min-h-screen bg-yellow-400">
    
    <div class="p-4 xl:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
          <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
            <div class="flex items-center">
              <div class="mr-auto md:mr-4 md:w-56">
                <!-- <div class="relative w-full min-w-[200px] h-10">
                  <input class="peer w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500" placeholder=" ">
                  <label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Type here</label>
                </div> -->
              </div>
              <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden" type="button">
                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </button>
              <a href="#">
                
                  <button type="button" class="flex text-sm  md:me-0  " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                     
                      <!-- <img class="mt-3 w-8 h-8 rounded-full" src="img/pexels-designecologist-2526105 copy.jpg" alt="user photo"> -->
                     
                  
                    <div class="p-2 md:block text-left">
                      <h2 class="text-sm font-semibold text-gray-800"></h2>
                      <p class="text-xs text-gray-500"></p>
                  </div>
              </button>
                
                 
              </a>
            </div>
          </div>
        </nav>

<!-- <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-8">
        <div class="w-full mb-6 lg:mb-0">
          <h1 class="sm:text-4xl text-5xl font-medium title-font mb-2 text-gray-900">Statistic</h1>
          <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>
      </div>
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 sm:w-1/4 w-1/2">
          <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white"></h2>
              <p class="leading-relaxed text-gray-100 font-bold">Users</p>
          </div>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white"></h2>
              <p class="leading-relaxed text-gray-100 font-bold">events</p>
          </div>
        </div>
        <div class="p-4 sm:w-1/4 w-1/2">
          <div class="bg-indigo-500 rounded-lg p-2 xl:p-6">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white"></h2>
              <p class="leading-relaxed text-gray-100 font-bold">reservation</p>
          </div>
        </div>
       
      </div>
    </div>
  </section>  -->
  <main >

  <div class="grid grid-cols-2 gap-2 my-40 mx-20">

    <div class="bg-yellow-600 text-white p-6 rounded-md">
        <div class="flex items-center justify-between ">
            <span>
                <svg class="w-12 h-12 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                        clip-rule="evenodd" />
                </svg>

            </span>
            <h4 class="text-bold text-2xl">Users</h4>
        </div>
        <div class="mt-5">
            <span class="text-4xl">
            <p class="py-4 text-3xl ml-5">{{$usersCount}}</p>

            </span>
        </div>
    </div>
    <div class="bg-yellow-600 text-white p-6 rounded-md">
        <div class="flex items-center justify-between ">
            <span>
               <i class="fa-solid fa-people-roof text-[40px]"></i>
            </span>
            <h4 class="text-bold text-2xl">Renter</h4>
        </div>
        <div class="mt-5">
            <span class="text-4xl">
               
            <p class="py-4 text-3xl ml-5">{{$advertisersCount}}</p>

            </span>
        </div>
    </div>
    <div class="bg-yellow-600 text-white p-6 rounded-md">
        <div class="flex items-center justify-between ">
            <span>
                <i class="fa-solid fa-person text-[40px]"></i>

            </span>
            <h4 class="text-bold text-2xl">Client</h4>
        </div>
        <div class="mt-5">
            <span class="text-4xl">
            <p class="py-4 text-3xl ml-5">{{$usersCount}}</p>

            </span>
        </div>
    </div>
    <div class="bg-yellow-600 text-white p-6 rounded-md">
        <div class="flex items-center justify-between ">
            <span>
                <i class="fa-solid fa-hand text-[40px]"></i>

            </span>
            <h4 class="text-bold text-2xl">Reservation</h4>
        </div>
        <div class="mt-5">
            <span class="text-4xl">
            <p class="py-4 text-3xl ml-5">{{$totalcategories}}</p>

            </span>
        </div>
    </div>
    <div class="bg-yellow-600 text-white p-6 rounded-md">
        <div class="flex items-center justify-between ">
            <span>

                <i class="fa-solid fa-calendar-check text-[40px]"></i>

            </span>
            <h4 class="text-bold text-2xl">Cars</h4>
        </div>
        <div class="mt-5">
            <span class="text-4xl">
            <p class="py-4 text-3xl ml-5">{{$totalAnnonce}}</p>

            </span>
        </div>
    </div>

</div>
</main>

  </body>
  </html>y