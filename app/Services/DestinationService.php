<?php

namespace App\Services;

use App\Models\Destination;
use App\Services\DestinationServiceInf;
use Illuminate\Support\Facades\Storage;

class DestinationService implements DestinationServiceInf
{
    public function getDestinations()
    {
        $destination = Destination::query()->get();

        return $destination;
    }

    public function storeDestination($validated)
    {
        $storeImage = Storage::disk('public')->put('image', $validated['image']);
        $validated['image'] = $storeImage;
        Destination::query()->create($validated);
    }

    public function updateDestination($validated, $destination)
    {
        if ($validated['image']) {
            Storage::disk('public')->delete($destination->image);
            $storeImage = Storage::disk('public')->put('image', $validated['image']);
            $validated['image'] = $storeImage;
            $destination->update($validated);
        } else {
            $destination->update($validated);
        }
    }

    public function deleteDestination($destination)
    {
        $destination->delete();
    }
}

?>