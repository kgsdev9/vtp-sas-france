<?php

namespace App\Repositories;

use App\Models\Synchronisation;

class SynchronisationRepository
{

    protected $synchronisation;

    public function __construct(Synchronisation $synchronisation)
    {
        $this->synchronisation = $synchronisation;
    }

    public function find(Int $applicationId, String $type)
    {
        return $this->synchronisation
                    ->where('application_id', $applicationId)
                    ->where('type', $type)
                    ->first();
    }

    public function save(Object $data)
    {
        if ($data->id) {
            $synchronisation = $this->synchronisation->find($data->id);
        } else {
            $synchronisation = new Synchronisation;
        }
        $synchronisation->application_id = $data->application_id ?? $synchronisation->application_id;
        $synchronisation->type = $data->type ?? $synchronisation->type;
        $synchronisation->updated_at = date('Y-m-d H:i:s');
        $synchronisation->save();

        return $synchronisation;
    }

}