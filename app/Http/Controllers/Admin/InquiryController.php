<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Inquiry;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{

        $inquiries = Inquiry::orderBy('inquiry_id', 'DESC')->where(['iStatus' => 1, 'isDelete' => 0])->paginate(25);
        return view('admin.inquiries.index', compact('inquiries'));
        } catch (\Exception $e) {
           report($e);
         return false;
        }
    }


    public function delete(Request $request)
    {
        try{

        DB::table('inquiry')->where(['iStatus' => 1, 'isDelete' => 0, 'inquiry_id' => $request->inquiry_id])->delete();

        return redirect()->route('Inquiry.index')->with('success', 'Deleted Successfully!.');
        } catch (\Exception $e) {
           report($e);
         return false;
        }
    }

    public function viewdetail(Request $request, $id)
    {
        try{

            $data = Inquiry::where(['iStatus' => 1, 'isDelete' => 0, 'inquiry_id' => $id])->first();

            echo json_encode($data);
        } catch (\Exception $e) {
           report($e);
         return false;
        }
    }
        public function ExportInquiry()
    {
        // try{

        $Inquiry = Inquiry::orderBy('inquiry_id', 'DESC')->where(['iStatus' => 1, 'isDelete' => 0])->get();
        return view('admin.inquiries.exportInquiry', compact('Inquiry'));

        // } catch (\Exception $e) {
        //   report($e);
        //  return false;
        // }
    }
}
