<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use function Termwind\render;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        $users = User::all();

        return inertia::render('Index', [
            'users' => $users
        ]);
    }

    public function add()
    {
        return inertia::render('Add');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'string',
           'email' => 'string|email|unique:users,email',
           'phone' => 'string',
            'zipcode' => 'string',
            'state' => 'string',
            'city' => 'string',
            'district' => 'string',
            'street' => 'string',
            'number' => 'string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $user->address()->create([
            'zipcode' => $request->zipcode,
            'state' => $request->state,
            'city' => $request->city,
            'district' => $request->district,
            'street' => $request->street,
            'number' => $request->number
        ]);
    }

    public function edit($id)
    {
        $user = User::whereId($id)->with('address')->first();

        return Inertia::render('Edit', [
            'user' => $user
        ]);
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
//        dd($request->all());
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $address = $request->address;
        $user->address()->update([
            'zipcode' => $address['zipcode'],
            'state' => $address['state'],
            'city' => $address['city'],
            'district' => $address['district'],
            'street' => $address['street'],
            'number' => $address['number']
        ]);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
    }

}
