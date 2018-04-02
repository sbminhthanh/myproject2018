<script>
@if(count($errors)>0){
	@foreach($errors->all() as $ms)
		swal(
		'Thông báo',
		'{{$ms}}',
		'error'
		)
	@endforeach
}
@endif

@if(session('message_error')))
    swal(
		'Thông báo',
		'{{session("message_error")}}',
		'error'
		)
@endif

@if(session('message_success'))
    swal(
		'Thông báo',
		'{{session("message_success")}}',
		'success'
		)
@endif
</script>