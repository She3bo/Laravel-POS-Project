@extends('layouts.dashboard.app')

@section('content')

<form action="{{route('dashboard.users.store')}}" method="post">
     @csrf
     <div class="form-group">
          <label for="first_name">@lang('dashboard.first_name')</label>
          <input type="text" class="form-control" name="first_name" id="first_name" value="{{old('first_name')}}">
     </div>
     <div class="form-group">
          <label for="last_name">@lang('dashboard.last_name')</label>
          <input type="text" class="form-control" name="last_name" id="first_name" value="{{old('last_name')}}">
     </div>
     <div class="form-group">
          <label for="email">@lang('dashboard.email')</label>
          <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
     </div>
     <div class="form-group">
          <label for="password">@lang('dashboard.password')</label>
          <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}">
     </div>
     <div class="form-group">
          <label for="confirm_password">@lang('dashboard.confirm_password')</label>
          <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="{{old('confirm_password')}}">
     </div>

     <div class="card">
          <div class="card-header d-flex p-0">
               <ul class="nav nav-pills p-2">
                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">@lang('dashboard.users')</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">@lang('dashboard.category')</a></li>
               </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
               <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                         <label class="m-2"><input type="checkbox" name="permissions[]" value="create_user"  class="m-2">@lang('dashboard.add')</label>
                         <label class="m-2"><input type="checkbox" name="permissions[]" value="read_user" class="m-2">@lang('dashboard.read')</label>
                         <label class="m-2"><input type="checkbox" name="permissions[]" value="update_user" class="m-2">@lang('dashboard.edit')</label>
                         <label class="m-2"><input type="checkbox" name="permissions[]" value="delete_user" class="m-2">@lang('dashboard.delete')</label>
                    </div><!-- /.tab-pane -->
               </div><!-- /.tab-content -->
          </div><!-- /.card-body -->
     </div><!-- ./card -->

     <!-- END CUSTOM TABS -->


     
     <button type="submit" class="btn btn-success mb-2">@lang("dashboard.add")</button>
</form>
@endsection