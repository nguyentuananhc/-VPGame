<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Game;
use Illuminate\Http\Request;

class VPBankController extends Controller
{
    private $customer;

    public function __construct(Game $customer){
        $this->customer = $customer;
    }

    public function getUser(Request $request){
        $credentials = $request->only('customer_id');
        $customer = Game::where('customer_id', '=', $credentials['customer_id'])->first();
        if ($player === null) {
            return response()->json([
                'status'=> 403,
                'message'=> 'Get user information not successfully',
                'data'=>$customer
            ]);
        }
        return response()->json([
            'status'=> 200,
            'message'=> 'Get user informationin successfully',
            'data'=>$customer
        ]);
    }

}