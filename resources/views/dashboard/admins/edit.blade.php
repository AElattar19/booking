@extends('dashboard.layouts.master')

@section('body')


<br />
<div class="container-fluid">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Edit-Profile</span>
            </div>
        </div>
 
    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <form method="post" enctype="multipart/form-data">

    <div class="row row-sm">
        <!-- Col -->
            @csrf
        <div class="col-lg-3">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="pl-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user">
                                <img alt="" src="../assets/img/faces/6.jpg">
                              
                            </div>

                            <!--skill bar-->
                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>

        </div>

        <!-- Col -->
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4 main-content-label">Personal Information</div>
                   

                        <div class="mb-4 main-content-label">Name</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">User Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="User Name" value="Petey Cruiser">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">First Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="First Name" value="Petey">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">last Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Last Name" value="Pechon">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Nick Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Nick Name" value="Petey">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Designation</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Designation" value="Web Designer">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 main-content-label">Contact Info</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Email<i>(required)</i></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Email" value="info@Valex.in">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Website</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="Website" value="@spruko.w">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Phone</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="phone number" value="+245 354 654">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Address</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="example-textarea-input" rows="2"  placeholder="Address">San Francisco, CA</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 main-content-label">Social Info</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Twitter</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="twitter" value="twitter.com/spruko.me">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Facebook</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="facebook" value="https://www.facebook.com/Redash">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Google+</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="google" value="spruko.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Linked in</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  placeholder="linkedin" value="linkedin.com/in/spruko">
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Github</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="github" value="github.com/sprukos">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 main-content-label">About Yourself</div>
                        <div class="form-group ">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Biographical Info</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 main-content-label">Email Preferences</div>
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Verified User</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="custom-controls-stacked">
                                        <label class="ckbox mg-b-10"><input checked="" type="checkbox"><span> Accept to receive post or page notification emails</span></label>
                                        <label class="ckbox"><input checked="" type="checkbox"><span> Accept to receive email sent to multiple recipients</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer text-left">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update Profile</button>
                </div>
            </div>
        </div>
        <!-- /Col -->
   
    </div>
</form>
    <!-- row closed -->
</div>

@endsection

@push('scripts')
<script type="text/javascript">$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });  </script>

@endpush