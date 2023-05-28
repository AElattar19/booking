@extends('dashboard.layouts.master')

@section('body')
{{-- {{ var_dump($setting) }} --}}
<br />
<form class="form-horizontal" action="{{ route('settings.update', $setting) }}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('patch')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<div class="row row-sm">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">

            <div class="card-body pt-0">

                    
                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-6 mg-b-20 mg-lg-b-0">
                            <p class="mg-b-10">site Name</p>
                            <input class="form-control" id="Text input with radiobox" value="{{ $setting->site_name }}" type="text" name="site_name">
                            <input type="hidden" name="old_logo" value="{{ $setting->logo }}">
                            <input type="hidden" name="old_favicon" value="{{ $setting->favicon }}">
                            <p class="mg-b-10">logo</p>
                            <input class="form-control" id="Text input with radiobox" type="file" name="logo">
                        </div><!-- col-4 -->
                        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                            
                                <img alt="" class="rounded float-sm-left wd-100p wd-sm-200" src="{{asset('images/site/'.$setting->logo)}}">                           
                        </div><!-- col-4 -->

                    </div>
                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-6">
                            <p class="mg-b-10">favicon</p>
                            <input class="form-control" id="Text input with radiobox" type="file" name="favicon">
                        </div><!-- col-4 -->
                        <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                            
                            <img alt="" class="rounded float-sm-left wd-100p wd-sm-200" src="{{asset('images/site/'.$setting->favicon)}}">                           
                    </div><!-- col-4 -->

                    </div>
                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-6 mg-b-20 mg-lg-b-0">
                            <p class="mg-b-10">facebook</p>
                            <input class="form-control" id="Text input with radiobox" value="{{ $setting->facebook }}" type="text" name="facebook">
                        </div>
                        <div class="col-lg-6 mg-b-20 mg-lg-b-0">
                            <p class="mg-b-10">instagram</p>
                            <input class="form-control" id="Text input with radiobox" value="{{ $setting->instagram }}" type="text" name="instagram">
                        </div>

                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-6 mg-b-20 mg-lg-b-0">
                            <p class="mg-b-10">phone</p>
                            <input class="form-control" id="Text input with radiobox" value="{{ $setting->phone }}" type="text" name="phone">
                        </div>
                        <div class="col-lg-6 mg-b-20 mg-lg-b-0">
                            <p class="mg-b-10">email</p>
                            <input class="form-control" id="Text input with radiobox" value="{{ $setting->email }}" type="email" name="email">
                        </div>

                    </div>

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-12 mg-b-20 mg-lg-b-0">
                            <p class="mg-b-10">Site keywords</p>
                            <textarea class="form-control" placeholder="Textarea" 
                            name="keywords"  rows="3">{{ $setting->keywords }}</textarea>
                        </div>
    
                    </div>

                    <div class="row row-sm mg-b-20">
                        <div class="col-lg-12 mg-b-20 mg-lg-b-0">
                            <p class="mg-b-10">Site description</p>
                            <textarea class="form-control" placeholder="Textarea" 
                            name="description"  rows="3">{{ $setting->description }}</textarea>
                        </div>
    
                    </div>


               
            </div>
        </div>
    </div>
 
</div>


<div class="form-group mb-0 mt-3 justify-content-end">
    <div>
        <button type="submit" class="btn btn-secondary">Sign in</button>
    </div>
</div>
</form>
@endsection