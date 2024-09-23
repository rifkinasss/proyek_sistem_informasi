<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function admin()
    {
        $admins = User::where('role', 'admin')->get();
        return view('Super-Admin.admin.index', compact('admins'));
    }

    public function createAdmin(Request $request)
    {
        try {
            User::create([
                'nip' => $request->nip,
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'admin',
            ]);
            return redirect()->route('user-management.admin')->with('success', 'Data mahasiswa berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->route('user-management.admin')->with('error', 'Gagal menambahkan data mahasiswa: ' . $e->getMessage());
        }
    }

    public function penduduk()
    {
        return view('Super-Admin.penduduk.index');
    }
}
