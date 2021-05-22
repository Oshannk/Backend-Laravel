<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
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

    public function store(Request $request)
    {

        return $this->userRepository->store();
    
    }

    public function update($id){

        return $this->userRepository->update($id);

    }

    public function delete($id)
    {

        return $this->userRepository->delete($id);

    }
}
