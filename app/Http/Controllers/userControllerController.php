<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateuserControllerRequest;
use App\Http\Requests\UpdateuserControllerRequest;
use App\Repositories\userControllerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class userControllerController extends AppBaseController
{
    /** @var  userControllerRepository */
    private $userControllerRepository;

    public function __construct(userControllerRepository $userControllerRepo)
    {
        $this->userControllerRepository = $userControllerRepo;
    }

    /**
     * Display a listing of the userController.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userControllers = $this->userControllerRepository->all();

        return view('user_controllers.index')
            ->with('userControllers', $userControllers);
    }

    /**
     * Show the form for creating a new userController.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_controllers.create');
    }

    /**
     * Store a newly created userController in storage.
     *
     * @param CreateuserControllerRequest $request
     *
     * @return Response
     */
    public function store(CreateuserControllerRequest $request)
    {
        $input = $request->all();

        $userController = $this->userControllerRepository->create($input);

        Flash::success('User Controller saved successfully.');

        return redirect(route('userControllers.index'));
    }

    /**
     * Display the specified userController.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userController = $this->userControllerRepository->find($id);

        if (empty($userController)) {
            Flash::error('User Controller not found');

            return redirect(route('userControllers.index'));
        }

        return view('user_controllers.show')->with('userController', $userController);
    }

    /**
     * Show the form for editing the specified userController.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userController = $this->userControllerRepository->find($id);

        if (empty($userController)) {
            Flash::error('User Controller not found');

            return redirect(route('userControllers.index'));
        }

        return view('user_controllers.edit')->with('userController', $userController);
    }

    /**
     * Update the specified userController in storage.
     *
     * @param int $id
     * @param UpdateuserControllerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateuserControllerRequest $request)
    {
        $userController = $this->userControllerRepository->find($id);

        if (empty($userController)) {
            Flash::error('User Controller not found');

            return redirect(route('userControllers.index'));
        }

        $userController = $this->userControllerRepository->update($request->all(), $id);

        Flash::success('User Controller updated successfully.');

        return redirect(route('userControllers.index'));
    }

    /**
     * Remove the specified userController from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userController = $this->userControllerRepository->find($id);

        if (empty($userController)) {
            Flash::error('User Controller not found');

            return redirect(route('userControllers.index'));
        }

        $this->userControllerRepository->delete($id);

        Flash::success('User Controller deleted successfully.');

        return redirect(route('userControllers.index'));
    }
}
