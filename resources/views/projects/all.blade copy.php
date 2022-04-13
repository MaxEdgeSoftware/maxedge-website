@extends("layouts/admin")

@section("mainSection")

<h5 class="mb-0" style="height: 550px; margin-top: 80px !important">All Staff :</h5>
<div class="table-responsive shadow rounded-bottom px-lg-4" data-simplebar style="height: 550px; margin-top: 80px !important">
    <table class="table table-center bg-white mb-0">
        <thead>
            <tr>
                <th class="border-bottom p-3">No.</th>
                <th class="border-bottom p-3" style="min-width: 220px;">Client Name</th>
                <th class="text-center border-bottom p-3">Amount</th>
                <th class="text-center border-bottom p-3" style="min-width: 150px;">Generate(Dt.)</th>
                <th class="text-center border-bottom p-3">Status</th>
                <th class="text-end border-bottom p-3" style="min-width: 100px;">Preview</th>
            </tr>
        </thead>
        <tbody>
            <!-- Start -->
            <tr>
                <th class="p-3">#d01</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/01.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Howard Tanner</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$253</td>
                <td class="text-center p-3">23th Sept 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-danger rounded px-3 py-1">
                        Unpaid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d02</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/02.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Wendy Filson</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$482</td>
                <td class="text-center p-3">11th Sept 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-success rounded px-3 py-1">
                        Paid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d03</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/03.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Faye Bridger</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$546</td>
                <td class="text-center p-3">2nd Sept 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-danger rounded px-3 py-1">
                        Unpaid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d04</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/04.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Ronald Curtis</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$154</td>
                <td class="text-center p-3">1st Sept 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-danger rounded px-3 py-1">
                        Unpaid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d05</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/05.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Melissa Hibner</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$458</td>
                <td class="text-center p-3">1st Sept 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-success rounded px-3 py-1">
                        Paid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d06</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/06.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Randall Case</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$548</td>
                <td class="text-center p-3">28th Aug 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-success rounded px-3 py-1">
                        Paid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d07</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/07.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Jerry Morena</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$658</td>
                <td class="text-center p-3">25th Aug 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-danger rounded px-3 py-1">
                        Unpaid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d08</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/08.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Lester McNally</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$457</td>
                <td class="text-center p-3">20th Aug 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-danger rounded px-3 py-1">
                        Unpaid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d09</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/09.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Christopher Burrell</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$586</td>
                <td class="text-center p-3">15th Aug 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-success rounded px-3 py-1">
                        Paid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->

            <!-- Start -->
            <tr>
                <th class="p-3">#d10</th>
                <td class="p-3">
                    <a href="#" class="text-primary">
                        <div class="d-flex align-items-center">
                            <img src="/dashboard/assets/images/client/10.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt="">
                            <span class="ms-2">Mary Skeens</span>
                        </div>
                    </a>
                </td>
                <td class="text-center p-3">$325</td>
                <td class="text-center p-3">10th Aug 2021</td>
                <td class="text-center p-3">
                    <div class="badge bg-soft-danger rounded px-3 py-1">
                        Unpaid
                    </div>
                </td>
                <td class="text-end p-3">
                    <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                </td>
            </tr>
            <!-- End -->
        </tbody>
    </table>
</div>
@endSection