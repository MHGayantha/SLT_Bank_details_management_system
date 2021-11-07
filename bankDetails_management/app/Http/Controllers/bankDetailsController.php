<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bdetails;

class bankDetailsController extends Controller
{
    public function saveDetails(Request $request){
        $Bdetails1 = new Bdetails;
        $Bdetails2 = new Bdetails;
        $Bdetails3 = new Bdetails;
        $Bdetails4 = new Bdetails;

        $this->validate($request, [
            'branchCode' => 'required|max:20',
            'bankName' => 'required|max:20|min:5',
            'branchName' => 'required|max:20|min:5',
            'accountNo' => 'required|max:20|min:5',
        ]);
        $Bdetails1->branch_code=$request->branchCode;
        $Bdetails1->save();

        $Bdetails2->bank_name=$request->bankName;
        $Bdetails2->save();

        $Bdetails3->branch=$request->branchName;
        $Bdetails3->save();

        $Bdetails4->account_number=$request->accountNo;
        $Bdetails4->save();
        
        $data = Bdetails:: all();

        return view('bankdetails')->with('bankdetails',$data);
    }   
}
