@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-log-offset-1">

            <div class="card mt-3">
                <div class="card-header h3">
                    เพิ่มข้อมูลหนังสือ
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    {{ Form::open(array('url' => 'books', 'files' => true)) }}

                        <div class="form-group">
                            <?= Form::label('title', 'ชื่อเรื่อง'); ?>
                            <?= Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ชื่อหนังสือ']); ?>
                        </div>

                        <div class="form-group">
                            {!! Form::label('price', 'ราคา'); !!}
                            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'เช่น 100, 100.25']); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('typebooks_id', 'ประเภทหนังสือ'); !!}
                            {!! Form::select('typebooks_id', App\TypeBooks::all()->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกประเภทหนังสือ']); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'รูปภาพ'); !!}
                            {!! Form::file('image', null, ['class' => 'form-control']); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']); !!}
                        </div>

                        {!! Form::close(); !!}
@endsection