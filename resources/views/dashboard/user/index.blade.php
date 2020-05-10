@extends('layouts.dashboard.app')

@section('content')

<div class="row">
     <div>
          <a href="{{route('dashboard.users.create')}}" class="btn btn-success m-2">
               <i class="fa fa-plus"></i> @lang('dashboard.add')
          </a>
     </div>
     <div class="col-12">
          <div class="card card-primary">
               <div class="card-header">
                    <h3>@lang('dashboard.users')</h3>
               </div>
               <div class="card-body">
                    <table class="table table-bordered">
                         <thead>
                              <tr>
                                   <th style="width: 10px">#</th>
                                   <th>@lang('dashboard.first_name')</th>
                                   <th>@lang('dashboard.last_name')</th>
                                   <th>@lang('dashboard.email')</th>
                                   <th>@lang('dashboard.user_control')</th>
                              </tr>
                         </thead>
                         <tbody>
                         @foreach($users as $index=>$user)
                              <tr>
                                   <td>{{$index}}</td>
                                   <td>{{$user->first_name}}</td>
                                   <td>{{$user->last_name}}</td>
                                   <td>{{$user->email}}</td>
                                   <td>
                                        <a href="{{route('dashboard.users.edit',$user->id)}}" class="btn btn-warning btn-sm mr-2" style="display:inline-block">@lang('dashboard.edit')</a>
                                        <form action="{{route('dashboard.users.destroy',$user->id)}}" method="post" style="display:inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">@lang('dashboard.delete')</button>
                                        
                                        </form>
                                   </td>
                              </tr>
                         @endforeach
                         </tbody>
                    </table>
               </div>
          </div>
     </div>
</div>


@endsection