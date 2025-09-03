<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Hash ; 

class User extends Authenticatable
{

    protected $table = "user";
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

     public static function Signup()
    {

        $request = request();
        // Check if email already exists
        if (User::where('email', $request->email)->exists()) {
            notify()->error("Email already exists, please login.");                
            return redirect()->route('login');
        }
        

        // Create new user
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 2, // assuming you have role field in users table
        ]);

        // Login newly registered user
        User::login($user);

        // Redirect to dashboard
        return redirect()->route('hub');
    }


      public static function login($user=false)
    {
        $request = $user ?  $user : request();
        // Check if email exists
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            notify()->error("Email does not exsists . Please register first");
            return redirect()->route('login');
            
        }


        // Attempt login with credentials
        if (Auth::attempt([
            'email'    => $request->email,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();
        //    dd("welecome");
            // Redirect according to role
            // if ($user->role === '1') {
            //     return redirect()->route('admin.dashboard');
            // } elseif ($user->role === '2') {
            //     return redirect()->route('manager.dashboard');
            // }
            notify()->success("Welcome synopse");
            return redirect()->route('hub');
        }

        // If password does not match
        notify()->error("Invalid credentials");
        return redirect()->route('login');
        
    }


     public static function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}



