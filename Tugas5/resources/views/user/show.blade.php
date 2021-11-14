@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                </div>
                
                <div class="card-body">
                  <h5>{{$user->nama}}</h5>
                  <hr>
                  <p>
                     {{"@".$user->username}}|
                     Email : {{$user->email}}</p>
                  
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
