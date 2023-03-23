<?php

namespace App\Services;

use App\Repositories\StudentRepository;

class StudentService
{
    public StudentRepository $studentRepository;

    public function __construct()
    {
        $this->studentRepository = app(StudentRepository::class);
    }

    public function get($params)
    {
        return $this->studentRepository->findWhere($params);
    }

    public function find($userId)
    {
        return $this->studentRepository->find($userId);
    }

    public function create($data)
    {
        return $this->studentRepository->create($data);
    }

    public function update($userId, $data)
    {
        return $this->studentRepository->update($data, $userId);
    }

    public function delete($userId)
    {
        return $this->studentRepository->delete($userId);
    }
}
