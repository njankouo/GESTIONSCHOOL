<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailController extends Controller
{

    public function save(Request $request){
    require base_path("vendor/autoload.php");
    $mail=new PHPMailer(true);
       try {
 $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'localhost';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'user@example.com';   //  sender username
            $mail->Password = '**********';       // sender password
           // $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 1025;                          // port - 587/465

            $mail->setFrom('sender@example.com', 'SenderName');
            $mail->addAddress($request->emailRecipient);
            $mail->addCC($request->emailCc);
            $mail->addBCC($request->emailBcc);

            $mail->addReplyTo('sender@example.com', 'SenderReplyName');

            if(isset($_FILES['emailAttachments'])) {
                for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                    $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                }
            }


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = $request->emailSubject;
            $mail->Body    = $request->emailBody;

            // $mail->AltBody = plain text version of email body;

            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }

            else {
                return back()->with("success", "Email has been sent.");
            }

       } catch (\Throwable $th) {
        return back()->with('error','Message envoyé.');
       }

    }
}
