<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the slider items.
     */
    public function index()
    {
        // Use pagination instead of all() to enable links() in the view.
        $sliders = Slider::paginate(10);
        return view('back-end.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for editing a slider item.
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('back-end.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified slider item.
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        // Validation rules:
        $rules = [
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ];

        // If a new image is uploaded, validate it:
        if ($request->hasFile('image')) {
            $rules['image'] = 'image|mimes:jpg,jpeg|dimensions:width=1540,height=580';
        }

        $validated = $request->validate($rules);

        // Process image upload if exists
        if ($request->hasFile('image')) {
            // Optionally, delete the old image:
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            // Store the new image in a 'sliders' folder inside the public disk.
            $imagePath = $request->file('image')->store('sliders', 'public');
            $validated['image'] = $imagePath;
        }

        $slider->update($validated);

        return redirect()->route('sliders.index')->with('success', 'Slider updated successfully.');
    }
}
