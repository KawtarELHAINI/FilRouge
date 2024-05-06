

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
    <body class="antialiased">
    <section >
        <div class="banner fixed inset-0 z-[-40]"> <video autoplay muted loop> <source src="images/car3.mp4" type="video/mp4"> </video> </div>

        <div class="h-screen flex items-center justify-center ">

            <div class="bg-gray-200 py-5 px-8 border-t-4 border-gray-700 rounded-md shadow-lg ">
                <div class="flex items-center">
                <h2 class="text-3xl text-yellow-800 mb-3"> <strong class="block font-extrabold text-[#f5b754] text-4xl mt-2"> LOGIN </strong>
               
                    </div>
                

               
                <form class="mt-6" action="{{route('login')}}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-gray-700">Email Address</label>
                        <input type="email" name="loginemail"  placeholder="Enter Email Address"
                        class="w-full p-2 mt-1 bg-gray-200 rounded-md focus:outline-none" autofocus autocomplete>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="loginpassword"  placeholder="Enter Password" minlength="6"
                        class="w-full p-2 mt-1 bg-gray-200 rounded-md focus:outline-none">
                    </div>

                    <button type="submit"          
                    class="border-none bg-yellow-600 py-2 px-3 text-white roudend-sm w-full mt-2 rounded-md hover:bg-yellow-700 mb-5" 
                    >Log In</button>

                    <p class="mt-2 text-sm text hover:text">
                        <a href="">Forgot your password? Reset it here.</a>
                    </p>
                </form>

                <hr class="my-6 border-gray-300 w-full">
                <p class="mt-8">You don't have an account? <a href="/register"
                        class="text- hover:text font-semibold">REGISTER Or </a></p>
                         <a href="/" class="text- hover:text font-semibold">GO BACK</a>
            </div>
        </div>
    </section>

