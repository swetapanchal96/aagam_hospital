<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

use App\Models\CustomerCouponApplyed;
use App\Models\Jobs;
use App\Models\Experience;
use App\Models\Education;
use App\Models\SalaryRange;
use App\Models\Industry;
use App\Models\Functions;
use App\Models\State;
use App\Models\City;
use App\Models\Service;
use App\Models\AppliedJob;
use App\Models\Skill;

class FrontController extends Controller
{
    public function __construct()
    {
        // dd('__construct');
        Cache::flush();
    }
    public function index(Request $request)
    {
        try{
        $Industry=Industry::where(['iStatus'=>1,'isDelete'=>0])->get();
        $jobs=jobs::select('jobs.*',DB::raw('(select salary_range.name from salary_range where salary_range.salaryId=jobs.salaryId limit 1) as salary')
            ,DB::raw('(select functions.functionName from functions where functions.functionId=jobs.functionId limit 1) as functions')
            ,DB::raw('(select experience.experienceName from experience where experience.experienceId=jobs.experienceId limit 1) as experience')
            ,DB::raw('(select state.stateName from state where state.stateId=jobs.stateId limit 1) as state')
            ,DB::raw('(select city.cityName from city where city.cityId=jobs.cityId limit 1) as city')
        )
        ->where(['iStatus'=>1,'isDelete'=>0])->latest()->take(8)->get();
        $service=Service::where(['iStatus'=>1,'isDelete'=>0])->latest()->take(6)->get();
        return view('Front.index',compact('Industry','jobs','service'));
        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
            }

    }
    public function applyForJob(Request $request,$id)
    {
        try{
        $jobId=$id;
        $Experience=Experience::where(['iStatus'=>1,'isDelete'=>0])->orderBy('sequence','asc')->get();
        $Education=Education::where(['iStatus'=>1,'isDelete'=>0])->orderBy('educationName','asc')->get();
        $SalaryRange=SalaryRange::where(['iStatus'=>1,'isDelete'=>0])->orderBy('sequence','asc')->get();
        $Industry=Industry::where(['iStatus'=>1,'isDelete'=>0])->orderBy('IndustryName','asc')->get();
        $Functions=Functions::where(['iStatus'=>1,'isDelete'=>0])->orderBy('functionName','asc')->get();
        $State=State::where(['iStatus'=>1,'isDelete'=>0])->orderBy('stateName','asc')->get();
        $City=City::where(['iStatus'=>1,'isDelete'=>0])->orderBy('cityName','asc')->get();
        $Job = Jobs::where(['jobId' => $id])->first();

     return view('Front.submitcv',compact('Experience','Education','SalaryRange','Industry','Functions','State','City','Job','jobId'));
        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
    }
     public function getCities($stateId)
    {
        $cities = City::where('stateId', $stateId)->get();
        return response()->json($cities);
       
    }
    public function about(Request $request)
    {
        try{
                $service=Service::where(['iStatus'=>1,'isDelete'=>0])->latest()->take(6)->get();
                return view('Front.aboutus',compact('service'));
                } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
    }
    public function contact(Request $request)
    {
        return view('Front.contactus');
    }
    public function submitCV(Request $request)
    {
    try{
        $job=Jobs::select('created_at')->where(['jobId'=>$request->jobId])->first();
        $pdfFile = "";
        if ($request->hasFile('cv')) 
        {
            $root = $_SERVER['DOCUMENT_ROOT'];
            $image = $request->file('cv');
            $pdfFile = time() . '.' . $image->getClientOriginalExtension();
            $date=date('Y/m/d',strtotime($job->created_at));
            $destinationpath = $root.'/'.$date.'/';
            if (!file_exists($destinationpath)) {
                mkdir($destinationpath, 0755, true);
            }
            $image->move($destinationpath, $pdfFile);
        }

      $AppliedJob=new AppliedJob();
      $AppliedJob->jobId=$request->jobId; 
      $AppliedJob->firstName=$request->firstName; 
      $AppliedJob->lastName=$request->lastName; 
      $AppliedJob->Gender=$request->Gender; 
      $AppliedJob->DOB=date('Y-m-d',strtotime($request->DOB)); 
      $AppliedJob->Email=$request->Email; 
      $AppliedJob->Mobile=$request->Mobile; 
      $AppliedJob->stateId=$request->stateId; 
      $AppliedJob->cityId=$request->cityId; 
      $AppliedJob->Company=$request->Company; 
      $AppliedJob->Designation=$request->Designation; 
      $AppliedJob->experienceId=$request->experienceId; 
      $AppliedJob->educationId=$request->educationId; 
      $AppliedJob->current_CTC=$request->current_CTC; 
      $AppliedJob->Institute=$request->Institute; 
      $AppliedJob->functionId=$request->functionId; 
      $AppliedJob->IndustryId=$request->IndustryId;
      $AppliedJob->resume=$pdfFile;
      $AppliedJob->save(); 

      $skills=explode(',', $request->Skill);
      foreach ($skills as $key => $value) 
      {
        $Skill=new Skill();
        $Skill->candidateId=$AppliedJob->id;
        $Skill->skillName=$value;
        $Skill->save();
      }
         return redirect()->back()->with('success','Job Applied Successfully');
         } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
    }
    public function service(Request $request,$id)
    {
        try{
        $serviceDetail=Service::where(['serviceId'=>$id,'iStatus'=>1,'isDelete'=>0])->first();
        $service=Service::where(['iStatus'=>1,'isDelete'=>0])->whereNotIn('serviceId',[$id])->get();
        return view('Front.service',compact('serviceDetail','service'));
        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
            }

    }
    public function SearchJob(Request $request)
    {
        try{
        $Education=Education::where(['iStatus'=>1,'isDelete'=>0])->orderBy('educationName','asc')->get();
        $Experience=Experience::where(['iStatus'=>1,'isDelete'=>0])->orderBy('sequence','asc')->get();
        $Industry=Industry::where(['iStatus'=>1,'isDelete'=>0])->orderBy('IndustryName','asc')->get();
        $Functions=Functions::where(['iStatus'=>1,'isDelete'=>0])->orderBy('functionName','asc')->get();
        $State=State::where(['iStatus'=>1,'isDelete'=>0])->orderBy('stateName','asc')->get();
        $City=City::where(['iStatus'=>1,'isDelete'=>0])->orderBy('cityName','asc')->get();
        $SalaryRange=SalaryRange::where(['iStatus'=>1,'isDelete'=>0])->orderBy('sequence','asc')->get();

        $jobs = Jobs::select('jobs.*',DB::raw('(select state.stateName from state where state.stateId=jobs.stateId limit 1) as state')
            ,DB::raw('(select city.cityName from city where city.cityId=jobs.cityId limit 1) as city')
             ,DB::raw('(select experience.experienceName from experience where experience.experienceId=jobs.experienceId limit 1) as experience')
             ,DB::raw('(select salary_range.name from salary_range where salary_range.salaryId=jobs.salaryId limit 1) as salary')
             ,DB::raw('(select  industry.IndustryName from  industry where industry.industryId=jobs.industryId limit 1) as industry')
             ,DB::raw('(select functions.functionName from functions where functions.functionId=jobs.functionId limit 1) as functions')
             ,DB::raw('(select count(applied_jobs.jobId) from applied_jobs where applied_jobs.jobId=jobs.jobId limit 1) as count')
        )
            ->when($request->jobTitle, fn ($query, $jobTitle) => $query->where('jobTitle','like','%'.$jobTitle.'%'))
            ->when($request->experience, fn ($query, $experience) => $query->where('experienceId','=',$experience))
            ->when($request->education, fn ($query, $education) => $query->where('educationId','=',$education))
            ->when($request->salary, fn ($query, $salary) => $query->where('salaryId','=',$salary))
            ->when($request->industry, fn ($query, $industry) => $query->where('industryId','=',$industry))
            ->when($request->functions, fn ($query, $functions) => $query->where('functionId','=',$functions))
            ->when($request->state, fn ($query, $state) => $query->where('stateId','=',$state))
            ->when($request->city, fn ($query, $city) => $query->where('cityId','=',$city))
            ->when($request->date, fn ($query, $ToDate) => $query->where('created_at', '>=', date('Y-m-d 00:00:00', strtotime($ToDate))))
            ->where(['isDelete'=>0,'iStatus'=>1])->orderBy('created_at','desc')->paginate(env('PER_PAGE_COUNT'));

            $jobTitle=$request->jobTitle;
            $education=$request->education;
            $experience=$request->experience;
            $industry=$request->industry;
            $functions=$request->functions;
            $state=$request->state;
            $city=$request->city;
            $salary=$request->salary;


        return view('Front.jobposting',compact('jobs','jobTitle','experience','education','industry','functions','state','city','Education','Experience','Industry','Functions','State','City','SalaryRange'));
        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
    }
    public function jobDetail($id)
    {
        try{
        $job = Jobs::select('jobs.*',DB::raw('(select state.stateName from state where state.stateId=jobs.stateId limit 1) as state')
            ,DB::raw('(select city.cityName from city where city.cityId=jobs.cityId limit 1) as city')
             ,DB::raw('(select experience.experienceName from experience where experience.experienceId=jobs.experienceId limit 1) as experience')
             ,DB::raw('(select salary_range.name from salary_range where salary_range.salaryId=jobs.salaryId limit 1) as salary')
             ,DB::raw('(select  industry.IndustryName from  industry where industry.industryId=jobs.industryId limit 1) as industry')
             ,DB::raw('(select functions.functionName from functions where functions.functionId=jobs.functionId limit 1) as functions')
             ,DB::raw('(select education.educationName from education where education.educationId=jobs.educationId limit 1) as education'))->where(['jobId' => $id])->first();

        $relatedJob=Jobs::select('jobs.*',DB::raw('(select state.stateName from state where state.stateId=jobs.stateId limit 1) as state')
            ,DB::raw('(select city.cityName from city where city.cityId=jobs.cityId limit 1) as city')
             ,DB::raw('(select experience.experienceName from experience where experience.experienceId=jobs.experienceId limit 1) as experience')
             ,DB::raw('(select salary_range.name from salary_range where salary_range.salaryId=jobs.salaryId limit 1) as salary')
             ,DB::raw('(select  industry.IndustryName from  industry where industry.industryId=jobs.industryId limit 1) as industry')
             ,DB::raw('(select functions.functionName from functions where functions.functionId=jobs.functionId limit 1) as functions')
             ,DB::raw('(select education.educationName from education where education.educationId=jobs.educationId limit 1) as education'))
             ->where(['jobId' => $id,'educationId'=>$job->educationId])->whereNotIn('jobId',[$id])
             ->get();
        return view('Front.jobdetail',compact('job','relatedJob'));

        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
    }
}