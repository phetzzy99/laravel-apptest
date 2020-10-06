@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-15 col-lg-offset-1">

            <?= link_to('books/create', $title= 'เพิ่มข้อมูล', ['class' => 'btn btn-primary'], $secure = null); ?>
            
            <div class="card mt-3">

                <div class="card-header h3">
                    แสดงข้อมูลหนังสือ จำนวนทั้งหมด {{ number_format($count) }} เล่ม 
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th>
                            <th>ชื่อ-สกุล</th>
                            <th>นามสกุล</th>
                            <th>รหัสบัตรประชาชน</th>
                            <th>modify_date</th>
                            <th>expire_date</th>
                            <th>member_status</th>
                            <th>status_in_out</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($member as $rsmember)
                            <tr>
                                <td>{{ $rsmember->member_no }}</td>
                                <td>{{ $rsmember->name }}</td>
                                <td>{{ $rsmember->surname }}</td>
                                <td>{{ $rsmember->person_id }}</td>
                                <td>{{ $rsmember->modify_date }}</td>
                                <td>{{ $rsmember->expire_date }}</td>
                                <td>{{ $rsmember->member_status }}</td>
                                <td>{{ $rsmember->status_in_out }}</td>
                                <td>
                                    <a href="{{ url('/members/'.$rsmember->member_no.'/edit') }}">{!! Form::submit('แก้ไข',['class' => 'btn btn-warning']) !!}</a>
                                </td>
                                <td>
                                    {!! Form::open(array('url' => '/members/'.$rsmember->member_no, 'method' => 'delete', 'onsubmit' => 'return confirm("แน่ใจว่าต้องการลบข้อมูล?");')) !!}
                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <br>
                    {{ $member->render() }}
                </div>
            </div>
        </div>
    </div>        
@endsection

@section('footer')
    @if(session()->has('status'))
    <script>
        swal({
            title: "<?php echo session()->get('status'); ?>",
            icon: "success",
            text: "",
            timer: 2000,
            type: 'success',
            showConfirmButton: false
        });
    </script>
    @endif

@endsection