<?php

namespace App\Services;

interface DestinationServiceInf
{
    public function getDestinations();

    public function storeDestination($validated);

    public function updateDestination($validated, $destination);

    public function deleteDestination($destination);
}

?>
