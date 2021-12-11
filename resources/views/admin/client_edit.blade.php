@extends('..dashboard')
@section('title', 'Clients')
@section('sub_fields')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Client</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{ url('/client/edit/'.$clients->id) }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="firstname">First Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->first_name}}" id="firstname" name="firstname"
                                            placeholder="Enter a firstname..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="lastname">lastname <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->last_name}}" id="lastname" name="lastname"
                                            placeholder="Enter a lastname..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Companyname">Company name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->Company_name}}" id="Companyname" name="Companyname"
                                            placeholder="Enter a Companyname..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="businessnumber">businessnumber <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->Business_number}}" id="businessnumber" name="businessnumber"
                                            placeholder="Enter a businessnumber..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="phonenumber">phonenumber <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->Phone_number}}" id="phonenumber" name="phonenumber"
                                            placeholder="Enter a phonenumber..">
                                    </div>
                                </div>
                              
                            </div>
                            <div class="col-xl-6">
                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="cellnumber">cellnumber <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->Cell_number}}" id="cellnumber" name="cellnumber"
                                            placeholder="212-999-0000">
                                    </div>
                                </div>
                                                              
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="carriers">carriers <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->Carriers}}" id="carriers" name="carriers"
                                            placeholder="">
                                    </div>
                                </div>

                                                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="HSTnumber">HSTnumber
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->HST_number}}" id="HSTnumber" name="HSTnumber"
                                            placeholder="">
                                    </div>
                                </div>

                                                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="website">website
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$clients->Website}}" id="website" name="website"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Status">Status <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="Status" name="Status">
                                        <?php 
                                            $status = $clients->Status;
                                        ?>
                                            <option value="0" <?php echo ($status == 0) ? 'selected' : ''; ?> >Active</option>
                                            <option value="1" <?php echo ($status == 1) ? 'selected' : ''; ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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