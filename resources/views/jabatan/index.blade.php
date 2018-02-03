@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        	

            <table class="table" >
           
                  <thead>
                    <tr>
                      <th><center>Jabatan</center></th>
                      <th><center>Jobdesk</center></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     @foreach($contentjabatan as $datajabatan)
                      <td style="width:20%">{{ $datajabatan->jabatan }}</td>
                      <td style="width:25%">{{ $datajabatan->jobdesk }}</td>
                      <td style="width:6%"><center>
                       
                        <a href="{{URL('jabatan/' . $datajabatan->id . '/edit') }}" class="btn btn-primary">Update</a>

                      </center></td>
                      <td style="width:6%"><center>
                            <form onclick="return confirm('Are you sure?')" action="{{ route('jabatan.destroy', [$datajabatan->id]) }}" method="post">
                             {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                       </center></td>
                    </tr>
                    @endforeach
                  </tbody>
            
             </table>

            
        </div>
    </div>
</div>

@endsection