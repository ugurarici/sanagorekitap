@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{ $question->body }}</p>
                    <p>
                        <a href="{{ route('question.show', $question->id) }}" title="{{ $question->created_at->toDayDateTimeString() }}">
                            <small>
                                {{ $question->created_at->diffForHumans() }}
                            </small>
                        </a>
                    </p>
                    @if(count($question->answers)<1)
                    <div class="panel panel-warning" style="margin-bottom: 0;">
                        <div class="panel-heading">Henüz yanıtlanmamış</div>
                        <div class="panel-body">
                            <p>Bu talebe henüz yanıt verilmemiş. Editörlerimiz en kısa zamanda talebi yanıtlandıracak ve yanıt bu sayfada yer alacaktır</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
