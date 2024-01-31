<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect('/services')->with('success', 'Service créé avec succès.');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('services.show', compact('service'));
    }
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        return redirect('/services')->with('success', 'Service mis à jour avec succès.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/services')->with('success', 'Service supprimé avec succès.');
    }
}