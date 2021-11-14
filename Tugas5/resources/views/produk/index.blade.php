@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                 <b>Data Produk</b>
                <a href="{{url('produk/create')}}" class="btb btn-primary float-end"><i class="fa fa-plus"></i> tambah Data</a>
                
                </div>
                <div class="card-body">
                <table class="table">
                <thead>
                           <th>No</th>
                           <th>Aksi</th>
                           <th>Nama</th>
                           <th>Harga</th>
                           <th>Stok</th>
                           
                </thead> 
                <tbody>
                           @foreach($list_produk as $produk)
                           <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>
                                <div class="btn-group">
                                   <a href="{{url('produk' ,$produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                   <a href="{{url('',$produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                   @include('template.utils.delete', ['url' => url('produk', $produk->id)])
                                </div>  
                               </td>
                               <td>{{$produk->Nama_produk}}</td>
                               <td>{{$produk->Harga}}</td>
                               <td>{{$produk->Stok}}</td>
                               
                           </tr>
                           @endforeach
                       </tbody>  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection