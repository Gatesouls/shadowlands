@extends('layouts.app')

@section('title')
    Admin tools
@endsection

@section('content')
<h1>Admin menu</h1>

<h2>Categories</h2>
<li class=""> <a href="admin/create-category">Create category</a></li>
<li class=""> <a href="admin/edit-category">Edit category</a></li>
<li class=""> <a href="admin/delete-category">Delete category</a></li>

<h2>Items</h2>
@endsection