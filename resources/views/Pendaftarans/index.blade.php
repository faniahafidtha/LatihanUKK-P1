@extends('adminlte::page')
@section('content')
<title>Form Pendaftaran</title>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><h2>Form Pendaftaran</h2>
                <a class="btn btn-success" href="{{ route('pendaftarans.create') }}">Daftar Baru</a>
            </div>
        </div>
    </div>
    <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>NIS Siswa</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="175px">Action</th>
        </tr>
        @foreach ($pendaftarans as $pendaftaran)
        <tr>
            <td>{{ $pendaftaran->nis }}</td>
            <td>{{ $pendaftaran->nama }}</td>
            <td>{{ $pendaftaran->jk }}</td>
            <td>{{ $pendaftaran->tmp_lahir }}</td>
            <td>{{ $pendaftaran->tgl_lahir }}</td>
            <td>{{ $pendaftaran->alamat }}</td>
            <td>{{ $pendaftaran->asal_sekolah }}</td>
            <td>{{ $pendaftaran->kelas }}</td>
            <td>{{ $pendaftaran->jurusan }}</td>
            <td>
                <form action="{{ route('pendaftarans.destroy',$pendaftaran->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('pendaftarans.edit',$pendaftaran->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $pendaftarans->links() !!} 
@endsection