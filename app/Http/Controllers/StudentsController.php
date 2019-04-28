<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller {

	public function index() {
		$data = Student::all();
		return view('index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		return view('add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		
		$insert = new Student();
		$insert->name = $request->name;
		$insert->city = $request->city;
		$insert->save();
		#Student::create($request->all());
		return redirect('/student');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$student = Student::find($id)->first();
		return view('view', compact('student'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$data = Student::where('id', $id)->first();
		return view('edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$data = Student::find($id);
		$data->name = $request['name'];
		$data->city = $request['city'];
		$data->save();
		return redirect('/student');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Student  $student
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {

		Student::find($id)->delete();
		return redirect('/student');
	}
}
