<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(10);
        return view('back-end.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('back-end.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'full_image'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'thumb_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'date'        => 'required|date',
        ]);

        if ($request->hasFile('full_image')) {
            $validated['full_image'] = $request->file('full_image')->store('projects/full', 'public');
        }
        if ($request->hasFile('thumb_image')) {
            $validated['thumb_image'] = $request->file('thumb_image')->store('projects/thumbs', 'public');
        }

        Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('back-end.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'full_image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'thumb_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'date'        => 'required|date',
        ]);

        if ($request->hasFile('full_image')) {
            if ($project->full_image && Storage::disk('public')->exists($project->full_image)) {
                Storage::disk('public')->delete($project->full_image);
            }
            $validated['full_image'] = $request->file('full_image')->store('projects/full', 'public');
        }

        if ($request->hasFile('thumb_image')) {
            if ($project->thumb_image && Storage::disk('public')->exists($project->thumb_image)) {
                Storage::disk('public')->delete($project->thumb_image);
            }
            $validated['thumb_image'] = $request->file('thumb_image')->store('projects/thumbs', 'public');
        }

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if ($project->full_image && Storage::disk('public')->exists($project->full_image)) {
            Storage::disk('public')->delete($project->full_image);
        }
        if ($project->thumb_image && Storage::disk('public')->exists($project->thumb_image)) {
            Storage::disk('public')->delete($project->thumb_image);
        }
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
