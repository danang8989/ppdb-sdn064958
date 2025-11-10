<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\{CalonSiswa, Pendaftaran, TahunAjaranAktif};

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
        $user = User::create([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_level' => 'User'
        ]);
        
        $calon_siswa = CalonSiswa::create([
            'nama_lengkap' => $request->nama_lengkap,
            'user_id' => $user->id
        ]);
        
        $tahun_ajaran = TahunAjaranAktif::first();

        $calon_siswa = Pendaftaran::create([
            'siswa_id' => $calon_siswa->id,
            'tahun_ajaran' => $tahun_ajaran->tahun_ajar,
            'jalur' => null,
            'status' => 'menunggu'
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('admin.dashboard', absolute: false));
    }
}
