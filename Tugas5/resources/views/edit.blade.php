@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    Tambah  Data Produk
                </div>
                
                <div class="card-body">
                <form action="{{url('produk',$produk->id)}}" method="post">
                    @csrf
                    @method("PUT")
                
                <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$produk->Nama_produk}}">
                </div>
                    <div class="row ">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{$produk->Harga}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" class="form-control" name="berat" value="{{$produk->Berat}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" class="form-control" name="stok" value="{{$produk->Berat}}">
                                </div>
                        </div>
                    </div>
                                     
                        <div class="form-group">
                                <label for="" class="control-label">deskripsi</label>
                                <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                                
                        </div>
                        <button class="btn btn-primary float-end"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
             </div>
        </div>
    </div>
</div>

@endsection

