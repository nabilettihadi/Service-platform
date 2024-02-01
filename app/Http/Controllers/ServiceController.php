<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Afficher tous les services
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('services.index', compact('services'));
    }

    // Afficher un service spécifique
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('services.create');
    }

    // Stocker un nouveau service
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'cost' => 'nullable|numeric',
        ]);

        auth()->user()->services()->create($validatedData);

        return redirect()->route('services.index');
    }

    // Afficher le formulaire de modification
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // Mettre à jour un service existant
    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'cost' => 'nullable|numeric',
        ]);

        $service->update($validatedData);

        return redirect()->route('services.index');
    }

    // Supprimer un service
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('services.index');
    }
}