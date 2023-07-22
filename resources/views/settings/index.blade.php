@extends('layout.app')

@section('title')
    Settings
@endsection

@section('content')
    <style>
        .image {
            width: 100px;
        }
    </style>
    <form action="{{ route('update.settings') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row text-center  align-items-center">
            <div class="col-lg-4">
                <div class="mb-2">
                    <img src="{{ imageUrl('profile') }}" alt="" id="profile_image" class="img-fluid image">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-2">
                    <img src="{{ imageUrl('logo') }}" alt="" id="logo_image" class="img-fluid image">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-2">
                    <img src="{{ imageUrl('favicon') }}" alt="" id="favicon_image" class="img-fluid image">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-4 text-center">
                <label for="" class="float-start font-weight-bold">Change Profile Image:</label>
                <input type="file" name="profile" id="profileImage" class="form-control">
            </div>
            <div class="col-4 text-center">
                <label for="" class="float-start font-weight-bold">Change Logo Image:</label>
                <input type="file" name="logo" id="logoImage" class="form-control">
            </div>
            <div class="col-4 text-center">
                <label for="" class="float-start font-weight-bold">Change Favicon Image:</label>
                <input type="file" name="favicon" id="faviconImage" class="form-control">
            </div>
        </div>
        <div class="text-center mt-5">
            <input type="submit" value="Save" class="btn btn-primary align-item-middle">
        </div>
    </form>
@endsection
