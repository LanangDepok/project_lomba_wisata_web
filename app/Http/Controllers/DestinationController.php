<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Services\DestinationServiceInf;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    private DestinationServiceInf $destinationServiceInf;
    public function __construct(DestinationServiceInf $destinationServiceInf)
    {
        $this->destinationServiceInf = $destinationServiceInf;
    }

    public function getDestinations()
    {
        $data = $this->destinationServiceInf->getDestinations();

        return view('home', ['data' => $data]);
    }

    public function getDestination(Destination $destination)
    {
        return view('detail', ['data' => $destination]);
    }

    public function createDestination()
    {
        return view('insert');
    }

    public function storeDestination(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $this->destinationServiceInf->storeDestination($validated);

        return redirect('/');
    }

    public function editDestination(Destination $destination)
    {
        return view('edit', ['data' => $destination]);
    }

    public function updateDestination(Request $request, Destination $destination)
    {
        $validated = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $this->destinationServiceInf->updateDestination($validated, $destination);

        return redirect('/');
    }

    public function deleteDestination(Destination $destination)
    {
        $this->destinationServiceInf->deleteDestination($destination);

        return redirect('/');
    }
}
