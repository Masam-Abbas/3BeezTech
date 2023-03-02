@extends('mycomponent')

@section('content')
    {{-- @if (session()->has('message'))
        <button type="button" class="close" data-dismiss='alert' ariel-hidden="true">x</button>
        <h6 class="alert alert-success">{{ session()->get('message') }}</h6>
    @endif --}}

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Register</h1>
                <a href="/" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">register</a>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Register</h5>
                <h1 class="mb-0">Register a new user</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <form method="POST" action="register" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label style="color: #000; font-size: 1.2rem;">Name</label>
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Name"
                                    style="height: 55px;" name="name">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label style="color: #000; font-size: 1.2rem;">Email</label>
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Email"
                                    style="height: 55px;" name="email">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12">
                                <label style="color: #000; font-size: 1.2rem;">Password</label>
                                <input type="password" class="form-control border-0 bg-light px-4" placeholder="Password"
                                    style="height: 55px;" name="password">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12">
                                <label style="color: #000; font-size: 1.2rem;">Confirm Password</label>
                                <input type="password" class="form-control border-0 bg-light px-4"
                                    placeholder="Confirm Password" style="height: 55px;" name="confirm-password">
                                <span class="text-danger">
                                    @error('confirm-password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12">
                                <label style="color: #000; font-size: 1.2rem;">Profile Pic</label>
                                <input type="file" class="form-control border-0 bg-light px-4" style="height: 55px;"
                                    name="profile_pic">
                                <span class="text-danger">
                                    @error('profile_pic')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12">
                                <label style="color: #000; font-size: 1.2rem;">Role</label>
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Role"
                                    style="height: 55px;" name="role">
                                <span class="text-danger">
                                    @error('role')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection