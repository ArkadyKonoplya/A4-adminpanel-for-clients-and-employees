@extends('..dashboard')
@section('title', 'employees')
@section('sub_fields')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Employee</h4>
            </div>
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{ url('/employee/edit/'.$employees->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="firstname">First Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$employees->First_Name}}" id="firstname" name="firstname"
                                            placeholder="Enter a firstname..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="lastname">lastname <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$employees->Last_Name}}" id="lastname" name="lastname"
                                            placeholder="Enter a lastname..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Companyname">Email <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" value="{{$employees->email}}" id="email" name="email"
                                            placeholder="Enter a email..">
                                    </div>
                                </div>


                            </div>
                            <div class="col-xl-6">

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="cellnumber">cellnumber <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" value="{{$employees->Cell_number}}" id="cellnumber" name="cellnumber"
                                            placeholder="212-999-0000">
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="Position">Position <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="Position" name="Position">
                                        <?php 
                                            $Position = $employees->Position;
                                        ?>
                                            <option value="Manager" <?php echo ($Position == "Manager") ? 'selected' : ''; ?>>Manager</option>
                                            <option value="Senior Accountant" <?php echo ($Position == "Senior Accountant") ? 'selected' : ''; ?>>Senior Accountant</option>
                                            <option value="Junior Accountant" <?php echo ($Position == "Junior Accountant") ? 'selected' : ''; ?>>Junior Accountant</option>
                                            <option value="Chartered Accountant" <?php echo ($Position == "Chartered Accountant") ? 'selected' : ''; ?>>Chartered Accountant</option>
                                            <option value="Book Keeper" <?php echo ($Position == "Book Keeper") ? 'selected' : ''; ?>>Book Keeper</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="Status">Status <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="Status" name="Status">
                                        <?php 
                                            $status = $employees->Status;
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