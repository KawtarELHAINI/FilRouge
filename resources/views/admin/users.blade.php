@dd($users)
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
<header class="p-4 bg-gray-800 text-white">
<div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
    <!-- Logo or site name can go here -->

    
    <nav class="flex flex-col md:flex-row md:space-x-4 items-center">
      
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-medium rounded-lg text-sm px-5 py-2.5">
                Log out
            </button>
        </form>
    </nav>
</div>
</header>
    <div class="container mx-auto p-8 overflow-x-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">ALL USERS</h1>
        </div>

        <div class="overflow-x-auto">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    #ID
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    FIRSTNAME
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    LASTNAME
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    EMAIL
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    IMAGE
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    PHONE
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ROLE
                                </th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    STATUT
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->firstname }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->lastname }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="{{ asset($user->image) }}" alt="User Image"
                                            class="w-16 h-16 object-cover rounded-full">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->phone }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($user->role === 'admin')
                                            <span
                                                class="text-red-500 font-bold rounded-full bg-red-100 py-1 px-3">{{ $user->role }}</span>
                                        @elseif ($user->role === 'renter')
                                            <span
                                                class="text-green-500 font-bold rounded-full bg-green-100 py-1 px-3">{{ $user->role }}</span>
                                        @elseif ($user->role === 'client')
                                            <span
                                                class="text-orange-500 font-bold rounded-full bg-orange-100 py-1 px-3">{{ $user->role }}</span>
                                        @else
                                            {{ $user->role }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($user->role !== 'admin')
                                            <a href="{{ route('users.update', $user->id) }}"
                                                class="inline-block px-4 py-2 leading-none rounded {{ $user->is_banned ? 'bg-red-500 text-white' : 'bg-green-500 text-white' }}">
                                                {{ $user->is_banned ? 'Unban' : 'Ban' }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="py-2 px-4" colspan="8">
                                        <h1 class="text-center text-gray-500">No users to show</h1>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
