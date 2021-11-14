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
                  <h5>{{$produk->Nama_produk}}</h5>
                  <hr>
                  <p>
                     RP. {{number_format ($produk->Harga) }} |
                     Stok : {{ $produk->Stok }}|
                     Berat : {{ $produk->Berat }}gr
                  </p>
                  <p>
                      {!! nl2br($produk->deskripsi) !!}
                  </p>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
