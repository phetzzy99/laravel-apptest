@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About me</div>

                <div class="card-body">
                    <h3>{{$fullname}}</h3>
                    <p>{{$website}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

<script>
    alert("Hello, About Page");
</script>

@endsection