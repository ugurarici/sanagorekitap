@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
	<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
			<form action="s" method="POST" class="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<h1>Sana göre kitap önerisi iste</h1>
				<div class="form-group">
					<p>Kendinden, ruh halinden ve beklentinden bahset, sana sevebileceğin bir kitap önerelim. Hem de makineden değil, yayıncılık alanında deneyimli editörlerin sana özel yanıtlarıyla.</p>
				</div>
				<div class="form-group">
					<textarea name="question" id="txtQuestion" rows="5" class="form-control" placeholder="Buraya yazarak başla..."></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="bbtn btn-primary btn-lg btn-block">Gönder</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection