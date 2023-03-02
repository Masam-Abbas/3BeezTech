@extends('components.dashboard-component')

@section('dashboard')
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body py-5">
                            <i style="margin-right: .5rem" class="bi bi-xl bi-box-arrow-left"></i>Our Services
                        </div>
                        <div style="cursor: pointer;" class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-warning text-dark h-100">
                        <div class="card-body py-5">
                            <i style="margin-right: .5rem" class="bi bi-xl bi-box-arrow-left"></i>Our Services
                        </div>
                        <div style="cursor: pointer;" class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body py-5">
                            <i style="margin-right: .5rem" class="bi bi-xl bi-box-arrow-left"></i>Our Services
                        </div>
                        <div style="cursor: pointer;" class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body py-5">
                            <i style="margin-right: .5rem" class="bi bi-xl bi-box-arrow-left"></i>Our Services
                        </div>
                        <div style="cursor: pointer;" class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

    @endsection
