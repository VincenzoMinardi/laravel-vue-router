<?php

namespace App\Http\Controllers\Api;

use App\Models\Email;
use App\Mail\NewContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    private $validations = [
        'name'          => 'required|string|max:150',
        'email'         => 'required|email|max:300',
        'message'       => 'required|string',
    ];

    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, $this->validations);

        if ($validator->fails()) {
            return response()->json([
                'success'   => false,
                'errors'    => $validator->errors(),
            ]);
        }

        $newEmail = new Email();
        $newEmail->name              = $data['name'];
        $newEmail->email             = $data['email'];
        $newEmail->message           = $data['message'];
        $newEmail->save();

        Mail::to($newEmail->email)->send(new NewContact($newEmail));

        return response()->json([
            'success' => true
        ]);
    }
}