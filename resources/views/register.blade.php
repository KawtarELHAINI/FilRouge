

   @extends('layouts.master')

@section('content')

                
<div class="min-h-screen  flex justify-center items-center bg-black">
  
    <div class="py-12 px-12 bg-yellow-400 rounded-2xl shadow-xl z-20">
    
        <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer bg-yellow-400">Create An Account</h1>
      
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex mb-6">
               
                <div class="w-1/3 px-2">
                    <label class="block mb-2 text-[#0037AE]" for="name">Name</label>
                    <input id="name"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-yellow-500"
                        type="text" name="name" value="{{old('name')}}">
                </div>
                <div class="w-1/3 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="email">Email</label>
                    <input id="email"
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-yellow-500"
                        type="email" name="email" value="{{old('email')}}">
                </div>
            </div>                    
            <div class="flex mb-6">
                <div class="w-1/2 pr-2">
                    <label class="block mb-2 text-[#0037AE]" for="password">Password</label>
                    <input
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-yellow-500"
                        type="password" name="password" value="{{old('password')}}">
                </div>
                <div class="w-1/2 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="cpassword"> Confirm Password</label>
                    <input
                        class="block text-sm py-3 px-4 rounded-lg w-full border outline-yellow-500"
                        type="password" name="password_confirmation">
                </div>
            </div>
            
            <div class="flex mb-6">
                <div class="w-2/5 pr-2">
                    <label class="block mb-2 text-[#0037AE] " for="image">Your Profile</label>
                    <input type="file" name="image" class="block text-sm py-3 px-4 rounded-lg w-full border outline-yellow-500">
                </div>
                <div class="w-2/5 px-2">
                    <label class="block mb-2 text-[#0037AE]" for="phone">Phone</label>
                    <input id="phone" class="block text-sm py-3 px-4 rounded-lg w-full border outline-yellow-500" type="number" name="phone" value="{{old('phone')}}">
                </div>
                <div class="w-1/5 pl-2">
                    <label class="block mb-2 text-[#0037AE]" for="role">Role</label>
                    <select name="role" class="block text-sm py-3 px-4 rounded-lg w-full border outline-yellow-500">
                        <option>Selection of roles:</option>
                        <option value="client">client</option>
                        <option value="renter">renter</option>
                    </select>
                </div>
            </div>
            <div>
                <input class="w-full py-2 text-xl text-white bg-black rounded-lg hover:bg-yellow-500 transition-all" type="submit" value="REGISTER"> <!-- Updated color to #0037AE and hover color to #004DBB -->
            </div>
        </form>
        <div class="text-center">
            <p class="text-[#0037AE]">Already have an account? <a href="/login" class="font-bold text-[#0037AE]">LOGIN HERE</a></p>
        </div>
    </div>
</div>
</div>
    <div class="w-40 h-40 absolute bg-yellow-300 rounded-full top-0 right-12 hidden md:block"></div>
    <div class="w-20 h-40 absolute bg-yellow-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block"></div>
  </div>
  
       
@endsection
