<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Hash;

class ContactController extends Controller
{

    public function showHome()
    {
        return view('front.home');
    }

    public function sendMail(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
            'attachFile' => 'required|mimes:pdf,doc,docx,jpg,png|max:2048',
          ]);

          $file = $request->file('attachFile');

          // Ensure the destination directory exists
          $destinationPath = public_path('upload');
          if (!is_dir($destinationPath)) {
              mkdir($destinationPath, 0755, true);
          }
  
          $fileName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
          
          // Manually move the file to the public/upload directory
          $file->move($destinationPath, $fileName);

        $data=[
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
        ];

        try {
            
            $filePath = 'upload/' . $fileName;
            Mail::to('hello@example.com')->send(new ContactMail($data, $filePath));

            return redirect()->route('home')->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            // Log or print the exception for debugging
            dd($e->getMessage());
        }
    }
}
