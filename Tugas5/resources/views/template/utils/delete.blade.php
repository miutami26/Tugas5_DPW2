<form action="{{$url}}" method="post" class="from-inline" onsubmit="return confirm('yakin akan menghapus data ini?')">
    @csrf
    @method("delete")
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>