<h2>フォーム 1</h2>
<h3>入力</h3>
@if ($errors->any())
<div style="color:red;">
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
</div>
@endif

<form method="post" action="{{ route('form.post') }}">
	@csrf

	<label>First Name</label>
	<div>
		<input type="text" name="first_name" value="{{ old('first_name') }}" />
	</div>
	<label>Last Name</label>
	<div>
		<input type="text" name="last_name" value="{{ old('last_name') }}" />
	</div>

	<input class="btn btn-primary" type="submit" value="送信" />
</form>