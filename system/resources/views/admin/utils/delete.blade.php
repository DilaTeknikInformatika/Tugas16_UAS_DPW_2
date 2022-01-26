<form action="{{$url}}" method="post" class="btn-group"onclick="return confirm('Yakin Anda Menghapus Data Ini?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>	
