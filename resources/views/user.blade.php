@extends('layouts.profile')

@section('container')

<div class="title">
    <a>My Profile</a>
</div>

<div class="profile-container">
    <div class="box small">
        <div class="profile-pic-wrapper">
            <div class="pic-holder">
            <!-- uploaded pic shown here -->
            <img id="profilePic" class="pic" src="img/mainProfile.png">

            <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
            <label for="newProfilePhoto" class="upload-file-block">
                <div class="text-center">
                    <div class="mb-2">
                        <i class="fa fa-camera fa-2x"></i>
                    </div>
                    <div class="text-uppercase">
                        Update <br /> Profile Photo
                    </div>
                </div>
            </label>
        </div>
        <div class="user-name">
            <p>Park-Ri Zky</p>
        </div>

    </div>
</div>


<script src="js/profile.js"></script>
@endsection