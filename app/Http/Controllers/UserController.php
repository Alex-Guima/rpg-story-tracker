<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate();

        return UserResource::collection($users);
    }

    public function store(StoreUpdateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        auth()->login($user);

        return to_route('login');

    }

    public function create()
    {
        return Inertia::render('SignUpPage');
    }

    public function edit(User $user)
    {
        return Inertia::render('ProfilePage', [
            'user' => new UserResource($user)
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
        ->with('message', 'User deleted successfully.');
    }

    public function update(StoreUpdateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);

        $user = User::update($data);

        return UserResource::collection($user);
    }

    public function show(User $user)
    {
        return UserResource::collection($user);
    }
}
