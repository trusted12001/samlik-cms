<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use Illuminate\Http\Request;

class ContactInformationController extends Controller
{
    public function index()
    {
        // Assuming there is only one record
        $contactInfo = ContactInformation::first();
        return view('back-end.contact.index', compact('contactInfo'));
    }

    public function create()
    {
        return view('back-end.contact.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required|string',
            'website' => 'required|string',
            'phone'   => 'required|string',
            'email'   => 'required|email',
            'map'     => 'nullable|string',
        ]);

        ContactInformation::create($validated);
        return redirect()->route('contact.index')->with('success', 'Contact information saved successfully.');
    }

    public function edit($id)
    {
        $contactInfo = ContactInformation::findOrFail($id);
        return view('back-end.contact.edit', compact('contactInfo'));
    }

    public function update(Request $request, $id)
    {
        $contactInfo = ContactInformation::findOrFail($id);
        $validated = $request->validate([
            'address' => 'required|string',
            'website' => 'required|string',
            'phone'   => 'required|string',
            'email'   => 'required|email',
            'map'     => 'nullable|string',
        ]);

        $contactInfo->update($validated);
        return redirect()->route('contact.index')->with('success', 'Contact information updated successfully.');
    }

    public function destroy($id)
    {
        $contactInfo = ContactInformation::findOrFail($id);
        $contactInfo->delete();
        return redirect()->route('contact.index')->with('success', 'Contact information deleted successfully.');
    }
}
