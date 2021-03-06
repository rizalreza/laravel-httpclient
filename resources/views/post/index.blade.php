@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	

            <table class="table" >
           
                  <thead>
                    <tr>
                      <th><center>Nama</center></th>
                      <th><center>NIP</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>No HP</center></th>
                      <th><center>Email</center></th>
                      <th><center>Jabatan Id</center></th>
                      <th colspan="2"><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     @foreach($content as $data)
                      <td style="width:15%">{{ $data->nama }}</td>
                      <td style="width:15%">{{ $data->nip }}</td>
                      <td style="width:20%">{{ $data->alamat }}</td>
                      <td style="width:10%">{{ $data->hp }}</td>
                      <td style="width:15%">{{ $data->email }}</td> 
                      <td style="width:15%">{{ $data->jabatan_id }}</td> 
                      <td style="width:5%"><center>
                       
                        <a href="{{URL('post/' . $data->id . '/edit') }}" class="btn btn-primary">Update</a>

                      </center></td>
                      <td style="width:6%"><center>
                            <form onclick="return confirm('Are you sure?')" action="{{ route('post.destroy', [$data->id]) }}" method="post">
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