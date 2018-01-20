<?php

namespace Fortross\Http\Controllers;

use Illuminate\Http\Request;
use Fortross\User;

class PageController extends Controller
{
    public function WhoWeAre(Request $request)
    {
        return response()->view('user/whoWeAre');
    }

    public function OurStory(Request $request)
    {
        return response()->view('user/ourStory');
    }

    public function Team(Request $request)
    {
        return response()->view('user/team');
    }

    public function Execution(Request $request)
    {
        return response()->view('user/execution');
    }

    public function Advisory(Request $request)
    {
        return response()->view('user/advisory');
    }

    public function Descretery(Request $request)
    {
        return response()->view('user/descretery');
    }

    public function Trading(Request $request)
    {
        return response()->view('user/trading');
    }

    public function Financing(Request $request)
    {
        return response()->view('user/financing');
    }

    public function WhyFortross(Request $request)
    {
        return response()->view('user/whyFortross');
    }

    public function OurProcesses(Request $request)
    {
        return response()->view('user/ourProcesses');
    }

    public function OurPhilosophy(Request $request)
    {
        return response()->view('user/ourPhilosophy');
    }

    public function RiskManagement(Request $request)
    {
        return response()->view('user/riskManagement');
    }

    public function Contacts(Request $request)
    {
        return response()->view('user/contacts');
    }

    public function users(Request $request)
    {
    	$users = User::where('name','user')->get();
        return response()->view('admin/users',['users'=>$users]);
    }
}
