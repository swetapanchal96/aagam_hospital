<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use App\Models\Inquiry;
use App\Models\MetaData;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Blog;
use App\Mail\ContactInquiryMail;
use Illuminate\Support\Facades\Mail;

class frontController extends Controller
{
   public function index()
    {
        $meta = MetaData::where('id', 1)->first();
         $Testimonial = DB::table('testimonial')
        ->select(
            'testimonial.*',
            DB::raw('(select category_name from category where category.category_id = testimonial.category_id limit 1) as serviceName')
        )
        ->where('iStatus', 1)
        ->where('isDelete', 0)
        ->get();
        $blogs = Blog::where('iStatus', 1)->where('isDelete', 0)->orderBy('id', 'desc')->take(6)->get();

        $categories = DB::table('category')
        ->where('iStatus', 1)
        ->where('isDelete', 0)
        ->get();
        $limitedOrthoServices = DB::table('services')
            ->where('category_id', 1)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->take(3)
            ->get();

        $limitedPediatricServices = DB::table('services')
            ->where('category_id', 2)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->take(3)
            ->get();
            // dd($orthoServices, $pediatricServices);
        // dd($meta);
        // $seo=MetaData::where(['id'=>1])->first();
        // $Testimonial=Testimonial::select('testimonial.*',DB::raw('(select services.serviceName from services where services.id=testimonial.serviceId limit 1) as serviceName'))->where(['iStatus'=>1,'isDelete'=>0])->get();
        // $Faq=Faq::where(['iStatus'=>1,'isDelete'=>0])->get();
        // $Gallery=Gallery::where(['iStatus'=>1,'isDelete'=>0])->take(8)->get();
        return view('frontview.index', compact('Testimonial','blogs', 'categories','meta', 'limitedOrthoServices', 'limitedPediatricServices') );
    }

    // public function serviceDetail($id)
    // {
    //     $service = Service::where('serviceId', $id)
    //         ->where('iStatus', 1)
    //         ->where('isDelete', 0)
    //         ->firstOrFail();

    //     $meta = MetaData::where('id', $service->meta_id ?? 0)->first(); // if applicable

    //     $blogs = DB::table('blogs')
    //         ->where('category_id', $service->category_id)
    //         ->where('isDelete', 0)
    //         ->orderBy('id', 'desc')
    //         ->take(3)
    //         ->get();

    //     return view('frontview.service-detail', compact('service', 'meta', 'blogs'));
    // }

     public function orthoservices()
    {
        $meta = MetaData::where('id', 4)->first();

        $orthoServices = Service::where('category_id', 1)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->get();
// dd($orthoServices);
        return view('frontview.ortho-services', compact('meta', 'orthoServices'))
                ->with('relatedServices', $orthoServices); 
    }

    public function ServicesDetail($id)
    {
        $service = Service::findOrFail($id);

        $blogs = Blog::where('category_id', $service->category_id)
                    ->latest()
                    ->take(3)
                    ->get();

        $relatedServices = Service::where('category_id', $service->category_id)
                                ->where('iStatus', 1)
                                ->where('isDelete', 0)
                                ->get();

        $category = DB::table('category')->where('category_id', $service->category_id)->first();

        $categoryTitle = $category->category_name ?? 'Service';

        return view('frontview.service-detail', compact('service', 'blogs', 'relatedServices', 'category', 'categoryTitle'));
    }


    
    public function pediatricservices()
    {
        $meta = MetaData::where('id', 5)->first();

        $pediatricServices = Service::where('category_id', 2)
            ->where('iStatus', 1)
            ->where('isDelete', 0)
            ->get();

        return view('frontview.pediatric-services', compact('meta', 'pediatricServices'));
    }

    // public function storeAppointment(Request $request)
    // {
    //     $request->validate([
    //         'category_id' => 'required|exists:category,category_id',
    //         'name' => 'required|string|max:255',
    //         'phone' => 'required|digits:10',
    //         'appointment_date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'),
    //         'captcha' => 'required|captcha', // Uncomment if using captcha
    //     ], [
    //         'appointment_date.after_or_equal' => 'Appointment date cannot be in the past.',
    //         'phone.digits' => 'Phone number must be exactly 10 digits.',
    //         'captcha.captcha' => 'Invalid captcha code.', // Optional
    //     ]);

