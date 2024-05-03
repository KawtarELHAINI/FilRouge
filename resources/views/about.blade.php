





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
<!-- follow me on twitter @asad_codes -->

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
          <li><a class="hover:text-gray-200" href="#">Home</a></li>
          <li><a class="hover:text-gray-200" href="#">Catagory</a></li>
          <li><a class="hover:text-gray-200" href="#">Collections</a></li>
          <li><a class="hover:text-gray-200" href="#">Contact Us</a></li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
          <a class="hover:text-gray-200" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </a>
          <a class="flex items-center hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            <span class="flex absolute -mt-5 ml-4">
              <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                </span>
              </span>
          </a>
          <!-- Sign In / Register      -->
          <a class="flex items-center hover:text-gray-200" href="#">
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
<div class="absolute bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg"/>
        </a>
    </div>
</div>


<section class="bg-gray-50 py-24"> 
                <div class="container mx-auto px-4"> 
                    <div class="-mx-4 flex flex-wrap items-center mb-6"> 
                        <div class="px-4 w-full md:w-10/12"> 
                            <h2 class="font-medium mb-1 text-yellow-500 text-xl">Our Top Cars</h2>
                            <h3 class="capitalize font-bold mb-4 text-4xl text-gray-900">Cars for all your needs</h3>
                            <div class="bg-yellow-500 mb-6 pb-1 w-2/12"></div>                             
                        </div>                         
                    </div>
                    <div class="-mx-3 flex flex-wrap justify-center mb-12"> 
                        <div class="p-3 w-full md:w-6/12 lg:w-4/12"> 
                            <div class="bg-white border shadow-md text-gray-500"> 
                                <a href="#"><img src="https://images.unsplash.com/photo-1575090536203-2a6193126514?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDN8fGh5dW5kYWl8ZW58MHx8fHwxNjMxNjk3ODI1&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=450&fit=crop" class="hover:opacity-90 w-full" alt="..." width="600" height="450"/></a>
                                <div class="p-6">
                                    <h4 class="font-bold mb-2 text-gray-900 text-xl"><a href="#" class="hover:text-gray-500">Hyundai Creta 2017</a></h4>
                                    <p class="mb-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <hr class="border-gray-200 my-4">
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center py-1 space-x-1">
                                            <span>4.7</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="text-yellow-500">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
                                                </g>
                                            </svg>
                                            <span>(245 reviews)</span>
                                        </div>
                                        <p class="font-bold text-gray-900">$40/day</p>
                                    </div>
                                </div>                                 
                            </div>                             
                        </div>
                        <div class="p-3 w-full md:w-6/12 lg:w-4/12"> 
                            <div class="bg-white border shadow-md text-gray-500"> 
                                <a href="#"><img src="https://images.unsplash.com/photo-1619976215249-0b68cef412b0?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDE2fHxob25kYXxlbnwwfHx8fDE2MzE2OTcxODY&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=450&fit=crop" class="hover:opacity-90 w-full" alt="..." width="600" height="450"/></a>
                                <div class="p-6">
                                    <h4 class="font-bold mb-2 text-gray-900 text-xl"><a href="#" class="hover:text-gray-500">Honda Accord 2018</a></h4>
                                    <p class="mb-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <hr class="border-gray-200 my-4">
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center py-1 space-x-1">
                                            <span>4.4</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="text-yellow-500">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
                                                </g>
                                            </svg>
                                            <span>(654 reviews)</span>
                                        </div>
                                        <p class="font-bold text-gray-900">$65/day</p>
                                    </div>
                                </div>                                 
                            </div>                             
                        </div>
                        <div class="p-3 w-full md:w-6/12 lg:w-4/12"> 
                            <div class="bg-white border shadow-md text-gray-500"> 
                                <a href="#"><img src="https://images.unsplash.com/photo-1554666869-04dafcdc7a48?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDQxN3x8Y2FyJTIwc3V2fGVufDB8fHx8MTYzMTY4NTkwNg&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=450&fit=crop" class="hover:opacity-90 w-full" alt="..." width="600" height="450"/></a>
                                <div class="p-6">
                                    <h4 class="font-bold mb-2 text-gray-900 text-xl"><a href="#" class="hover:text-gray-500">BMW M3 2010</a></h4>
                                    <p class="mb-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <hr class="border-gray-200 my-4">
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center py-1 space-x-1">
                                            <span>4.9</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="text-yellow-500">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
                                                </g>
                                            </svg>
                                            <span>(546 reviews)</span>
                                        </div>
                                        <p class="font-bold text-gray-900">$45/day</p>
                                    </div>
                                </div>                                 
                            </div>                             
                        </div>
                        <div class="p-3 w-full md:w-6/12 lg:w-4/12"> 
                            <div class="bg-white border shadow-md text-gray-500"> 
                                <a href="#"><img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDMwfHxzcG9ydHMlMjBjYXJ8ZW58MHx8fHwxNjMxNjg3MzQ4&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=450&fit=crop" class="hover:opacity-90 w-full" alt="..." width="600" height="450"/></a>
                                <div class="p-6">
                                    <h4 class="font-bold mb-2 text-gray-900 text-xl"><a href="#" class="hover:text-gray-500">Chevrolet Equinox 2005</a></h4>
                                    <p class="mb-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <hr class="border-gray-200 my-4">
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center py-1 space-x-1">
                                            <span>4.2</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="text-yellow-500">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
                                                </g>
                                            </svg>
                                            <span>(234 reviews)</span>
                                        </div>
                                        <p class="font-bold text-gray-900">$55/day</p>
                                    </div>
                                </div>                                 
                            </div>                             
                        </div>
                        <div class="p-3 w-full md:w-6/12 lg:w-4/12"> 
                            <div class="bg-white border shadow-md text-gray-500"> 
                                <a href="#"><img src="https://images.unsplash.com/photo-1546768292-fb12f6c92568?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDk5fHxjYXIlMjBjb252ZXJ0aWJsZXxlbnwwfHx8fDE2MzE2ODUxMzA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=450&fit=crop" class="hover:opacity-90 w-full" alt="..." width="600" height="450"/></a>
                                <div class="p-6">
                                    <h4 class="font-bold mb-2 text-gray-900 text-xl"><a href="#" class="hover:text-gray-500">Ferrari 458 Spider 2015</a></h4>
                                    <p class="mb-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <hr class="border-gray-200 my-4">
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center py-1 space-x-1">
                                            <span>4.7</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="text-yellow-500">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
                                                </g>
                                            </svg>
                                            <span>(346 reviews)</span>
                                        </div>
                                        <p class="font-bold text-gray-900">$75/day</p>
                                    </div>
                                </div>                                 
                            </div>                             
                        </div>
                        <div class="p-3 w-full md:w-6/12 lg:w-4/12"> 
                            <div class="bg-white border shadow-md text-gray-500"> 
                                <a href="#"><img src="https://images.unsplash.com/photo-1625231334168-35067f8853ed?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDU2fHxzcG9ydHMlMjBjYXJ8ZW58MHx8fHwxNjMxNjg3OTY1&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=600&h=450&fit=crop" class="hover:opacity-90 w-full" alt="..." width="600" height="450"/></a>
                                <div class="p-6">
                                    <h4 class="font-bold mb-2 text-gray-900 text-xl"><a href="#" class="hover:text-gray-500">Ford Mustang Shelby 2017</a></h4>
                                    <p class="mb-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <hr class="border-gray-200 my-4">
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center py-1 space-x-1">
                                            <span>4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.125em" height="1.125em" class="text-yellow-500">
                                                <g>
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M12 18.26l-7.053 3.948 1.575-7.928L.587 8.792l8.027-.952L12 .5l3.386 7.34 8.027.952-5.935 5.488 1.575 7.928z"></path>
                                                </g>
                                            </svg>
                                            <span>(587 reviews)</span>
                                        </div>
                                        <p class="font-bold text-gray-900">$90/day</p>
                                    </div>
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>
                    <div class="text-center">
                        <a href="/login" class="bg-yellow-500 hover:bg-yellow-600 inline-block px-6 py-2 text-white">View All Cars</a>
                    </div>
                </div>                 
            </section>

            
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