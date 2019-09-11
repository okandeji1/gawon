<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $site_owners_email = 'okandeji2012@gmail.com';
        $site_owners_name = 'Okandeji'; // replace with your name

        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'subject' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug  = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->isSMTP(); // set mailer to use smtp
            $mail->Host       = "smtp.ethereal.email";
            $mail->SMTPAuth   = true; // authentication enabled
            $mail->Username = 'kristoffer.dach@ethereal.email';
            $mail->Password = 'w2UJDZutA4666ukdAr';
            $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail ssl
            $mail->Port       = 465; // or 587
            $mail->setFrom($email);
            $mail->FromName = $name;
            $mail->Subject = $subject;

            $mail->AddAddress($site_owners_email, $site_owners_name);

            $mail->IsHTML(true);

            $mail->Body = '<b>Sender Name:</b> ' . $name . '<br/><b>Sender Email:</b> ' . $email . '<br/><br/>' . $subject;

            $mail->Send();
            return back()->with('success', 'Your message is sent');
        } catch (Exception $e) {
            return back()->with('error', 'Error sending your message' . $mail->ErrorInfo);
        }
    }
}
