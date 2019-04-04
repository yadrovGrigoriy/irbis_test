<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Mail\UserWelcome;
use Illuminate\Http\Request;
use App\User;
use App\Invite;
use Mail;

class InviteController extends Controller
{
    public function emailSend(Request $request){
        
        $email = $request->email;
        $code = bin2hex(openssl_random_pseudo_bytes(16));
        $invite = Invite::create([
            'email' => $email,
            'code' => $code
        ]);
        Mail::to($email)->send(new UserWelcome($email, $code));
        echo "Сообщение с ссылкой для входа  придет на $email";
    }

    public function handleInvite($invite){
        
        $inviteItem = Invite::where('code', $invite)->first();
        if(is_null($inviteItem)){
            abort(404);
        }
        $findUser = User::where('email', $inviteItem->email)->first();
        if(is_null($findUser)){
            $findUser = User::create(['email' => $inviteItem->email, 'name' => $inviteItem->email]);
        }
        Auth::login($findUser);
        $inviteItem->delete();
        return redirect('/home');
    } 
}
