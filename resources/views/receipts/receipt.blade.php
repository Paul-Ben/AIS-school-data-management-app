<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('/assets/styles/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            AIS Receipt <br>
            <small class="page-info">
                <i class="fa fa-angle-double-right text-50"></i>
                Print-ID: #ALV-222{{rand(0,1000000)}}
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" onclick="window.print()" href="#" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="{{route('dashboard')}}" >
                    <i class="fa fa-solid fa-rotate-right"></i>
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <div>
                                <img src="{{ asset('/images/user.jpeg')}}" width="15%" height="55%" alt="">
                            </div>
                            <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                            <span class="text-default-d3"><input type="text" name="regNumber" id="" value="AIS Official Payment Receipt" disabled></span>
                         
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">For:</span>
                            <span class="text-600 text-110 text-blue align-middle">{{ $payment->firstName }} {{ $payment->lastName }}</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                {{ $payment->regNumber}}
                            </div>
                            <div class="my-1">
                                Benue, Nigeria
                            </div>
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600">+234-8129158117</b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Receipt
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #ALV-111-222{{rand(0,1000000)}}</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> {{date('d/m/y')}}</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Officer:</span> {{ Auth::user()->name}}</div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="mt-4">
                    <div class="row text-600 bg-primary text-white pb-3 py-25">
                        <div class="d-none d-sm-block col-1">#</div>
                        <div class="col-9 col-sm-5">Description</div>
                        <div class="d-none d-sm-block col-4 col-sm-2">Term</div>
                        <div class="d-none d-sm-block col-sm-2">Status</div>
                        <div class="col-2">Amount(NGN)</div>
                    </div>

                    <div class="text-95 text-secondary-d3">
                        <div class="row mb-2 mb-sm-0 py-25">
                            <div class="d-none d-sm-block col-1">1</div>
                            <div class="col-9 col-sm-5">
                                {{ $payment->sessionName }} | {{ $payment->sclass }} , School fee.
                            </div>
                            <div class="d-none d-sm-block col-2">{{ $payment->term_fee }}</div>
                            <div class="d-none d-sm-block col-2 text-95">
                                {{ $payment->fee_status }}
                            </div>
                            <div class="col-2 text-secondary-d2">{{ $payment->Amount_paid }}</div>
                        </div>

                     
                    </div>

                    <div class="row border-b-2 brc-default-l2"></div>

                    <!-- or use a table instead -->
                    <!--
            <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">#</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th width="140">Amount</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        <tr></tr>
                        <tr>
                            <td>1</td>
                            <td>Domain registration</td>
                            <td>2</td>
                            <td class="text-95">$10</td>
                            <td class="text-secondary-d2">$20</td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            -->

                    <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                            
                        </div>

                        <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    SubTotal NGN
                                </div>
                                <div class="col-5">
                                    <span class="text-120 text-secondary-d1"> {{ floatVal($payment->Amount_paid) }}</span>
                                </div>
                            </div>

                            <div class="row my-2">
                                <div class="col-7 text-right">
                                    
                                </div>
                                <div class="col-5">
                                    <span class="text-110 text-secondary-d1"></span>
                                </div>
                            </div>

                            <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                <div class="col-7 text-right">
                                    Total NGN 
                                </div>
                                <div class="col-5">
                                    <span class="text-150 text-success-d3 opacity-2">{{ floatVal($payment->Amount_paid) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div>
                        <span class="text-secondary-d1 text-105">Thank you.</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
</body>
</html>