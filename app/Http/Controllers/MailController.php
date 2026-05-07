<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        try {

            /*
            |--------------------------------------------------------------------------
            | ADMIN MAIL
            |--------------------------------------------------------------------------
            */

            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->SMTPSecure = 'tls';
            $mail->Port       = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress(env('MAIL_TO_ADDRESS'));

            $mail->isHTML(true);
            $mail->Subject = "New Contact Form Message";

            $mail->Body = "
                <div style='font-family:Arial,sans-serif;padding:20px;background:#f4f4f4'>
                    <div style='max-width:600px;margin:auto;background:#ffffff;border-radius:10px;padding:30px'>
                        
                        <h2 style='color:#111827;margin-bottom:20px'>
                            New Contact Inquiry
                        </h2>

                        <p><strong>Name:</strong> {$request->name}</p>
                        <p><strong>Email:</strong> {$request->email}</p>
                        <p><strong>Subject:</strong> {$request->subject}</p>

                        <div style='margin-top:20px'>
                            <strong>Message:</strong>
                            <p style='background:#f9fafb;padding:15px;border-radius:8px'>
                                {$request->message}
                            </p>
                        </div>

                    </div>
                </div>
            ";

            $mail->send();


            /*
            |--------------------------------------------------------------------------
            | USER REPLY MAIL
            |--------------------------------------------------------------------------
            */

            $replyMail = new PHPMailer(true);

            $replyMail->isSMTP();
            $replyMail->Host       = env('MAIL_HOST');
            $replyMail->SMTPAuth   = true;
            $replyMail->Username   = env('MAIL_USERNAME');
            $replyMail->Password   = env('MAIL_PASSWORD');
            $replyMail->SMTPSecure = 'tls';
            $replyMail->Port       = env('MAIL_PORT');

            $replyMail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $replyMail->addAddress($request->email, $request->name);

            $replyMail->isHTML(true);
            $replyMail->Subject = "Thank You For Contacting Us";

            $replyMail->Body = "
                <div style='font-family:Arial,sans-serif;background:#f4f4f4;padding:30px'>
                    
                    <div style='max-width:650px;margin:auto;background:#ffffff;border-radius:12px;overflow:hidden'>
                        
                        <div style='background:#111827;padding:30px;text-align:center'>
                            <h1 style='color:#ffffff;margin:0'>
                                Thank You!
                            </h1>
                        </div>

                        <div style='padding:40px'>

                            <h2 style='color:#111827'>
                                Hello {$request->name},
                            </h2>

                            <p style='font-size:16px;color:#4b5563;line-height:28px'>
                                Thank you for reaching out to us.
                                We have successfully received your message.
                            </p>

                            <p style='font-size:16px;color:#4b5563;line-height:28px'>
                                Our team will review your inquiry and connect with you shortly.
                            </p>

                            <div style='margin:30px 0;padding:20px;background:#f9fafb;border-left:4px solid #111827;border-radius:8px'>
                                <p style='margin:0'><strong>Your Subject:</strong> {$request->subject}</p>
                            </div>

                            <p style='font-size:16px;color:#4b5563'>
                                We appreciate your interest and look forward to assisting you.
                            </p>

                            <br>

                            <p style='margin-bottom:0;color:#111827'>
                                Best Regards,<br>
                                <strong>" . env('MAIL_FROM_NAME') . "</strong>
                            </p>

                        </div>

                    </div>

                </div>
            ";

            $replyMail->send();

            return back()->with('success', 'Message sent successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'Mail failed: ' . $e->getMessage());
        }
    }
}
