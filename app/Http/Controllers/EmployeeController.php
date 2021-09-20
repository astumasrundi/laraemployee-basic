<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller {
    public function index() {
        $data = Employee::all();
        return view('index', ['data' => $data]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        Employee::create(['nip' => $request->nip, 'nama' => $request->nama, 
            'jabatan' => $request->jabatan, 'unitkerja' => $request->unitkerja]);
        return redirect('/'); 
    }

    public function edit($id) {
        $data = Employee::find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $request, $id) {
        Employee::where('id', $id)->update(['nip' => $request->nip, 'nama' => $request->nama,
            'jabatan' => $request->jabatan, 'unitkerja' => $request->unitkerja]);
        return redirect('/'); 
    }

    public function destroy($id) {
        Employee::where('id', $id)->delete();
        return redirect('/'); 
    }
}
