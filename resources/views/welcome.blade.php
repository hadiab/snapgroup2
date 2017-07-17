@extends('layouts.master')

@section('title')
Welcome!
@endsection

@section('content')
@include('includes.error-block')
<h1 style="text-decoration:underline;">API Documentation</h1>

<div class="row">
    <div class="col-md-6">
    <h2>User API</h2>
    <h3>GET</h3><p>api.localhost/api/users -> list of users</p>
    <h3>GET</h3> <p>api.localhost/api/users/{user_id} -> get user with specific id</p>
    <h3>POST</h3><p>api.localhost/api/users -> create a new user</p>
    <h3>PUT</h3><p>api.localhost/api/users/{user_id}</p>
    </div>
      <div class="col-md-6">
    <h2>Group API</h2>
    <h3>GET</h3><p>api.localhost/api/groups -> list of groups</p>
    <h3>GET</h3> <p>api.localhost/api/groups/{group_id} -> get user with specific id</p>
    <h3>POST</h3> <p>api.localhost/api/groups -> create a new user</p>
    <h3>PUT</h3> <p>api.localhost/api/groups/{group_id}</p>
    </div>
</div>
@endsection