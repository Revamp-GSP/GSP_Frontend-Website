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
            <h4>Park-Ri Zky</h4>
            <button class="edit-button">
                <i class='bx bx-pencil'></i>
                Edit
            </button>
            <p>Business Development</p>
            <a>Bandung, Jawa Barat</a>
        </div>

    </div>
    <div class="details-container">
        <div class="box large">
            <div class="header">
                <h5>Personal information</h5>
                <button class="edit-button">
                    <i class='bx bx-pencil'></i>
                    Edit
                </button>
                <div class="info">
                    <div class="info-row">
                        <div class="info-label">First Name</div>
                        <div class="info-value">Jack</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Last Name</div>
                        <div class="info-value">Adams</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Email address</div>
                        <div class="info-value">jackadams@gmail.com</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Phone</div>
                        <div class="info-value">(213) 555-1234</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Bio</div>
                        <div class="info-value">Product Designer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/profile.js"></script>
@endsection