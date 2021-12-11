@extends('..dashboard')
@section('title', 'Clients')
@section('sub_fields')
<div class="row page-titles mx-0">


    <div class="col-sm-6 p-md-0">
        <div class="breadcrumb-range-picker">
            <span><i class="icon-calender"></i></span>
            <span class="ml-1">Client Dashboard</span>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('client_create') }}" class="btn btn-secondary create-event-btn"
                    style="    color: #ffffff;" href="#" target="_blank">Create Client</a>
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>Company name</th>
                                <th>Business number</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th>Phone</th>
                                <th>Cell number</th>
                                <th>Carriers</th>
                                <th>HST number</th>
                                <th>Website</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($RequestQuote as $SubItem)
                            <tr>
                                <td>{{$SubItem->Company_name}}</td>
                                <td>{{$SubItem->Business_number}}</td>
                                <td>{{$SubItem->first_name}}</td>
                                <td>{{$SubItem->last_name}}</td>
                                <td>{{$SubItem->Phone_number}}</td>
                                <td>{{$SubItem->Cell_number}}</td>
                                <td>{{$SubItem->Carriers}}</td>
                                <td>{{$SubItem->HST_number}}</td>
                                <td>{{$SubItem->Website}}</td>
                                <td>
                                    <?php 
                                            $status = $SubItem->Status;
                                        ?>
                                    @if($status == 0)
                                    Active
                                    @else
                                    Inactive
                                    @endif

                                </td>
                                <td>
                                    <a href="./client/edit/{{$SubItem->id}}"><i class='fas fa-edit'></i></a>
                                    <a href="" data-toggle="modal" data-target="#exampleModalCenter{{$SubItem->id}}"><i
                                            class="fa fa-trash" aria-hidden="true"></i></a>
                                    <div class="modal fade" id="exampleModalCenter{{$SubItem->id}}"
                                        style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('client_destroy',$SubItem->id) }}" method="post">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"><span>×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="margin-bottom: 0px;">Are you sure you want to delete
                                                            this Client?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-danger">Delete</button> -->
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
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