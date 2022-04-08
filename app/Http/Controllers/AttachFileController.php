<?php

namespace App\Http\Controllers;

use App\Models\AttachFile;
use App\Http\Requests\StoreAttachFileRequest;
use App\Http\Requests\UpdateAttachFileRequest;

class AttachFileController extends Controller
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
     * @param  \App\Http\Requests\StoreAttachFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttachFileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttachFile  $attachFile
     * @return \Illuminate\Http\Response
     */
    public function show(AttachFile $attachFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttachFile  $attachFile
     * @return \Illuminate\Http\Response
     */
    public function edit(AttachFile $attachFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttachFileRequest  $request
     * @param  \App\Models\AttachFile  $attachFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttachFileRequest $request, AttachFile $attachFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttachFile  $attachFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttachFile $attachFile)
    {
        //
    }
}
