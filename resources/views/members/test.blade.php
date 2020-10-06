@extends('layouts.app')

@section('content')
<div class="form-group row add">
    <div class="col-md-6">
      <h1>Simple Laravel Ajax Crud</h1>
    </div>
    <div class="col-md-6">
      {!! Form::open(['method'=>'GET','url'=>'searchs','class'=>'navbar-form navbar-left','role'=>'search']) !!}
      <div class="input-group custom-search-form">
        <input type="text" name="search" class="form-control" placeholder="Search ....">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
      {!! Form::close() !!}
    </div>
  </div>

  <div class="form-group row add">
    <div class="col-md-5">
      <input type="text" class="form-control" id="title" name="title"
      placeholder="Your title Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
    <div class="col-md-5">
      <input type="text" class="form-control" id="description" name="description"
      placeholder="Your description Here" required>
      <p class="error text-center alert alert-danger hidden"></p>
    </div>
    <div class="col-md-2">
      <button class="btn btn-warning" type="submit" id="add">
        <span class="glyphicon glyphicon-plus"></span> Add New Data
      </button>
    </div>
  </div>

  <div class="row">
    <div class="table-responsive">
      <table class="table table-borderless" id="table">
        <tr>
          <th>No.</th>
          <th>MemberNO.</th>
          <th>PersonID</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
        {{ csrf_field() }}

        <?php $no=1; ?>
        @foreach($members as $rs)
          {{-- <tr class="item{{$rs->member_no}}"> --}}
         <tr>
            <td>{{$no++}}</td>
            <td>{{$rs->member_no}}</td>
            <td>{{$rs->person_id}}</td>
            <td>{{$rs->name}}</td>
            <td>
            <button class="edit-modal btn btn-primary" data-id="{{$rs->member_no}}" data-title="{{$rs->member_no}}" data-description="{{$rs->member_no}}">
              <span class="glyphicon glyphicon-edit"></span> Edit
            </button>
            <button class="delete-modal btn btn-danger" data-id="{{$rs->member_no}}" data-title="{{$rs->member_no}}" data-description="{{$rs->member_no}}">
              <span class="glyphicon glyphicon-trash"></span> Delete
            </button>
          </td>
          </tr>
        @endforeach
      </table>
      {{ $members->links() }}
    </div>
  </div>
  {{-- <div id="myModal" class="modal fade" role="dialog"> --}}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="control-label col-sm-2" for="id">ID :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="fid" disabled>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="title">Title:</label>
              <div class="col-sm-10">
                <input type="name" class="form-control" id="t">
              </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="description">Description:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="d">
            </div>
          </div>
          </form>
            <div class="deleteContent">
            Are you Sure you want to delete <span class="title"></span> ?
            <span class="hidden id"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
              <span id="footer_action_button" class='glyphicon'> </span>
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
              <span class='glyphicon glyphicon-remove'></span> Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection