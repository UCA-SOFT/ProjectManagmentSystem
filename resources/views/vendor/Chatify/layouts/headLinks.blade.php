<title>{{ config('chatify.name') }}</title>

{{-- Meta tags --}}
<meta name="route" content="{{ $route }}">
<meta name="csrf-token" content="{{ csrf_token() }}">


<link href="{{ asset('css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />

{{-- Messenger Color Style--}}
@include('Chatify::layouts.messengerColor')
