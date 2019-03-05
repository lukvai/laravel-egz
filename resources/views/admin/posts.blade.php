@extends('admin.admin_page')
@section('content')
@foreach($workers as $worker)
    <div class="card card-body bg-light " style="margin-bottom: 15px">
        <div class="">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <h5>{{$worker->name}}</h5>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>{{$worker->lastName}}</h5>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>{{$worker->specialization}}</h5>
                </div>
                <div class="col-md-2 col-sm-2">
                    <img src="{{$worker->picture}}" alt="" style="width: 100px;">

                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>{{$worker->serviceName}}</h5>
                </div>
                <div class="col-md-2 col-sm-2">
                    <h5>{{$worker->city}}</h5>
                </div>

            </div>
            <a href="delete/{{$worker->id}}" class="btn btn-danger">delete</a>
        </div>
    </div>
@endforeach
@endsection
