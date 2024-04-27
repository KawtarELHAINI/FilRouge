

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>


<div class="grid grid-cols-2 gap-y-10 ml-64 mt-32">

 <div class="container mx-auto">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-red-400 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Advertisers</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">{{$advertisersCount}}</p>
      <!-- <hr > -->
    </div>
  </div>

  <div class="container mx-auto">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-purple-900 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Clients</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">{{$usersCount}}</p>
      <!-- <hr > -->
    </div>
  </div>

  <div class="container mx-auto">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-blue-400 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Advertisements</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">{{$totalAnnonce}}</p>
      <!-- <hr > -->
    </div>
  </div>

  <div class="container mx-auto">
    <div class="w-72 bg-white max-w-xs mx-auto rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
      <div class="h-20 bg-yellow-100 flex items-center justify-between">
        <p class="mr-0 text-white text-lg pl-5">Categories</p>
      </div>
      <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
        <p>TOTAL</p>
      </div>
      <p class="py-4 text-3xl ml-5">{{$totalcategories}}</p>
      <!-- <hr > -->
    </div>
  </div>

</div>
</body>