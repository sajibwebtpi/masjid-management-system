<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\OtpMail;
use Illuminate\Http\Request;
use App\Models\PasswordResetOtp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class MailSendingController extends Controller
{
    public function sendMail(Request $request)
    {
        $emailTo = $request->input('email');
        $emailSubject = "Test Email from Laravel";
        $otp = rand(100000,999999);

        $data = $request->validate([
            'email' => 'required|email|exists:users,email', 
        ]);
        
        // $user = User::where('email', $data['email'])->first();

            PasswordResetOtp::updateOrCreate(
                ['email' => $data['email']],
                [
                    'otp' =>$otp,
                    'expires_at' => Carbon::now()->addMinutes(5),
                ]
                );

        Mail::to($emailTo)->send(new OtpMail($emailSubject, $otp));
return view('email.otp-varify', ['email' => $emailTo])->with('success', 'OTP sent to your email!');
    }

    public function verifyOtp(Request $request)
    {


        $otp = $request->input('otp');
        $email = $request->input('email');
        $otpData = PasswordResetOtp::where('email', $email)->first();

        if(!$otpData || $otpData->otp !== $otp){
            return back()->withErrors('errors' , 'Invalid OTP. Please try again.');
        }

        if(Carbon::now()->isAfter($otpData->expires_at)){
            return back()->withErrors('errors' , 'OTP has expired. Please request a new one');
        }

        return view('email.reset-password', ['email' => $email])->with('success' , 'OTP verified successfully.');
    }

    public function resetPassword(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:4|confirmed',
        ]);

        $user = User::where('email' , $data['email'])->first();

        if(!$user){
            return back()->withErrors('errors' , 'User not found.');
        }

        else{
            $user->update([
                'password' => Hash::make($data['password']),
            ]);
            PasswordResetOtp::where('email' , $data['email'])->delete();
            return redirect()->route('login')->with('success' , 'Password has been reset successfully');
            }
       }
}