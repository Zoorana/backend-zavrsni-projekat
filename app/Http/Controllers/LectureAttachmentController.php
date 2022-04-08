<?php

namespace App\Http\Controllers;

use App\Models\LectureAttachment;
use App\Http\Requests\StoreLectureAttachmentRequest;
use App\Http\Requests\UpdateLectureAttachmentRequest;

class LectureAttachmentController extends Controller
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
     * @param  \App\Http\Requests\StoreLectureAttachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLectureAttachmentRequest $request)
    {
        $newFilePath = $request->file("fileToUpload")->store("uploads");
        $attachment = LectureAttachment::query()->create(
            array_merge(["file_path" => $newFilePath], $request->validated())
        );
        if($request->expectsJson()){
            return response($attachment, 201);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LectureAttachment  $lectureAttachment
     * @return \Illuminate\Http\Response
     */
    public function show(LectureAttachment $lectureAttachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LectureAttachment  $lectureAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(LectureAttachment $lectureAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLectureAttachmentRequest  $request
     * @param  \App\Models\LectureAttachment  $lectureAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLectureAttachmentRequest $request, LectureAttachment $lectureAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LectureAttachment  $lectureAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(LectureAttachment $lectureAttachment)
    {
        //
    }
}
