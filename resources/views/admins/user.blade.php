@extends('admins.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Message</div>

                <div class="panel-body">
                    @extends('admins.header_menu')
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">Name</th>
                                <th class="col-md-2">Email</th>                         
                                <th class="col-md-2">Password</th>
                            </tr>
                        <tbody>
                            @foreach ($users as $user )
                                <tr>
                                    <td class="col-md-2">{{$user->name}}</td>
                                    <td class="col-md-2">{{$user->email}}</td>
                                    <td class="col-md-2">{{$user->password}}</td>
                                    <td class="col-md-2">
                                    <a href="{{route('admin.deleteuser',$user->id)}}" class="btn btn-default">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        </thead>
                      </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
