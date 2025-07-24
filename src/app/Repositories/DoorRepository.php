<?php

namespace App\Repositories;

use App\Models\Door;
use Illuminate\Database\Eloquent\Collection;

class DoorRepository
{
    public function getAll(): Collection
    {
        return Door::all();
    }

    public function getById(int $id): Door
    {
        return Door::findOrFail($id);
    }

    public function create(array $data): Door
    {
        return Door::create($data);
    }
}