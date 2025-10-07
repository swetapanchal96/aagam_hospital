<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
     public function contactstore(Request $request)
    {
        try{
            $inquiry = new Inquiry();
            $inquiry->name=$request->name;
            $inquiry->email=$request->email;
            $inquiry->mobileNumber=$request->mobile;
            $inquiry->subject=$request->subject;
            $inquiry->message=$request->message;
            $inquiry->strIp=$_SERVER['REMOTE_ADDR'];
            $inquiry->save();

            $SendEmailDetails = DB::table('sendemaildetails')
                ->where(['id' => 4])
                ->first();
            $root = $_SERVER['DOCUMENT_ROOT'];
            $file = file_get_contents($root . '/mailers/contactemail.html', 'r');
            $file = str_replace('#name', $request->name, $file);
            $file = str_replace('#email', $request->email, $file);
            $file = str_replace('#subject', $request->subject, $file);
            $file = str_replace('#mobile', $request->mobile, $file);
            $file = str_replace('#message', $request->message, $file);
            // dd($file);
            $setting = DB::table("setting")->select('email')->first();
             $toMail = $setting->email;// "shahkrunal83@gmail.com";//
            
            $to = $toMail;
            $subject = 'Contact Inquiry';
            // $subject = $request->subject;
            // dd($subject);
            $message = $file;
            // dd($message);
            $header = "From:".$SendEmailDetails->strFromMail."\r\n";
            //$header .= "Cc:afgh@somedomain.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            
             $retval = mail($to,$subject,$message,$header);
            

            return redirect()->route('FrontContact')->with('success',"Inquiry Send Successfully");
            
        
        } catch (\Exception $e) {
    
            report($e);
     
            return false;
        }
    }
        public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
       
    }
}
