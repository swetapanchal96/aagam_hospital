<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Service;

class FaqController extends Controller
{
    public function index($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        $faqs = Faq::where('service_id', $serviceId)->where('isDelete', 0)->orderBy('faq_id', 'desc')->paginate(10);
        return view('admin.faqs.index', compact('faqs', 'service'));
    }

    public function create($serviceId)
    {
        $service = Service::findOrFail($serviceId);
        return view('admin.faqs.form', compact('service'));
    }

    public function store(Request $request, $serviceId)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string'
        ]);

        Faq::create([
            'service_id' => $serviceId,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('admin.services.faqs.index', $serviceId)->with('success', 'FAQ added successfully.');
    }

    public function edit(Faq $faq)
    {
        $service = $faq->service;
        return view('admin.faqs.form', compact('faq', 'service'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer' => 'required|string'
        ]);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('admin.services.faqs.index', $faq->service_id)->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->update(['isDelete' => 1]);
        return redirect()->route('admin.services.faqs.index', $faq->service_id)->with('success', 'FAQ deleted successfully.');
    }
}
