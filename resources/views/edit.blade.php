@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header"><h1>Form Edit Data Pegawai</h1></div>
        </div>
        <div class="col-lg-12">
            <form action="{{ url('employee/'.$data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label mt-4 mb-2">
                        <strong>NIP <span class="text-danger">*</span></strong>
                    </label>
                    <input type="text" name="nip" value="{{ $data->nip }}" 
                        class="form-control" placeholder="NIP" required>
                </div>
                <div class="form-group">
                    <label class="form-label mt-4 mb-2">
                        <strong>Nama Lengkap <span class="text-danger">*</span></strong>
                    </label>
                    <input type="text" name="nama" value="{{ $data->nama }}" 
                        class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label class="form-label mt-4 mb-2">
                        <strong>Jabatan <span class="text-danger">*</span></strong>
                    </label>
                    <input type="text" name="jabatan" value="{{ $data->jabatan }}" 
                        class="form-control" placeholder="Jabatan" required>
                </div>
                <div class="form-group">
                    <label class="form-label mt-4 mb-2">
                        <strong>Unit Kerja <span class="text-danger">*</span></strong>
                    </label>
                    <input type="text" name="unitkerja" value="{{ $data->unitkerja }}" 
                        class="form-control" placeholder="Unit Kerja" required>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                <a href="{{ url('/') }}" class="btn btn-warning mt-4">Batal</a>
            </form>
        </div>
    </div>
@endsection