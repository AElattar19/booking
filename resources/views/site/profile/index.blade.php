@extends('site.include.master')

@section('body')

<div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>My Profile</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">الرئسيسية</a></li>
                        <li><a href="#">لوحة التحكم</a></li>
                        <li>تعديل الملف الشخصي</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Profile -->
        <div class="col-lg-6 col-md-12">
            <div class="dashboard-list-box margin-top-0">
                <h4 class="gray">Profile Details</h4>
                <form method="POST" action="{{ route('profile.post',$data) }}" enctype="multipart/form-data" >
                    @csrf
                    <input value="{{$data->photo}}" type="hidden" name="old_photo">
                <div class="dashboard-list-box-static">

                    <!-- Avatar -->
                    <div class="edit-profile-photo">
                        @if($data->photo)
                        <img src="{{ asset('images/profile/'). $data->photo }}">
                        @else 
                        <img src="{{asset('images/profile/no_photo.png')}}" alt="User Image">
                        @endif
                        
                        <div class="change-photo-btn">
                            <div class="photoUpload">
                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                <input type="file" class="upload" name="photo" />
                            </div>
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="my-profile">

                        <label>Your Name</label>
                        <input value="{{ old('name', $data?->name) }}" type="text" name="name">

                        <label>Phone</label>
                        <input value="{{ old('phone', $data?->phone) }}" type="text" name="phone">

                        <label>Email</label>
                        <input value="{{ old('email', $data?->email) }}" type="email" name="email">

                        <label>Notes</label>
                        <textarea name="notes" id="notes" cols="30" rows="10">{{ old('notes', $data?->notes) }}</textarea>


                    </div>

                    <button class="button margin-top-15">Save Changes</button>

                </div>
                </form>
            </div>
        </div>

        <!-- Change Password -->
        <div class="col-lg-6 col-md-12">
            <div class="dashboard-list-box margin-top-0">
                <h4 class="gray">Change Password</h4>
                <div class="dashboard-list-box-static">

                    <!-- Change Password -->
                    <div class="my-profile">
                        <label class="margin-top-0">Current Password</label>
                        <input type="password">

                        <label>New Password</label>
                        <input type="password">

                        <label>Confirm New Password</label>
                        <input type="password">

                        <button class="button margin-top-15">Change Password</button>
                    </div>

                </div>
            </div>
        </div>


        <!-- Copyrights -->


    </div>

</div>
@endsection