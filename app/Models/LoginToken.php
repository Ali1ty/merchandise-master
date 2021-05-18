<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mail;
use Kavenegar;
use DB;
use Redirect;
use Carbon\Carbon;

class LoginToken extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'token';
    }


    public static function generateFor(User $user)
    {
        $lastAttempt = LoginToken::where('user_id', '=', $user->id)->first();
        
        if (!empty($lastAttempt)) {
            if (Carbon::now()->diffInMinutes($lastAttempt->updated_at) < 2) {
                return Redirect::back()->withErrors(['کمتر از ۲ دقیقه از تلاش قبلی شما می‌گذرد']);
            } else {
                $lastAttempt->touch();
                return LoginToken::where('user_id', '=', $user->id)->first();
            }
        } else {
            return static::create([
                'user_id' => $user->id,
                'token' => mt_rand(10000, 99999)
            ]);
        }

    }

    public function send()
    {
        
        $url = $this->token;
        try {
            $sender = "10004346";
            $message = $url;
            $receptor = $this->user->phone;
            // $result = Kavenegar::Send($sender, $receptor, $message);
            $result = Kavenegar::VerifyLookup($receptor, $message, null, null, 'farno-auth');
        } catch (\Kavenegar\Exceptions\ApiException $e) {
            return Redirect::back()->withErrors(['error', $e->errorMessage()]);
        } catch (\Kavenegar\Exceptions\HttpException $e) {
            return Redirect::back()->withErrors(['error', $e->errorMessage()]);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
