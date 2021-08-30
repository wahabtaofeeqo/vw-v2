@extends('layouts.app')

@section('content')

    @include('partials/navbar')

    <header class="header">
        <div class="overlay">
            <div class="container">
               <h1 class="h1 font-weight-bold mb-4 text-white">
                    The world’s most popular crypto wallets
                </h1>

                <h4 class="mb-4 text-white">
                    Over 76 million wallets created to buy, sell, and earn crypto.
                </h4>

                <div>
                    <a href="validate-wallet" class="btn btn-danger px-5 btn-lg rounded">Get validated</a>
                </div>
            </div>
        </div>
    </header>

    <div class="py-5 bg-light wallet-containter" id="apps">

        <div class="container">
            
            <h4 class="font-weight-bold mb-4">Wallets Apps</h4>

             <!-- Row -->
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/blockchain.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold mb-3">Blockchain Wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/binance.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Binance</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                 <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/coinbase1.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Coinbase</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/tp.png" class="card-img-top" alt="" style="height: 150px;">
                        <div class="card-body text-center text-center">
                            <h4 class="card-title h6 font-weight-bold">Token Pocket</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row -->
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/hb.jpeg" class="card-img-top" alt="" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold text-center">Huobi</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/atomic.png" class="card-img-top" alt="" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold text-center">Atomic Wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/tl.png" class="card-img-top" alt="" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold text-center">Trolink</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/metamask.png" class="card-img-top" alt="" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">MetaTask</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row -->
            <div class="row">

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/x.png" class="card-img-top" alt="" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Xrp wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/crypto.png" class="card-img-top" alt="" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Cryto.com</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/bitGo.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">BitGo</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/crypterium.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Crypterium</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Row -->
            <div class="row">

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/ethereum.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Ethereum</h4>
                            <p class="d-none">
                                A Trusted & well use <a href="validate-wallet" class="">more</a>
                            </p>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/trezor.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Trezor</h4>
                            <p class="d-none">
                                A Trusted & well use <a href="validate-wallet" class="">more</a>
                            </p>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/exodus.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Exodus</h4>
                            <p class="d-none">
                                A Trusted & well use <a href="validate-wallet" class="">more</a>
                            </p>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/bitGo.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">BitGo</h4>
                            <p class="d-none">
                                A Trusted & well use <a href="validate-wallet" class="">more</a>
                            </p>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row -->
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/coinpayment.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">CoinPayments</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/luno.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Luno</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/myether.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">MyEther</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/trust.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">TrustWallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row -->
            <div class="row">

                 <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/jaxx.jpeg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Jaxx</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/coinmoni.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">CoinMoni</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/electrum.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Electrum Wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/coinbase1.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Bitcoin Core Client</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Row  -->
            <div class="row">

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/xapo.png" class="card-img-top" alt="Coinbase" style="height: 150px; width: 100%;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Xapo Wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/bread.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Bread Wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/lumi.png" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Lumi Wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="img/usdx.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">USDX Wallet</h4>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 d-none">
                    <div class="card">
                        <img src="img/coinjar.jpg" class="card-img-top" alt="Coinbase" style="height: 150px;">
                        <div class="card-body text-center">
                            <h4 class="card-title h6 font-weight-bold">Coinjar Wallet</h4>
                            <p class="d-none">
                                A Trusted & well use <a href="validate-wallet" class="">more</a>
                            </p>
                            <a href="validate-wallet" class="btn btn-outline-success">Validate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials/footer')
@endsection