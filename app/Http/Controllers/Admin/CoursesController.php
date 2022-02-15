<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCourseRequest;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Institution;
use App\Level;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $courses = Course::all();

        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        abort_if(Gate::denies('course_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institutions = Institution::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $levels = Level::all();

        return view('admin.courses.create', compact('institutions', 'levels'));
    }

    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->all());

        if ($request->input('photo', false)) {
            $course->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
        }

        return redirect()->route('admin.courses.index');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('course_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $institutions = Institution::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $levels = Level::all();

        $course = Course::find($id);

        return view('admin.courses.edit', compact('institutions', 'course', 'levels'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->all());

        if ($request->input('photo', false)) {
            if (!$course->photo || $request->input('photo') !== $course->photo->file_name) {
                $course->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo');
            }
        } elseif ($course->photo) {
            $course->photo->delete();
        }

        return redirect()->route('admin.courses.index');
    }

    public function show($id)
    {
        abort_if(Gate::denies('course_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course = Course::find($id);

        return view('admin.courses.show', compact('course'));
    }

    public function destroy(Course $course)
    {
        abort_if(Gate::denies('course_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course->delete();

        return back();
    }

    public function massDestroy(MassDestroyCourseRequest $request)
    {
        Course::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
