<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('front_end.students.index');
    }

    public function course()
    {
        return view('front_end.students.course-single');
    }

    public function course_list()
    {
        return view('front_end.students.course-list');
    }

    public function classes()
    {
        return view('front_end.students.classes');
    }

    public function error_page()
    {
        return view('front_end.students.404');
    }
}
