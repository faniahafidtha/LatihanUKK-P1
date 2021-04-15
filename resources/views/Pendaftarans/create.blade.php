@extends('adminlte::page')
@section('content')
<title>Tambah Data</title>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br><a class="btn btn-primary" href="{{ route('pendaftarans.index') }}">Kembali</a><br>
            <br><h2>Tambah Data Pendaftar Baru</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pendaftarans.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>NIS</strong>
                <input type="text" name="nis" class="form-control">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Nama Lengkap</strong>
                <input type="text" name="nama" class="form-control">
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Jenis Kelamin</strong>
                    <select name="jk" class="form-control">
                     <option></option>
                     <option value="Laki-laki">Laki-laki</option>
                     <option value="Perempuan">Perempuan</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Tempat Lahir</strong>
                <input type="text" name="tmp_lahir" class="form-control">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tanggal Lahir</strong>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Alamat</strong>
                <textarea class="form-control" style="height:150px" name="alamat"></textarea>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Asal Sekolah</strong>
                <input type="text" name="asal_sekolah" class="form-control">
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Kelas</strong>
                <input type="text" name="kelas" class="form-control">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Jurusan</strong>
                    <select name="jurusan" class="form-control">
                        <option></option>
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TKJ">Teknik Komputer Jaringan</option>
                        <option value="MMD">Multimedia</option>
                        <option value="OTKP">Otomatisasi Tata Kelola Perkantoran</option>
                        <option value="BDP">Bisnis Daring Pemasaran</option>
                        <option value="TBG">Tata Boga</option>
                        <option value="HTL">Hotel</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>   
</form>
@endsection