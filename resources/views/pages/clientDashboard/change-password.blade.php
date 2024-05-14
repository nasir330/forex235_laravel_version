<x-header />

<body>
    <!--Top Nav-->
    @include('pages.clientDashboard.topNav')


    <section id="client_dashboard" class="d-flex justify-content">
        <!--sidenave-->
        @include('pages.clientDashboard.sidenav')

        <!--main content-->
        <div id="client_dashboard_content">
            <div class="row">
                <div class="card">
                    <div class="card-header mb-1">
                        <h2 class="text-white">Change Login Password</h2>
                    </div>
                    <div class="card-body text-white">
                        <div class="row">
                            <div class="col-md-6">
                                <span>Change client portal Password</span>
                                <h3> <i class="fa-duotone fa-key"></i></h3>
                                <p>Update your portal login</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <form action="{{ route('two.fa.email') }}">
                                    <div class="form-group">
                                        <label for="old_password" class="control-label mb-1">Old Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-2">
                                            <input class="form-control" type="password" name="old_password"
                                                placeholder="Enter Old Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password" class="control-label mb-1">New Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-2">
                                            <input class="form-control" type="password" name="new_password"
                                                placeholder="Enter New Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password" class="control-label mb-1">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-2">
                                            <input class="form-control" type="password" name="confirm_password"
                                                placeholder="Re-type New Password" required>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <button class="btn btn-warning">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
