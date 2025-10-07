<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Service::with('category')->where('isDelete', 0);
    
        if ($request->filled('search')) {
            $query->where('serviceName', 'like', '%' . $request->search . '%');
        }
    
        $services = $query->orderBy('serviceId', 'desc')->paginate(10);
    
        return view('admin.services.index', compact('services'));
    }


    public function create()
    {
        $categories = Category::orderBy('category_name')->get();
        return view('admin.services.form', compact('categories'));
    }

    public function store(Request $request)
{
    $request->validate([
        'serviceName' => 'required|string|max:255',
        'serviceDescription' => 'required',
        'metaTitle' => 'required|string|max:255',
        'metaKeyword' => 'nullable|string|max:255',
        'metaDescription' => 'nullable|string',
        'category_id' => 'required|exists:category,category_id',
        'serviceImage' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->except(['serviceImage']);

    // Handle Image Upload
    if ($request->hasFile('serviceImage')) {
        $root = $_SERVER['DOCUMENT_ROOT'];
        $destinationPath = $root . '/Services/';

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        $fileName = time() . '_' . uniqid() . '.' . $request->serviceImage->extension();
        $request->serviceImage->move($destinationPath, $fileName);
        $data['serviceImage'] = $fileName;
    }

    Service::create($data);

    return redirect()->route('services.index')->with('success', 'Service created successfully.');
}

    public function edit(Service $service)
    {
        $categories = Category::orderBy('category_name')->get();
        return view('admin.services.form', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service)
{
    $request->validate([
        'serviceName' => 'required|string|max:255',
        'serviceDescription' => 'required',
        'metaTitle' => 'required|string|max:255',
        'metaKeyword' => 'nullable|string|max:255',
        'metaDescription' => 'nullable|string',
        'category_id' => 'required|exists:category,category_id',
        'serviceImage' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->except(['serviceImage']);

    // Handle Image Upload
    if ($request->hasFile('serviceImage')) {
        $root = $_SERVER['DOCUMENT_ROOT'];
        $destinationPath = $root . '/Services/';

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // Delete old image if exists
        if ($service->serviceImage && file_exists($destinationPath . $service->serviceImage)) {
            unlink($destinationPath . $service->serviceImage);
        }

        $fileName = time() . '_' . uniqid() . '.' . $request->serviceImage->extension();
        $request->serviceImage->move($destinationPath, $fileName);
        $data['serviceImage'] = $fileName;
    }

    $service->update($data);

    return redirect()->route('services.index')->with('success', 'Service updated successfully.');
}

    public function destroy(Service $service)
    {
        $root = $_SERVER['DOCUMENT_ROOT'];
        $destinationpath = $root . '/Services/';
        $imagePath = $destinationpath. $service->serviceImage;
            
        if (!empty($service->serviceImage) && file_exists($imagePath)) {
            unlink($imagePath);
        }
    

        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
