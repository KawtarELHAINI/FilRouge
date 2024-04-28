<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Repositories\UserRepositoryInterface;

class LoginController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function show()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $incomingFields = $request->validated();
        
        $user = $this->userRepository->findByEmail($incomingFields['loginemail']);
        


        if ($user && auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();

            if ($user->role === 'client') {
                return redirect('/welcome');
            } elseif ($user->role === 'renter') {
                return redirect('/landlord.dashboard');
            } elseif ($user->role === 'admin') {
                return redirect('/admin/statistiques');
            } else {
                auth()->logout();
                return redirect('/login')->with('error', 'Invalid role');
            }
        } else {
            return back()->withErrors(['login' => 'Invalid login credentials']);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
