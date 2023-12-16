@extends('layouts.app')
<style>
    .mailer-inbox {
    background-color: #f7f7f7;
    padding: 20px;
}

.message {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

p {
    margin-bottom: 5px;
}
</style>
@section('content')
<div class="mailer-inbox">
    <h2>Boîte de réception</h2>

    @foreach($messages as $message)
        <div class="message">
            <h3>{{ $message->subject }}</h3>
            <p>De: {{ $message->sender }}</p>
            <p>Date: {{ $message->created_at }}</p>
            <p>{{ $message->body }}</p>
        </div>
    @endforeach
</div>
@endsection

