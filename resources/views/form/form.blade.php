<form action="" method="get" class="d-flex justify-content-center align-items-center flex-column gap-3">
	@csrf
	@foreach($fields as $name => $value)
		<label for="firstname">{{ $value }}</label>
		@if($name === 'description')
			<textarea class="form-control" name="{{ $name }}" id="{{ $name }}" cols="5" rows="5"></textarea>
		@else
			<input type="text" id="{{ $name }}" name="{{ $name }}" class="form-control">
		@endif
	@endforeach
	<button class="btn btn-success">Submit form</button>
</form>

