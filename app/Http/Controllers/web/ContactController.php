<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\InformationModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'your-name' => 'required|string|max:255',
            'your-address' => 'required|string|max:255',
            'your-phone' => 'required|string|max:20',
            'your-email' => 'required|email|max:255',
            'your-message' => 'required|string|max:2000',
        ]);

        // Save the validated data to InformationModel
        $information = new InformationModel();
        $information->name = $validated['your-name'];
        $information->address = $validated['your-address'];
        $information->phone = $validated['your-phone'];
        $information->email = $validated['your-email'];
        $information->content = $validated['your-message'];
        $information->save();

        // Redirect or respond with a success message
        return redirect()->back()->with('success', 'Thông tin của bạn đã được gửi thành công!');
    }
}
