@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
			<form action="{{ route('question.store') }}" method="POST" class="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<h1>Sana göre kitap önerisi iste</h1>
					<p>Kendinden, ruh halinden ve beklentinden bahset, sana sevebileceğin bir kitap önerelim. Hem de makineden değil, yayıncılık alanında deneyimli editörlerin sana özel yanıtlarıyla.</p>
				</div>
				<div class="form-group">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
				</div>
				<div class="form-group">
					<textarea name="question" id="txtQuestion" rows="5" class="form-control" placeholder="Buraya yazarak başla...">{{ old('question') }}</textarea>
				</div>
				<div class="form-group">
					<div class="row">
						<label for="inputEmail" class="col-sm-2 control-label">E-Posta</label>
						<div class="col-sm-10">
							<input name="email" value="{{ old('email') }}" type="email" class="form-control" id="inputEmail" placeholder="Yanıttan haberdar olmak istersen e-postanı girebilirsin">
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="bbtn btn-primary btn-lg btn-block">Öneri İste</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection