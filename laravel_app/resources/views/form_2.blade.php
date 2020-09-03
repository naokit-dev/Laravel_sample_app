<h2>フォーム 2</h2>
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

<form method="post" action="{{ route('form2.post') }}">
	@csrf

	<label>Title</label>
	<div>
		<input type="text" name="title" value="{{ old('title') }}" />
	</div>
	<label>Body</label>
	<div>
		<input type="text" name="body" value="{{ old('body') }}" />
	</div>

	<input class="btn btn-primary" type="submit" value="送信" />
</form>