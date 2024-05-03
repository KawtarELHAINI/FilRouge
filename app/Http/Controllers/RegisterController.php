<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200', 'confirmed'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'phone' => ['required', 'numeric'],
            'role' => ['required', Rule::in(['client', 'renter', 'admin'])],
        ]);
        
        // dd($incomingFields);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
    
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
            // Move the image to the public images directory
            $imageFile->move(public_path('images'), $imageName);
    
            // Store the relative path to the image in the database
            $incomingFields['image'] = 'images/' . $imageName;
        }
    
        $user = User::create($incomingFields);
    
        if (in_array($incomingFields['role'], ['client', 'renter', 'admin'])) {
            return redirect('login');
        } else { 
            return redirect('/login')->with('error', 'Invalid role');
        }
    }
}
