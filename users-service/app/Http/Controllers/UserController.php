<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->json()->all();

        // Save data to the database or log file
        DB::table('users')->insert($data);

        // Trigger event
        Event::dispatch('user.created', $data);

        return response()->json(['message' => 'User created successfully']);
    }
}
