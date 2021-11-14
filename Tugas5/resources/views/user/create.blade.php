@extends('template.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Tambah  Data user
                </div>
                
                <div class="card-body">
                <form action="{{url('user')}}" method="post">
                    @csrf
                    
                <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                                <label for="" class="control-label">userNama</label>
                                <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password" >
                </div>
                   
                <button class="btn btn-primary float-end"><i class="fa fa-save"> Simpan</i></button>
                        
                    
            </div>
        </div>
    </div>
</div>

@endsection

