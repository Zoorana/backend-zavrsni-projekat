<?php

namespace App\Http\Controllers;

use App\Models\AssignmentStudent;
use App\Http\Requests\StoreAssignmentStudentRequest;
use App\Http\Requests\UpdateAssignmentStudentRequest;

class AssignmentStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignmentStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignmentStudent  $assignmentStudent
     * @return \Illuminate\Http\Response
     */
    public function show(AssignmentStudent $assignmentStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignmentStudent  $assignmentStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignmentStudent $assignmentStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignmentStudentRequest  $request
     * @param  \App\Models\AssignmentStudent  $assignmentStudent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignmentStudentRequest $request, AssignmentStudent $assignmentStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignmentStudent  $assignmentStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignmentStudent $assignmentStudent)
    {
        //
    }
}
