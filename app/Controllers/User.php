<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        // Gunakan getMethod() dengan parameter true untuk mendapatkan string uppercase 'POST'
        if ($this->request->getMethod(true) === 'POST') {
            $model = new UserModel();
            
            // Ambil input dengan helper getPost
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Cari user berdasarkan username/email
            $user = $model->where('username', $username)->first();

            if ($user) {
                // Pastikan password di database benar-benar teks biasa 'admin123'
                // Jika nanti pakai password_hash, gunakan: password_verify($password, $user['password'])
                if ($password === $user['password']) {
                    
                    // Siapkan Session
                    $sessionData = [
                        'username'  => $user['username'],
                        'role'      => $user['role'], 
                        'logged_in' => true
                    ];
                    
                    session()->set($sessionData);

                    // Berikan pesan sukses (Flashdata)
                    session()->setFlashdata('success', 'Selamat datang kembali!');
                    
                    return redirect()->to('/artikel');
                } else {
                    // Password salah
                    return redirect()->back()->withInput()->with('error', 'Password yang Anda masukkan salah!');
                }
            } else {
                // Username tidak ditemukan
                return redirect()->back()->withInput()->with('error', 'Email atau Username tidak terdaftar!');
            }
        }

        // Tampilkan halaman login jika bukan request POST
        return view('user/login', ['title' => 'Login System']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/user/login')->with('success', 'Anda telah berhasil keluar.');
    }
}