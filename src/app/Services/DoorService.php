<?php

namespace App\Services;

use App\Models\Door;
use App\Repositories\DoorRepository;
use Illuminate\Database\Eloquent\Collection;

class DoorService
{
    public function __construct(private DoorRepository $doorRepository)
    {
    }

    public function getAllDoors(): Collection
    {
        return $this->doorRepository->getAll();
    }

    public function getDoorById(int $id): Door
    {
        return $this->doorRepository->getById($id);
    }

    public function createDoor(array $data): Door
    {
        return $this->doorRepository->create($data);
    }
}