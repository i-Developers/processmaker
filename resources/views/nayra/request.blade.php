@extends('layouts.layout')

@section('content')
<div class="container" id="start">
    <request-form 
        process-uid="{{$process->uid}}" instance-uid="{{$instance->uid}}" token-uid="{{$token->uid}}"
        start-date="{{$startDate}}" end-date="{{$endDate}}" reason="{{$reason}}"></request-form>
    <div class="alert alert-success" v-for="message in messages">@{{message.message}}: <a v-bind:href="message.url" target="_blank">@{{message.uid}}</a></div>
</div>
@endsection

@section('js')
<script src="{{mix('js/nayra/start.js')}}"></script>
@endsection
