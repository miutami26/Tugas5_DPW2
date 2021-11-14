@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Edit  Data User
                </div>
                
                <div class="card-body">
                <form action="{{url('user',$user->id)}}" method="post">
                    @csrf
                    @method("PUT")
                
                    <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                </div>
                <div class="form-group">
                                <label for="" class="control-label">userNama</label>
                                <input type="text" class="form-control" name="username" value="{{$user->username}}">
                </div>
                <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" >
                </div>
                   
                <button class="btn btn-primary float-end"><i class="fa fa-save"> Simpan</i></button>
                        
                    
            </div>
        </div>
    </div>
</div>

@endsection

