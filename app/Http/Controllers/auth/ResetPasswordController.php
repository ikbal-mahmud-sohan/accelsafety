<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\EmailRequest;
use App\Http\Requests\auth\ResetPasswordRequest;
use App\Mail\ResetPasswordLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;  // Correct import statement

class ResetPasswordController extends Controller
{
    public function sendemail(EmailRequest $request)
    {
        // Correct usage of the URL facade
        $url = URL::temporarySignedRoute(
            'reset.password', 
            now()->addMinutes(30),  
            ['email' => $request->email]
        );
        $url = str_replace(env(key:'APP_URL'), env(key:'FRONTEND_URL'), $url);
        
        Mail::to($request->email)->send(new ResetPasswordLink($url));

        return response()->json([
            'message' => 'Mail sent'
        ]);
    }

    public function verifyemail(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            "message" => "Password reset successfully"
        ]);
    }
}
