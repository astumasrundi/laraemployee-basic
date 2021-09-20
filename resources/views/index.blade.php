@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header"><h1>Daftar Data Pegawai</h1></div>
            <a href="{{ url('employee/create') }}" class="btn btn-primary mb-4">Tambah Data</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Unit Kerja</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $key => $item)
                        <form action="{{ url('employee/'.$item->id) }}" method="POST" id="form-{{ $item->id }}">
                            @method('DELETE')
                            @csrf
                        </form>
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->unitkerja }}</td>
                            <td>
                                <a href="{{ url('employee/'.$item->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="javascript:void(0);" class="btn btn-sm btn-danger" onclick="$('#form-{{ $item->id }}').submit(); return false;">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">- Tidak ada data -</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection