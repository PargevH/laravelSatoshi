<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28-Sep-18
 * Time: 2:33 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Pdazcom\Referrals\Models\ReferralLink;
use Slack;

class ReferralController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $referralLink = ReferralLink::where('user_id', $user->id)->first()->code;
        return view('referral')->with('referralLink', $referralLink);
    }

}