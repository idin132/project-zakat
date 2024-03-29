@extends('BackEnd.template.index')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card text-end">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container">
                        <div class="row text-end">

                            <div class="col">
                                <div class="card text-white bg-dark">
                                    <div class="card-header">
                                        <div class="bi bi-people-fill">
                                            Muzakki
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {{ $muzakkis }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                                <div class="card text-white bg-dark">
                                    <div class="card-header">
                                        <div class="bi bi-people-fill">
                                            Mustahiq
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {{ $mustahiqs }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card text-white bg-secondary">
                                    <div class="card-header">
                                        <div class="bi bi-cloud-arrow-down">
                                            Penerimaan
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {{ $penerimaan }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                                <div class="card text-white bg-secondary">
                                    <div class="card-header ">
                                        <div class="bi bi-cash-coin">
                                            Pembayaran
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {{ $pembayaran }}

                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card text-white bg-dark">
                                    <div class="card-header">
                                        <div class="bi bi-people-fill text-center">
                                            Total Zakat Fitrah
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        Rp. {{ number_format($total_fitrah) }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                                <div class="card text-white bg-dark">
                                    <div class="card-header">
                                        <div class="bi bi-people-fill text-center">
                                            Total Zakat Penghasilan
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        Rp. {{ number_format($total_penghasilan) }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="card text-white bg-dark">
                                    <div class="card-header">
                                        <div class="bi bi-people-fill text-center">
                                            Total Zakat Penghasilan Tersisa
                                        </div>
                                    </div>
                                    <div class="card-body text-center h5">
                                        Rp. {{ number_format($total_penghasilan - $total_tersalurkan_penghasilan) }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card text-white bg-dark">
                                    <div class="card-header">
                                        <div class="bi bi-people-fill" style="text-align:center ;">
                                            Total Zakat Fitrah Tersisa
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        Rp. {{ number_format($total_fitrah - $total_tersalurkan_fitrah) }}
                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                                <div class="card text-white bg-dark">
                                    <div class="card-header text-center">
                                        <div class="bi bi-people-fill">
                                            Total Zakat Penghasilan Tersalurkan
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        Rp. {{ number_format($total_tersalurkan_penghasilan) }}

                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>



                            <div class="col">
                                <div class="card text-white bg-secondary">
                                    <div class="card-header">
                                        <div class="bi bi-cloud-arrow-down text-center">
                                            Total Zakat Fitrah Tersalurkan
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        Rp. {{number_format($total_tersalurkan_fitrah) }}

                                        <h5 class="card-title"></h5>
                                        <p class="card-text justify-content-end"></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection