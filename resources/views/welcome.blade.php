<!-- Copyright (c) Microsoft Corporation.
     Licensed under the MIT License. -->

<!-- <WelcomeSnippet> -->
@extends('layout')

@section('content')
<div class="jumbotron">
  <h1>PHP Graph Tester mauricio</h1>
  <p class="lead">Esta aplicación de muestra muestra cómo usar la API de Microsoft Graph para acceder a los datos de un usuario desde PHP</p>
  @if(isset($userName))
    <h4>Welcome {{ $userName }}!</h4>
    <p>Use the navigation bar at the top of the page to get started.</p>
  @else
    <a href="/signin" class="btn btn-primary btn-large">Click here to sign in</a>
  @endif
</div>
@endsection
<!-- </WelcomeSnippet> -->
