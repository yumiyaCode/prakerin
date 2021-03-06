@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="post">
                     <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kecamatan</label>
                            <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kota</label>
                            <select name="id_kota" class="form-control" id="">
                                @foreach($kota as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_kota == $kecamatan->kota->nama_kota)
                                    selected
                                @endif
                                >
                                {{$data->nama_kota}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{url()->previous()}}" class="btn btn-success">Kembali</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection