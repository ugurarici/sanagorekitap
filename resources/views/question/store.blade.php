@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><h1 style="margin: 0;">Tebrikler!</h1></div>
                <div class="panel-body">
                    <p>Talebinizi başarıyla aldık ve editörlerimizi bilgilendirdik.</p>
                    <p>E-posta adresinizi bıraktıysanız yanıt geldiğinde sizi bilgilendireceğiz.</p>
                    <p>E-posta adresinizi bırakmadıysanız yanıtın gelip gelmediğini kontrol etmek için aşağıdaki bağlantıyı kaydedebilirsiniz: </p>

                    <p>
                        <a href="{{ route('question.show', $id) }}">
                            <strong>{{ route('question.show', $id) }}</strong>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
