@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row center">
            <div class="col-sm-6 col-sm-offset-3">
            <form class="" action="{{ url('/post/update')}}/{{$content->id}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="hidden" class="form-control" name="_method" value="PUT">
                    <input type="text" class="form-control" name="nama" value="{{$content->nama}}">
                </div>

                <div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" class="form-control" name="nip" value="{{$content->nip}}">
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{$content->alamat}}">
                </div>

                <div class="form-group">
                    <label for="">HP</label>
                    <input type="text" class="form-control" name="hp" value="{{$content->hp}}">
                </div>
                    
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$content->email}}">
                </div>

                <div class="form-group">
                    <label for="">Id Jabatan</label>
                    <input type="text" class="form-control" name="jabatan_id" value="{{$content->jabatan_id}}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save" name="">
                     
                </div>
                
            </form>
            </div>
        </div>
    </div>
@endsection