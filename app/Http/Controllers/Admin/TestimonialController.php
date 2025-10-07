<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        $Testimonial = Testimonial::select(
            'testimonial.*',
            DB::raw('(SELECT category.category_name FROM category WHERE category.category_id = testimonial.category_id LIMIT 1) as category_name')
        )->orderBy('id', 'desc')->paginate(10);

        $categories = DB::table('category')->where(['iStatus' => 1, 'isDelete' => 0])->get();

        return view('admin.testimonial.index', compact('Testimonial', 'categories'));
    }

    public function create(Request $request)
    {
        $img = "";
        if ($request->hasFile('photo')) {
            $root = $_SERVER['DOCUMENT_ROOT'];
            $image = $request->file('photo');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $destinationpath = $root . '/Testimonial/';
            if (!file_exists($destinationpath)) {
                mkdir($destinationpath, 0755, true);
            }
            $image->move($destinationpath, $img);
        }

        $Data = [
            'category_id' => $request->category,
            'name' => $request->name,
            'description' => $request->description,
            'photo' => $img,
            'created_at' => now(),
        ];

        DB::table('testimonial')->insert($Data);

        return back()->with('success', 'Testimonial Created Successfully.');
    }

    public function editview(Request $request, $id)
    {
        // dd("in");
        
        try {
            $data['categories'] = DB::table('category')->where(['iStatus' => 1, 'isDelete' => 0])->get();
            $data['testimonial'] = Testimonial::where(['iStatus' => 1, 'isDelete' => 0, 'id' => $id])->first();

            echo json_encode($data);
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function update(Request $request)
    {

        // dd("in");
        try {
            $img = "";
            if ($request->hasFile('photo')) {
                $root = $_SERVER['DOCUMENT_ROOT'];
                $image = $request->file('photo');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $destinationpath = $root . '/Testimonial/';
                if (!file_exists($destinationpath)) {
                    mkdir($destinationpath, 0755, true);
                }
                $image->move($destinationpath, $img);
                $oldImg = $request->input('hiddenImage') ?? null;
                if ($oldImg && file_exists($destinationpath . $oldImg)) {
                    unlink($destinationpath . $oldImg);
                }
            } else {
                $img = $request->input('hiddenImage');
            }

            DB::table('testimonial')
                ->where(['iStatus' => 1, 'isDelete' => 0, 'id' => $request->id])
                ->update([
                    'category_id' => $request->category,
                    'name' => $request->name,
                    'description' => $request->description,
                    'photo' => $img,
                    'updated_at' => now()
                ]);

            return back()->with('success', 'Testimonial Updated Successfully.');
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function delete(Request $request)
    {
        try {
            DB::table('testimonial')->where(['iStatus' => 1, 'isDelete' => 0, 'id' => $request->id])->delete();
            return back()->with('success', 'Testimonial Deleted Successfully!');
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
}
