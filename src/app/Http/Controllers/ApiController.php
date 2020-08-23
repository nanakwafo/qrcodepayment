<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getAllPayments() {
        // logic to get all students goes here
    }

    public function createPayment(Request $request) {
        // logic to create a student record goes here
        $payment = new Payment();
        $payment->userId = $request->userId;
        $payment->amount = $request->amount;
        $payment->save();

        return response()->json([
            "message" => "payment record successfully"
        ], 201);
    }


    public function getPayment($id) {
        // logic to get a student record goes here
    }

    public function updatePayment(Request $request, $id) {
        // logic to update a student record goes here
    }

    public function deletePayment ($id) {
        // logic to delete a student record goes here
    }
}
