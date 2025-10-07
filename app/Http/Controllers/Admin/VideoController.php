<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        try {
            $categories = Category::where(['iStatus' => 1, 'isDelete' => 0])->get();

            $datas = Video::select('video_gallery.*', DB::raw('(SELECT category.category_name FROM category WHERE category.category_id = video_gallery.category_id LIMIT 1) as categoryName'))
                ->where(['iStatus' => 1, 'isDelete' => 0])
                ->orderBy('videoId', 'desc')
                ->paginate(env('PER_PAGE_COUNT'));

            return view('admin.video.index', compact('datas', 'categories'));
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required',
            'category_id' => 'required|exists:category,category_id',
        ]);

        try {
            Video::create([
                'video' => $request->video,
                'category_id' => $request->category_id,
            ]);

            return back()->with('success', 'Video Gallery inserted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Error uploading the video: ' . $e->getMessage());
        }
    }

    public function editview(Request $request, $id)
    {
        try {
            $data['categories'] = Category::where(['iStatus' => 1, 'isDelete' => 0])->get();
            $data['video'] = Video::where(['iStatus' => 1, 'isDelete' => 0, 'videoId' => $id])->first();
            echo json_encode($data);
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }


    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:video_gallery,videoId',
            'video' => 'required',
            'category_id' => 'required|exists:category,category_id',
        ]);

        DB::table('video_gallery')
            ->where(['iStatus' => 1, 'isDelete' => 0, 'videoId' => $request->id])
            ->update([
                'category_id' => $request->category_id,
                'video' => $request->video,
            ]);

        return back()->with('success', 'Video Gallery updated successfully.');
    }

    public function delete(Request $request)
    {
        try {
            Video::where(['iStatus' => 1, 'isDelete' => 0, 'videoId' => $request->videoId])->delete();

            return back()->with('success', 'Video deleted successfully!');
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
}
