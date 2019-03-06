<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Mail\MessageEmail;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        // return $request->input('name');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        //Create New message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->phone = $request->input('phone');
        $message->message = $request->input('message');

        //Save Message to the databease
        $message->save();

        // \Mail::to($message->email)->send (new MessageEmail($message->name, $message->email, $message->phone, $message->message));

        //Redirect
        return redirect('/contact')->with('Success', 'Message Sent successfully');

    }


    public function getMessages()
    {
        $messages = Message::latest()->get();

        return view('admin.messages')->with('messages', $messages);
    }
}
