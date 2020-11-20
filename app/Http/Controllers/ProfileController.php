<?php

namespace App\Http\Controllers;

use App\Diet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $errors = [];
        if ($request->isMethod('post')) {
            if (Hash::check($request->post('password'), $user->password)) {
                $user->fill([
                    'name' => $request->post('name'),
                    'email' => $request->post('email'),
                    'weight' => $request->post('weight')
                    ]);

                    $user->save();

                if ($request->post('newPassword') === $request->post('newPasswordConfirm') & !($request->post('newPassword') == "") ) {
                    $user->fill([
                        'name' => $request->post('name'),
                        'password' => Hash::make($request->post('newPassword')),
                        'email' => $request->post('email'),
                        'weight' => $request->post('weight')
                    ]);

                    $user->save();

                    $request->session()->flash('success', 'Данные пользователя изменены!');
                } else {$errors['password'][] = "Неверно введен текущий пароль";}}
                else {
                    $errors['password'][] = "Неверно введено подтверждение пароля";
                    return redirect()->route('updateProfile')->withErrors($errors);

                }
            }

        return view( 'profile',[
            'user' => $user,
        ]);
    }
}
