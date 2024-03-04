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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Order Tunnel Remote</h5>
                                    </div>
                                    <div class="m-t-25">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="server">Server Tunnel</label>
                                                    <select id="server" class="form-control">
                                                        <option selected>Server Indonesia</option>
                                                        <option>Server Singapore</option>
                                                        <option>Server France</option>
                                                        <option>Server Bapakmu</option>
                                                    </select>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputUserTun">Username</label>
                                                    <input type="email" class="form-control" id="inputUserTun" placeholder="Username">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassTun">Password</label>
                                                    <input type="password" class="form-control" id="inputPassTun" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputService">Port / Service</label>
                                                    <select id="inputService" class="form-control">
                                                        <option selected>Winbox</option>
                                                        <option>API</option>
                                                        <option>Custom Port</option>
                                                    </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Topup</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Informasi</h5>
                                    </div>
                                    <div class="m-t-25">
                                        <h5>Informasi Detail</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Start List Tunnel -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                               <div class="d-flex justify-content-between align-items-center">
                                    <h5>History Transakasi</h5>
                                    <div>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                    </div>
                                </div>
                                <div class="m-t-30">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Metode Pembayaran</th>
                                                    <th>Jumlah Topup</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="m-l-10">
                                                                <span>4/3/2024</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Bank Transfer</td>
                                                    <td>Rp. 20.000</td>
                                                    <td><span class="badge bg-success text-light">Success</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div class="m-l-10">
                                                                <span>4/3/2024</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>OvO</td>
                                                    <td>Rp. 15.000</td>
                                                    <td><span class="badge bg-warning text-light">Pending</span></td>
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
                <!-- Content Wrapper END -->

@include('dashboard.layouts.footer')