    //     $data = [
    //         'category_id' => $request->category_id,
    //         'name' => $request->name,
    //         'phone' => $request->phone,
    //         'appointment_date' => $request->appointment_date,
    //         'status' => 'Pending',
    //         'iStatus' => 1,
    //         'isDelete' => 0,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ];

    //     DB::table('appointment_master')->insert($data);

    //     // Fetch category name for the email
    //     $category = DB::table('category')->where('category_id', $request->category_id)->first();

    //     // Load email template
    //     $SendEmailDetails = DB::table('sendemaildetails')->where('id', 4)->first();
    //     $root = $_SERVER['DOCUMENT_ROOT'];
    //     $file = file_get_contents($root . '/mailers/appointment.html');

    //     // Replace placeholders
    //     $file = str_replace('#name', $data['name'], $file);
    //     $file = str_replace('#phone', $data['phone'], $file);
    //     $file = str_replace('#service', $category->category_name ?? 'N/A', $file);
    //     $file = str_replace('#date', \Carbon\Carbon::parse($data['appointment_date'])->format('d-m-Y'), $file);
    //     $file = str_replace('#submitted', now()->format('d-m-Y h:i A'), $file);

    //     // Email send config
    //     $toMail = "contact@aagamhospital.com"; // change as needed
    //     $subject = $SendEmailDetails->strSubject ?? 'New Appointment Request';
    //     $message = $file;
    //     $header = "From:" . $SendEmailDetails->strFromMail . "\r\n";
    //     $header .= "MIME-Version: 1.0\r\n";
    //     $header .= "Content-type: text/html\r\n";

    //     mail($toMail, $subject, $message, $header); // uncomment when ready

