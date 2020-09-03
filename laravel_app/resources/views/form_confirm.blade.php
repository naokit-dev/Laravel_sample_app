<h2>フォーム 1</h2>
<h3>確認</h3>
<form method="post" action="{{ route('form.send') }}">
    @csrf
    <label>First Name</label>
	<div>
		{{ $input["first_name"] }}
	</div>
	<label>Last Name</label>
	<div>
		{{ $input['last_name'] }}
	</div>

	<input name="back" type="submit" value="戻る" />
	<input type="submit" value="送信" />

</form>