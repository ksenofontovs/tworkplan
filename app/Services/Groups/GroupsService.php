<?php

namespace App\Services\Groups;

use App\Models\Group;
use App\Services\Groups\Repositories\GroupRepositoryInterface;

class GroupsService
{

    private GroupRepositoryInterface $repository;

    public function __construct(GroupRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function search(array $filters)
    {
        return $this->repository->search($filters);
    }

    public function selectAll()
    {
        return $this->repository->selectAll();
    }

    public function create(array $data)
    {
        return $this->repository->createFromArray($data);
    }

    public function update(Group $model, array $data)
    {
        return $this->repository->updateFromArray($model, $data);
    }

    public function delete(Group $model)
    {
        return $this->repository->delete($model);
    }

}
