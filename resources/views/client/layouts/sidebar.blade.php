<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="feature-box style-3">
        <div class="wallet-box">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px"
                height="50px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <circle fill="#fff" opacity="0.3" cx="20.5" cy="12.5" r="1.5" />
                    <rect fill="#fff" opacity="0.3"
                        transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) "
                        x="3" y="3" width="18" height="7" rx="1" />
                    <path
                        d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z"
                        fill="#fff" />
                </g>
            </svg>
            <div class="ms-3">
                <h4 class="text-white mb-0 d-block">$2353.25</h4>
                <small>Withdraw Money</small>
            </div>
        </div>

    </div>

    <div class="menu-scroll ">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <span class="main-menu">Navigation</span>
                <li><a class="" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i data-lucide="layout-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a class="" href="{{ url('/profile') }}#kyc" aria-expanded="false">
                        <i data-lucide="check-circle"></i>
                        <span class="nav-text">KYC Verification</span>
                    </a>
                </li>

                <li class="">
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i data-lucide="box"></i>
                        <span class="nav-text">Payment</span>
                    </a>
                    <ul aria-expanded="false" class="">
                        <li>
                            <a href="{{ route('funds.funddeposit') }}">
                                Deposit
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('funds.fundwithdrawal') }}">
                                Withdrawal To Wallet
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('funds.fundtransfer') }}">
                                Internal Transfer
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('funds.fundhistory') }}">
                                Transactions
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                        <i data-lucide="layout"></i>
                        <span class="nav-text">Trading Accounts</span>
                    </a>
                    <ul aria-expanded="false" class="">
                        <li>
                            <a href="{{ route('broker.liveaccount') }}">
                                Live MT5 Accounts
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('broker.demoaccount') }}">
                                Demo MT5 Accounts
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="" href="{{ url('/ib-dashboard') }}" aria-expanded="false">
                        <i data-lucide="bar-chart"></i> <!-- Example icon for IB Dashboard -->
                        <span class="nav-text">IB Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ url('/pamm') }}" aria-expanded="false">
                        <i data-lucide="dollar-sign"></i> <!-- Example icon for PAMM -->
                        <span class="nav-text">PAMM</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ url('/my-tickets') }}" aria-expanded="false">
                        <i data-lucide="ticket"></i> <!-- Example icon for My Tickets -->
                        <span class="nav-text">My Tickets</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ url('/downloads') }}" aria-expanded="false">
                        <i data-lucide="settings"></i> <!-- Example icon for Downloads -->
                        <span class="nav-text">Downloads</span>
                    </a>
                </li>
            </ul>

            <div class="copyright">
                <p><strong></strong> © <span class="current-year"><?php echo date('Y'); ?></span> All Rights Reserved
                </p>
                <p class="fs-12">Forex One Portal</p>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->