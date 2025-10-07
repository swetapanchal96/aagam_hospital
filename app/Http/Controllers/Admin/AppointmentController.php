<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = DB::table('appointment_master')
            ->leftJoin('category', 'appointment_master.category_id', '=', 'category.category_id')
            ->select('appointment_master.*', 'category.category_name')
            ->where('appointment_master.isDelete', 0)
            ->orderBy('appointment_id', 'desc')
            ->get();

        return view('admin.appointments.index', compact('appointments'));
    }
public function updateStatus(Request $request)
{
    $request->validate([
        'id' => 'required|integer',
        'newStatus' => 'required|in:1,2',
        'rejectedComments' => 'nullable|string',
    ]);

    $appointment = DB::table('appointment_master')
                    ->where('appointment_id', $request->id)
                    ->first();

    if (!$appointment) {
        return redirect()->back()->with('error', 'Appointment not found.');
    }

    DB::table('appointment_master')
        ->where('appointment_id', $request->id)
        ->update([
            'status' => $request->newStatus,
            'rejected_comments' => $request->newStatus == 2 ? $request->rejectedComments : null,
        ]);

    return redirect()->back()->with('success', 'Appointment status updated successfully.');
}



    public function destroy(Request $request)
    {
        $id = $request->id;

        // Optional: check if record exists
        $appointment = DB::table('appointment_master')->where('appointment_id', $id)->first();

        if ($appointment) {
            DB::table('appointment_master')->where('appointment_id', $id)->delete();
            return redirect()->back()->with('success', 'Appointment deleted successfully.');
        }

        return redirect()->back()->with('error', 'Appointment not found.');
    }

}
