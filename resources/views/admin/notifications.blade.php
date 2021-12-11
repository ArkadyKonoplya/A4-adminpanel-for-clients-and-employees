@extends('..dashboard')
@section('title', 'Notification')
@section('sub_fields')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>Object</th>
                                <th>Action</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notifications_logs as $notification)
                            <tr>
                                <td>{{$notification->objects}}</td>
                                <td>{{$notification->actions}}</td>
                                <td>{{$notification->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('footer')
<div class="footer">

</div>
@endsection