    //     return redirect()->route('FrontThankyou');
    // }
public function storeAppointment(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:category,category_id',
        'name' => 'required|string|max:255',
        'phone' => 'required|digits:10',
        'appointment_date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'),
        'captcha' => 'required|captcha', // Uncomment if using captcha
    ], [
        'appointment_date.after_or_equal' => 'Appointment date cannot be in the past.',
        'phone.digits' => 'Phone number must be exactly 10 digits.',
        'captcha.captcha' => 'Invalid captcha code.', // Optional
    ]);

    $data = [
        'category_id' => $request->category_id,
        'name' => $request->name,
        'phone' => $request->phone,
        'appointment_date' => $request->appointment_date,
        'status' => 'Pending',
        'iStatus' => 1,
        'isDelete' => 0,
        'created_at' => now(),
        'updated_at' => now(),
    ];

    DB::table('appointment_master')->insert($data);

    // Fetch category name for the email
    $category = DB::table('category')->where('category_id', $request->category_id)->first();

    // Load email template
    $SendEmailDetails = DB::table('sendemaildetails')->where('id', 4)->first();
    $root = $_SERVER['DOCUMENT_ROOT'];
    $file = file_get_contents($root . '/mailers/appointment.html');

    // Replace placeholders
    $file = str_replace('#name', $data['name'], $file);
    $file = str_replace('#phone', $data['phone'], $file);
    $file = str_replace('#service', $category->category_name ?? 'N/A', $file);
    $file = str_replace('#date', \Carbon\Carbon::parse($data['appointment_date'])->format('d-m-Y'), $file);
    $file = str_replace('#submitted', now()->format('d-m-Y h:i A'), $file);

    // Email send config
    $toMail = "aagamhospital079@gmail.com"; // change as needed
    $subject = $SendEmailDetails->strSubject ?? 'New Appointment Request';
    $message = $file;
    $header = "From:" . $SendEmailDetails->strFromMail . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $header .= "Cc: contact@aagamhospital.com\r\n"; // ✅ Added CC

    mail($toMail, $subject, $message, $header); // uncomment when ready

    return redirect()->route('FrontThankyou');
}



    public function aboutus()
    {
        $meta = MetaData::where('id', 2)->first();
        return view('frontview.aboutus',compact('meta'));
    }
    
    public function aclreconstruction()
    {
        // Directly use category_id = 1 for Ortho Services
        $meta = MetaData::where('id', 6)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(2)
                    ->get();
                    $categories = DB::table('category')
        ->where('iStatus', 1)
        ->where('isDelete', 0)
        ->get();

        return view('frontview.acl-reconstruction', compact('blogs','meta','categories'));
    }


  
    public function pclreconstruction()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 7)->first();
         $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.pcl-reconstruction', compact('blogs','meta'));
    }
    
    public function cartilagesurgery()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 34)->first();
          $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.cartilagesurgery', compact('blogs','meta'));
    }

     public function bankartrepair()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 35)->first();
          $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.bankart-repair', compact('blogs','meta'));
    }

    public function kneereplacement()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 36)->first();
          $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.knee-replacement', compact('blogs','meta'));
    }
    public function hipreplacement()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 37)->first();
          $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.hip-replacement', compact('blogs','meta'));
    }
    
    public function arthroscopysurgery()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 38)->first();
          $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.arthroscopy-surgery', compact('blogs','meta'));
    }
    
     public function traumasurgery()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 39)->first();
          $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.trauma-surgery', compact('blogs','meta'));
    }
    
     public function shoulderrotatorcuffrepair()
    {
        // $seo=MetaData::where(['id'=>3])->first();
        $meta = MetaData::where('id', 40)->first();
          $blogs = DB::table('blogs')
                    ->where('category_id', 1)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.shoulderrotatorcuffrepair', compact('blogs','meta'));
    }
    
    public function newborncare()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $meta = MetaData::where('id', 41)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 2)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.newborn-care', compact('blogs','meta'));
    }
    
    public function wellbabyvisits()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $meta = MetaData::where('id', 42)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 2)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.well-baby-visits', compact('blogs','meta'));
    }
    
     public function childgrowth()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $meta = MetaData::where('id', 43)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 2)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.child-growth', compact('blogs','meta'));
    }
    
    public function vaccination()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $meta = MetaData::where('id', 44)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 2)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.vaccination', compact('blogs','meta'));
    }
    
      public function nutrition()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $meta = MetaData::where('id', 45)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 2)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.nutrition', compact('blogs','meta'));
    }
    
      public function schoolphysical()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $meta = MetaData::where('id', 46)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 2)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.school-physical', compact('blogs','meta'));
    }
    
       public function adolescenthealth()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $meta = MetaData::where('id', 47)->first();
        $blogs = DB::table('blogs')
                    ->where('category_id', 2)
                    ->where('isDelete', 0)
                    ->orderBy('id', 'desc')
                    ->take(3)
                    ->get();

        return view('frontview.adolescent-health', compact('blogs','meta'));
    }

   


    public function photogallery()
    {
        // $seo=MetaData::where(['id'=>3])->first();
         $photos = Gallery::where('iStatus', 1)
        ->where('isDelete', 0)
        ->latest('galleryId')
        ->paginate(6); 

        return view('frontview.photogallery' , compact('photos'));
    }
    
   public function videogallery()
    {
        $videos = Video::where('iStatus', 1)
            ->where('isDelete', 0)
            ->latest('videoId')
            ->paginate(6);

        // Extract video ID from URL
        foreach ($videos as $video) {
            preg_match('/(?:youtu\.be\/|v=)([^\?&]+)/', $video->video, $matches);
            $video->video_id = $matches[1] ?? null;
        }

        return view('frontview.videogallery', compact('videos'));
    }

    
    public function blog()
    {
        $blogs = Blog::where('iStatus', 1)
                 ->where('isDelete', 0)
                 ->orderBy('blogDate', 'desc')
                 ->paginate(21);

         return view('frontview.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('blog_slug', $slug)->firstOrFail();

        // Get recent posts (optional: limit to 5)
        $recentPosts = Blog::where('iStatus', 1)
                        ->where('isDelete', 0)
                        ->orderBy('blogDate', 'desc')
                        ->take(5)
                        ->get();

        return view('frontview.blog-datails', compact('blog', 'recentPosts'));
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
    
    public function contact()
    {
        $meta = MetaData::where('id', 3)->first();
        // Fetch 2 categories from the category table
        $categories = DB::table('category')
        ->where('iStatus', 1)
        ->where('isDelete', 0)
        ->take(2)
        ->get();

        return view('frontview.contact', compact('categories','meta'));
    }


  

public function contactsubmit(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|digits:10',
        'email' => 'required|email',
        'category_id' => 'required|exists:category,category_id',
        'message' => 'required|string',
        'captcha' => 'required|captcha',
    ], [
        'captcha.captcha' => 'Invalid captcha code.'
    ]);

    // fetch category/service name
    $category = DB::table('category')->where('category_id', $request->category_id)->first();

    // store only fields that exist in `inquiry` table
    $insertData = [
        'category_id' => $request->category_id,
        'name' => $request->name,
        'mobileNumber' => $request->mobile,
        'email' => $request->email,
        'message' => $request->message,
        'date' => now(),
        'strIp' => $request->ip(),
        'iStatus' => 1,
        'isDelete' => 0,
        'created_at' => now(),
        'updated_at' => now()
    ];

    DB::table('inquiry')->insert($insertData);

    // prepare data for email template
    $data = [
        'name' => $request->name,
        'mobileNumber' => $request->mobile,
        'email' => $request->email,
        'service' => $category->category_name ?? 'N/A',
        'message' => $request->message,
        'date' => now()->format('d-m-Y h:i A'),
    ];

    $SendEmailDetails = DB::table('sendemaildetails')->where(['id' => 4])->first();

    if ($SendEmailDetails) {
        $msg = [
            'FromMail' => $SendEmailDetails->strFromMail,
            'Title' => $SendEmailDetails->strTitle,
            'ToEmail' => $SendEmailDetails->ToMail,
            'CcEmail' => $SendEmailDetails->strCC,
            'Subject' => $SendEmailDetails->strSubject
        ];

        Mail::send('emails.contactemail', ['data' => $data], function ($message) use ($msg) {
            $message->from($msg['FromMail'], $msg['Title']);
            $message->cc($msg['CcEmail']);
            $message->to($msg['ToEmail'])->subject($msg['Subject']);
        });
    }

    return redirect()->route('FrontThankyou');
}



    
    
    
    
    
    
    
    public function aestheticservices()
    {
        $seo=MetaData::where(['id'=>4])->first();
        $Faq=Faq::where(['iStatus'=>1,'isDelete'=>0,"serviceId" => 1])->get();
        return view('frontview.aestheticservices',compact('seo','Faq'));
    }
    public function eyetreatments()
    {
        $seo=MetaData::where(['id'=>5])->first();
        $Faq=Faq::where(['iStatus'=>1,'isDelete'=>0,"serviceId" => 2])->get();
        return view('frontview.eyetreatments',compact('seo','Faq'));
    }

    public function thankyou(){
        return view('frontview.thankyou');
    }
     
    public function cataract(){
        return view('frontview.cataract');
    }
  
    
    public function cornea(){
        return view('frontview.cornea');
    }
    
    
    
     public  function sendMail(Request $request)
    {
         $data = array(
                'name' => $request->name,
                'mobileNumber' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'subject' => $request->subject,
                'date' => $request->date,
                'created_at' => date('Y-m-d H:i:s'),
                'strIp' => $request->ip()
            );
            DB::table('inquiry')->insert($data);

         $SendEmailDetails = DB::table('sendemaildetails')
                ->where(['id' => 11])
                ->first();
                $date=date('d-m-Y H:i',strtotime($data['date']));

            $root = $_SERVER['DOCUMENT_ROOT'];
            $file = file_get_contents($root . '/mailers/contactemail.html', 'r');
            $file = str_replace('#name', $data['name'], $file);
            $file = str_replace('#email', $data['email'], $file);
            $file = str_replace('#mobile', $data['mobileNumber'], $file);
            $file = str_replace('#date',$date , $file);
            $file = str_replace('#message', $data['message'], $file);

            //  $toMail = "contact@myqrgenie.com";
            // $toMail = $request->email;
            $toMail = "dev5.apolloinfotech@gmail.com";
            $to = $toMail;
            $subject = $request->subject;
            $message = $file;
            $header = "From:" . $SendEmailDetails->strFromMail . "\r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $retval = mail($to, $subject, $message, $header);

        return back()->with('success', 'Mail Send Successfully.');

    }

}