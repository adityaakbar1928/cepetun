@include('dashboard.layouts.headernav')

<!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    @include('dashboard.layouts.pengumuman')
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="fa-solid fa-link"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h3 class="m-b-0">3</h3>
                                            <p class="m-b-0 text-muted">Tunnel</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="fa-solid fa-cash-register"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h3 class="m-b-0">12</h3>
                                            <p class="m-b-0 text-muted">Your Order</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="fa-solid fa-wallet"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h4 class="m-b-0">Rp. 20.000</h4>
                                            <p class="m-b-0 text-muted">Balance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="fa-solid fa-link-slash"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h3 class="m-b-0">1</h3>
                                            <p class="m-b-0 text-muted">Expiring Tunnel</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start List Tunnel -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                   <div class="d-flex justify-content-between align-items-center">
                                        <h5>List Tunnel Kamu</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-success">Order New</a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>Tunnel Name</th>
                                                        <th>IP Address:port</th>
                                                        <th>Service</th>
                                                        <th>Status</th>
                                                        <th>Expired at</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="m-l-10">
                                                                    <span>A Tunnel 1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>192.168.1.0:58428</td>
                                                        <td>Winbox</td>
                                                        <td>Active</td>
                                                        <td>12-02-2000</td>
                                                        <td><button class="btn btn-info btn-xs">Info</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="m-l-10">
                                                                    <span>B Tunnel 1</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>192.168.1.0:58428</td>
                                                        <td>SSH</td>
                                                        <td>Expired</td>
                                                        <td>12-01-2000</td>
                                                        <td><button class="btn btn-info btn-xs">Info</button></td>
                                                    </tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <!-- Content Wrapper END -->

@include('dashboard.layouts.footer')