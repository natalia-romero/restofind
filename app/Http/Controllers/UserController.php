<?php

namespace App\Http\Controllers;

use App\Models\User;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, ToastrFactory $flasher)
    {
        $user->delete();
        $flasher->addSuccess('¡El usuario se ha eliminado con éxito!');
        return redirect(route('home.index'));
    }
}
