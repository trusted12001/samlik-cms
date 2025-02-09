<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the about records.
     * (If you expect only one about record, you may simply redirect to edit.)
     */
    public function index()
    {
        // For demonstration, we'll paginate; if only one record is expected, you can use About::first()
        $abouts = About::paginate(10);
        return view('back-end.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new about record.
     */
    public function create()
    {
        return view('back-end.abouts.create');
    }

    /**
     * Store a newly created about record in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'article'            => 'required|string',
            'service_list_left'  => 'required|string',
            'service_list_right' => 'required|string',
            // Validate the image if uploaded. Adjust dimensions if needed.
            'image'              => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Optionally, you can set a dimension rule here if required.
            $validated['image'] = $request->file('image')->store('abouts', 'public');
        }

        About::create($validated);

        return redirect()->route('abouts.index')->with('success', 'About information created successfully.');
    }

    /**
     * Show the form for editing the specified about record.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('back-end.abouts.edit', compact('about'));
    }

    /**
     * Update the specified about record in storage.
     */
    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $validated = $request->validate([
            'article'            => 'required|string',
            'service_list_left'  => 'required|string',
            'service_list_right' => 'required|string',
            'image'              => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image if it exists.
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            $validated['image'] = $request->file('image')->store('abouts', 'public');
        }

        $about->update($validated);

        return redirect()->route('abouts.index')->with('success', 'About information updated successfully.');
    }

    /**
     * Remove the specified about record from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        if ($about->image && Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }
        $about->delete();
        return redirect()->route('abouts.index')->with('success', 'About information deleted successfully.');
    }
}
