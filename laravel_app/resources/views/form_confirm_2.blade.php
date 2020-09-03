<h2>フォーム 2</h2>
<h3>確認</h3>
<form method="post" action="{{ route('form2.send') }}">
    @csrf
    <label>Title</label>
	<div>
		{{ $input["title"] }}
	</div>
	<label>Body</label>
	<div>
		{{ $input['body'] }}
	</div>

	<input name="back" type="submit" value="戻る" />
	<input type="submit" value="送信" />

</form>