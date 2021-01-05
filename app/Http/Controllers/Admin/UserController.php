<?php

namespace App\Http\Controllers\Admin;

use App\Diet;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->where('id','!=',Auth::id())->paginate(5);
        return view('admin.user', ['users' => $users]);
    }

    public function toggleAdmin(User $user)
    {
        if ($user->id != Auth::id()) {
            $user->is_admin = !$user->is_admin;
            $user->save();
            return redirect()->back()->with('success', 'Права изменены');
        } else {
            return redirect()->route('updateProfile')->with('error', 'Ошибка изменение прав');
        }
    }
    public function destroy(User $user)
    {
        $diet = Diet::query()->where('user_id', $user->id)->delete();
        $user->delete();
        return redirect()->back()->with('success', 'Прользователь удален!');
    }
}
