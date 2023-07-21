<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {

        $services = Service::all();
        
        return view('admin.pages.services.index', ['services' => $services]);
    }

    //Create
    public function create()
    {
        return view('admin.pages.services.create');
    }

    //Save service
    public function saveService(Request $request)
    {
        //Validate
        $request->validate([
           'title' => 'required|unique:services',
           'short_description' => 'required',
           'description' => 'required'

        ]);

        function makeUrlFromTitle($inputString) {
            // Convert special characters to their non-accented counterparts
            $inputString = iconv('UTF-8', 'ASCII//TRANSLIT', $inputString);
            // Replace spaces with hyphens (or underscores if you prefer)
            $url = str_replace(' ', '-', $inputString);
            // Remove any remaining non-alphanumeric characters except hyphens (or underscores)
            $url = preg_replace('/[^a-zA-Z0-9\-_]/', '', $url);
            // Make the URL lowercase
            $url = strtolower($url);
            return $url;
        }

        $url = makeUrlFromTitle($request->title);

        //Store data
        $service = new Service();
        $service->title = $request->title;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->url = $url;
        $service->save();

        //Return response to FE
        return redirect('admin/services')->with('success', 'Služba uložena');
    }

    public function editService($id)
    {

        $service = Service::findOrFail($id);
        return view('admin.pages.services.edit', ['service' => $service]);
    }

    public function updateService(Request $request, $id)
    {
        dd($request->all());
    }

    public function deleteService($id)
    {
        Service::findOrFail($id)->delete();
        return back()->with('success', 'Služba smazána');
    }
}
