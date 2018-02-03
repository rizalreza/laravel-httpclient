@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row center">
            <div class="col-sm-6 col-sm-offset-3">
            <form class="" action="{{ url('/jabatan/update')}}/{{$contentjabatan->id}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="hidden" class="form-control" name="_method" value="PUT">
                    <input type="text" class="form-control" name="jabatan" value="{{$contentjabatan->jabatan}}">
                </div>

                <div class="form-group">
                    <label for="">Jobdesk</label>
                    <input type="text" class="form-control" name="jobdesk" value="{{$contentjabatan->jobdesk}}">
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save" name="">
                     
                </div>
                
            </form>
            </div>
        </div>
    </div>
@endsection