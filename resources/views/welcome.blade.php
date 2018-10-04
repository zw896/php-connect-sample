@extends('layouts.app')

@section('content')
<div>
    <p class="ms-font-xl">Use the button below to connect to Microsoft Graph.</p>
<<<<<<< HEAD
    <button id="connect_button" class="ms-Button" onclick="location.href='/oauth.php'">
=======
    <button id="connect_button" class="ms-Button" onclick="location.href='/login'">
>>>>>>> microsoft login
        <span class="ms-Button-label">Connect to Microsoft Graph</span>
    </button>
</div>
@endsection