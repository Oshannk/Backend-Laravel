<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return  $this->userRepository->all();

    }

    public function show($id)
    {
        return $this->userRepository->findById($id);

    }

    public function store()
    {

        $this->userRepository->store();

    }

    public function update($id){

        $this->userRepository->update($id);

    }

    public function delete($id)
    {

        $this->userRepository->delete($id);

    }
}
