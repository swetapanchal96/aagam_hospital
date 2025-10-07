<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        try{
        $Faq = Faq::select('faq.*',DB::raw('(select services.serviceName from services where services.id=faq.serviceId limit 1) as serviceName'))->orderBy('faqid', 'desc')->paginate(env('PER_PAGE_COUNT'));
            $service=Service::where(['iStatus' => 1, 'isDelete' => 0])->get();

        return view('admin.faq.index', compact('Faq','service'));
        } catch (\Exception $e) {

        report($e);
 
        return false;
    }
    }

    public function create(Request $request)
    {
        try{
        $Data = array(
            'serviceId' => $request->service,
            'question' => $request->question,
            'answer' => $request->answer,
            'created_at' => date('Y-m-d H:i:s'),
            'strIP' => $request->ip()
        );
        DB::table('faq')->insert($Data);

        return back()->with('success', 'Faq Created Successfully.');
        } catch (\Exception $e) {

        report($e);
 
        return false;
    }
    }

    public function editview(Request $request, $id)
    {
        try{
                $data['services'] = Service::where(['iStatus' => 1, 'isDelete' => 0])->get();

                $data['faq'] = Faq::where(['iStatus' => 1, 'isDelete' => 0, 'faqid' => $id])->first();

                echo json_encode($data);
        } catch (\Exception $e) {
    
            report($e);
     
            return false;
        }
    }

    public function update(Request $request)
    {
        try{
        $update = DB::table('faq')
            ->where(['iStatus' => 1, 'isDelete' => 0, 'faqid' => $request->faqid])
            ->update([
                'serviceId' => $request->service,
                'question' => $request->question,
                'answer' => $request->answer,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        return back()->with('success', 'Faq Updated Successfully.');
        } catch (\Exception $e) {

        report($e);
 
        return false;
    }
    }


    public function delete(Request $request)
    {   try{
        DB::table('faq')->where(['iStatus' => 1, 'isDelete' => 0, 'faqid' => $request->faqid])->delete();
        return back()->with('success', 'Faq Deleted Successfully!.');
    } catch (\Exception $e) {

        report($e);
 
        return false;
    }
    }
}
