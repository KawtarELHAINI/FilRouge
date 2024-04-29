@include('partials.sidebar')


<div class="min-h-screen bg-yellow-400">
  
    <div class="p-4 xl:ml-80">
        <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
            <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                <div class="flex items-center">
                    <div class="mr-auto md:mr-4 md:w-56"></div>
                    <div class="p-2 md:block text-left">
                        <h2 class="text-sm font-semibold text-gray-800"></h2>
                        <p class="text-xs text-gray-500"></p>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="mt-28 ml-36">
                <form class="max-w-md mx-auto" action="{{ route('users.search') }}" method="GET">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg shadow-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search users" required /> <!-- 2. Update input name -->
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">Search</button>
        </div>                </form>
                <div class="mt-20 grid gap-4">
                    <div class="uppercase font-bold text-2xl">
                        Users
                    </div>
                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border md:rounded-lg">
                                    <table class="min-w-full divide-y divide-teal-700">
                                        <thead class="bg-yellow-800">
                                        <tr>
                                 
                                 <th scope="col"
                                     class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                     Picture
                                 </th>

                                 <th scope="col"
                                     class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                     Name
                                 </th>

                                 <th scope="col"
                                     class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                     Email
                                 </th>
                                 <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">Role
                                 </th>

                                 <th scope="col"
                                     class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-white">
                                     Joined at
                                 </th>
                                 <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left
                                 rtl:text-right text-white">Updated at
                                 </th>

                                
                             </tr>        
                            </thead>
                            <tbody class="bg-white divide-y divide-yellow-200" id="users-container">
                                @foreach ($users as $user)
                                @if ($user->banned)
        <tr>
        <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
        <div>        
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{asset('images/' . $user->image) }}" alt="">
        </div>
        </td>
        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{$user->firstname}}{{$user->lastname}}</td>
        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{$user->email}}</td>
        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
        <div class="text-sm text-yellow-500 bg-yellow-500/20 w-fit px-4 py-1 rounded-2xl">{{$user->role}}</div>
        </td>
        <td class="px-4 py-4 text-sm whitespace-nowrap">{{$user->created_at}}</td>
        @if($user->role != 'admin')

        <td class="flex  gap-2 px-4 py-4 text-sm whitespace-nowrap text-center">
        <form action="{{ route('unban.user', ['userId' => $user->id]) }}" method="POST">
        @csrf
          @method('PUT')
          <button type="submit" class="mt-1 text-xs leading-5 text-red-500">Banned</button>

                                                </form>
                                                @endif
                                            </td>
      @else
    </tr>
    
    <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                <div>        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ asset($user->image) }}" alt="">
</div>
                                            </td>
        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{$user->firstname}}{{$user->lastname}}</td>
        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">{{$user->email}}</td>
        <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
        <div class="text-sm text-yellow-500 bg-yellow-500/20 w-fit px-4 py-1 rounded-2xl">{{$user->role}}</div>
        </td>
        <td class="px-4 py-4 text-sm whitespace-nowrap">{{$user->created_at}}</td>
        @if($user->role != 'admin')

        <td class="flex  gap-2 px-4 py-4 text-sm whitespace-nowrap text-center">
                                                <form action="{{ route('ban.user', ['userId' => $user->id]) }}" method="POST">
                                                @csrf
          @method('PUT')
          <button type="submit" class="text-sm text-yellow-500 bg-green-500/20 w-fit px-4 py-1 rounded-2xl">unBanned</button>

                                                </form>
                                                @endif
                                            </td>                 
  @endif
@endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
