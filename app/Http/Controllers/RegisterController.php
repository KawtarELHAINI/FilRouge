<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Repositories\UserRepositoryInterface;

class RegisterController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(RegisterRequest $request)
    {
        $incomingFields = $request->validated();

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/users';
        $request->image->move($path, $file_name);

        $user = $this->userRepository->create($incomingFields);

        if ($incomingFields['role'] === 'client' || $incomingFields['role'] === 'renter' || $incomingFields['role'] === 'admin') {
            return redirect('login');
        } else {
            return redirect('/login')->with('error', 'Invalid role');
        }
    }
}
