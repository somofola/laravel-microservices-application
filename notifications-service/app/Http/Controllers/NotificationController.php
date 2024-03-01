<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->json()->all();

        // Save data to log file
        Log::info('Notification received: ' . json_encode($data));

        return response()->json(['message' => 'Notification received successfully']);
    }
}
