<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        return User::all();
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }
    public function update($id)
    {
        $user = User::where('id',$id)->firstOrFail();

        $user->update([
            'fname' => request()->get('fname'),
            'lname' => request()->get('lname'),
            'email' => request()->get('email'),
        ]);
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
    }

    public function store()
    {
        return User::create(request()->all());
    }

}

