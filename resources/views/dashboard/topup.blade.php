@include('dashboard.layouts.headernav')

            <!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    @include('dashboard.layouts.pengumuman')
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Topup Balance</h5>
                                    </div>
                                    <div class="m-t-25">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label for="userbalance" style="font-weight: bold">Your Balance</label>
                                                <input type="text" readonly class="form-control-plaintext" id="userbalance" placeholder="Rp. 10.100">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputbalancenoRP" style="font-weight: bold">Enter amount for topup (Rupiah)</label>
                                                <input type="text" class="form-control" id="inputbalancenoRP" placeholder="10000">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState" style="font-weight: bold">Metode Pembayaran</label>
                                                    <select id="inputState" class="form-control">
                                                        <option selected>Bank Transfer</option>
                                                        <option>OvO</option>
                                                        <option>DANA</option>
                                                        <option>QRIS</option>
                                                        <option>PAKE DUIT LU DULU NTAR GW GANTI</option>
                                                    </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Topup</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                                        <i class="fa-solid fa-wallet"></i>
                                                    </div>
                                                    <p class="m-b-0 text-muted">Your Balance</p>
                                                    <h2 class="m-b-0">$23,523</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                                        <i class="fa-solid fa-money-bill-transfer"></i>
                                                    </div>
                                                    <p class="m-b-0 text-muted">Total Spend</p>
                                                    <h2 class="m-b-0">$8,753</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                                        <i class="fa-solid fa-link"></i>
                                                    </div>
                                                    <p class="m-b-0 text-muted">Active Tunnel</p>
                                                    <h2 class="m-b-0">1,753</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                                        <i class="fa-solid fa-link-slash"></i>
                                                    </div>
                                                    <p class="m-b-0 text-muted">Expired Tunnel</p>
                                                    <h2 class="m-b-0">236</h2>
                                                </div>
                                            </div>
                                        </div>
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