@extends('admins.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Message</div>

                <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2">From</th>
                                <th class="col-md-2">To</th>                         
                                <th class="col-md-5">Message</th>
                                <th class="col-md-1">Date</th>
                            </tr>
                        <tbody>
                            @foreach ($messages as $message )
                                <tr>
                                    <td class="col-md-2">{{$message->sender}}</td>
                                    <td class="col-md-2">{{$message->receiver}}</td>
                                    <td class="col-md-4">{{$message->msg}}</td>
                                    <td class="col-md-2">{{$message->updated_at}}</td>
                                    <td class="col-md-2">
                                    <a href="{{route('deletemessage',$message->id)}}" class="btn btn-default">Delete</a></td>
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
