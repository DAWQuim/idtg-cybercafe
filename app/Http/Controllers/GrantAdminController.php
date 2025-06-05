<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GrantAdminController extends Controller
{
    public function store(string $id)
    {
        $user = User::find($id);
        $user->admin = true;
        $user->save();

        return redirect("/");
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->admin = false;
        $user->save();

        return redirect("/");
    }
}
