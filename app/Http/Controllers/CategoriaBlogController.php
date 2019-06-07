<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriaBlogRequest;
use App\Http\Requests\UpdateCategoriaBlogRequest;
use App\Repositories\CategoriaBlogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoriaBlogController extends AppBaseController
{
    /** @var  CategoriaBlogRepository */
    private $categoriaBlogRepository;

    public function __construct(CategoriaBlogRepository $categoriaBlogRepo)
    {
        $this->categoriaBlogRepository = $categoriaBlogRepo;
    }

    /**
     * Display a listing of the CategoriaBlog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoriaBlogs = $this->categoriaBlogRepository->all();

        return view('categoria_blogs.index')
            ->with('categoriaBlogs', $categoriaBlogs);
    }

    /**
     * Show the form for creating a new CategoriaBlog.
     *
     * @return Response
     */
    public function create()
    {
        return view('categoria_blogs.create');
    }

    /**
     * Store a newly created CategoriaBlog in storage.
     *
     * @param CreateCategoriaBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoriaBlogRequest $request)
    {
        $input = $request->all();

        $categoriaBlog = $this->categoriaBlogRepository->create($input);

        Flash::success('Categoria Blog saved successfully.');

        return redirect(route('categoriaBlogs.index'));
    }

    /**
     * Display the specified CategoriaBlog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoriaBlog = $this->categoriaBlogRepository->find($id);

        if (empty($categoriaBlog)) {
            Flash::error('Categoria Blog not found');

            return redirect(route('categoriaBlogs.index'));
        }

        return view('categoria_blogs.show')->with('categoriaBlog', $categoriaBlog);
    }

    /**
     * Show the form for editing the specified CategoriaBlog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoriaBlog = $this->categoriaBlogRepository->find($id);

        if (empty($categoriaBlog)) {
            Flash::error('Categoria Blog not found');

            return redirect(route('categoriaBlogs.index'));
        }

        return view('categoria_blogs.edit')->with('categoriaBlog', $categoriaBlog);
    }

    /**
     * Update the specified CategoriaBlog in storage.
     *
     * @param int $id
     * @param UpdateCategoriaBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoriaBlogRequest $request)
    {
        $categoriaBlog = $this->categoriaBlogRepository->find($id);

        if (empty($categoriaBlog)) {
            Flash::error('Categoria Blog not found');

            return redirect(route('categoriaBlogs.index'));
        }

        $categoriaBlog = $this->categoriaBlogRepository->update($request->all(), $id);

        Flash::success('Categoria Blog updated successfully.');

        return redirect(route('categoriaBlogs.index'));
    }

    /**
     * Remove the specified CategoriaBlog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoriaBlog = $this->categoriaBlogRepository->find($id);

        if (empty($categoriaBlog)) {
            Flash::error('Categoria Blog not found');

            return redirect(route('categoriaBlogs.index'));
        }

        $this->categoriaBlogRepository->delete($id);

        Flash::success('Categoria Blog deleted successfully.');

        return redirect(route('categoriaBlogs.index'));
    }
}
