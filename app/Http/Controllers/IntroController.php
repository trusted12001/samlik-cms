<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IntroController extends Controller
{
    // Display a paginated listing of intros
    public function index()
    {
        $intros = Intro::paginate(10);
        return view('back-end.intros.index', compact('intros'));
    }

    // Show the form for creating a new intro item
    public function create()
    {
        return view('back-end.intros.create');
    }

    // Store a newly created intro item in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpg,jpeg|dimensions:width=570,height=250',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('intros', 'public');
        }

        Intro::create($validated);
        return redirect()->route('intros.index')->with('success', 'Intro created successfully.');
    }

    // Show the form for editing the specified intro item
    public function edit($id)
    {
        $intro = Intro::findOrFail($id);
        return view('back-end.intros.edit', compact('intro'));
    }

    // Update the specified intro item in storage
    public function update(Request $request, $id)
    {
        $intro = Intro::findOrFail($id);
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg|dimensions:width=1540,height=580',
        ]);

        if ($request->hasFile('image')) {
            // Optionally delete the old image if it exists
            if ($intro->image && Storage::disk('public')->exists($intro->image)) {
                Storage::disk('public')->delete($intro->image);
            }
            $validated['image'] = $request->file('image')->store('intros', 'public');
        }

        $intro->update($validated);
        return redirect()->route('intros.index')->with('success', 'Intro updated successfully.');
    }

    // Optionally, delete the specified intro item
    public function destroy($id)
    {
        $intro = Intro::findOrFail($id);
        if ($intro->image && Storage::disk('public')->exists($intro->image)) {
            Storage::disk('public')->delete($intro->image);
        }
        $intro->delete();
        return redirect()->route('intros.index')->with('success', 'Intro deleted successfully.');
    }
}
