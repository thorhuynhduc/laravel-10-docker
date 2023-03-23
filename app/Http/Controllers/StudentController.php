<?php

namespace App\Http\Controllers;

use App\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected StudentService $studentService;

    public function __construct()
    {
        $this->studentService = app(StudentService::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $param = $request->all();
        if (empty($param['grade'])) {
            unset($param['grade']);
        }

        $students = $this->studentService->get($param);

        return view('index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $this->studentService->create($request->all());

        return response($result);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $result = $this->studentService->find($id);

        return response($result);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $result = $this->studentService->update($id, $request->all());

        return response($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->studentService->delete($id);

        return response($result);
    }
}
