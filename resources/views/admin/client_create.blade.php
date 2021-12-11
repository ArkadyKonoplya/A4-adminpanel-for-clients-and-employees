@extends('..dashboard')
@section('title', 'Clients')
@section('sub_fields')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Client</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{ route('client_create_save') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="firstname">First Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            placeholder="Enter a firstname..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="lastname">lastname <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Enter a lastname..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Companyname">Company name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="Companyname" name="Companyname"
                                            placeholder="Enter a Companyname..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="businessnumber">businessnumber <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="businessnumber" name="businessnumber"
                                            placeholder="Enter a businessnumber..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="phonenumber">phonenumber <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="phonenumber" name="phonenumber"
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
                                        <input type="text" class="form-control" id="cellnumber" name="cellnumber"
                                            placeholder="212-999-0000">
                                    </div>
                                </div>
                                                              
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="carriers">carriers <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="carriers" name="carriers"
                                            placeholder="">
                                    </div>
                                </div>

                                                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="HSTnumber">HSTnumber
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="HSTnumber" name="HSTnumber"
                                            placeholder="">
                                    </div>
                                </div>

                                                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="website">website
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="website" name="website"
                                            placeholder="">
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
    <div class="copyright">
       
    </div>
</div>
@endsection