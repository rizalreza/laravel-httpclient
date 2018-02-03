@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	

            <table class="table" >
           
                  <thead>
                    <tr>
                      <th><center>Nama</center></th>
                      <th><center>NIP</center></th>
                      <th><center>Jabatan ID</center></th>
                      <th><center>Jabatan</center></th>
                      <th><center>Jobdesk</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     @foreach($contentjoin as $data)
                      <td style="width:20%">{{ $data->nama }}</td>
                      <td style="width:15%">{{ $data->nip }}</td>
                      <td style="width:20%">{{ $data->jabatan_id }}</td> 
                      <td style="width:15%">{{ $data->jabatan}}</td> 
                      <td style="width:25%">{{ $data->jobdesk}}</td> 
                      
                    </tr>
                    @endforeach
                  </tbody>
            
             </table>

            
        </div>
    </div>
</div>

@endsection