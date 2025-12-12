<!--**********************************
            Sidebar start
        ***********************************-->


<div class="dlabnav">
    <div class="feature-box style-3">
        <div class="wallet-box">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px"
                viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
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
    @php
        $sidebarData = getSidebarData();
        $categories = $sidebarData['categories'];
        $mainMenus = $sidebarData['mainMenus'];
        $subMenus = $sidebarData['subMenus'];
        $rolePermissionsList = $sidebarData['rolePermissionsList'];
        $userRoleID = $sidebarData['userRoleID'];
    @endphp
    <div class="menu-scroll ">
        <div class="dlabnav-scroll">

            <ul class="metismenu" id="menu">
    @foreach ($categories as $category)
        <span class="main-menu">{{ $category->category_name }}</span>

       
        @foreach ($mainMenus[$category->page_category_id] ?? [] as $main)
            @php
                $children = $subMenus[$main->page_id] ?? [];
            @endphp

            <li >
                <a class="{{ count($children) ? 'has-arrow' : '' }}" 
				href="{{ count($children) ? 'javascript:void(0);' : url($main->filename) }}" aria-expanded="false">
					<i class="material-symbols-outlined">dashboard</i>
                    <span class="nav-text">{{ $main->pagename }}</span>
                </a>

                @if (count($children))
                    <ul aria-expanded="false">
                        @foreach ($children as $sub)
                            <li>
                                <a href="{{ url($sub->filename) }}">{{ $sub->pagename }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach

        <hr />
    @endforeach
			</ul> 
			


			

            {{-- <ul class="metismenu" id="menu">
                @foreach ($categories as $category)
                    <span class="main-menu">{{ $category->category_name }}</span>
                    <li><a class="" href="{{ route('dashboard') }}" aria-expanded="false">
                            <i class="material-symbols-outlined">dashboard</i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
                            <i class="material-symbols-outlined">lab_profile</i>
                            <span class="nav-text">Earn Rewards</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="#">Rewarded Tasks</a></li>

                        </ul>
                    </li>
                    <hr />
                @endforeach

            </ul> --}}

            {{-- <ul class="metismenu" id="menu">
            @foreach ($categories as $category)
                <span class="main-menu">{{ $category->category_name }}</span>

                @foreach ($mainMenus[$category->page_category_id] ?? [] as $main)
                    @php
                        $children = $subMenus[$main->page_id] ?? [];
                        $hasPermission = in_array($main->page_id, $rolePermissionsList) || $userRoleID == 1;
                    @endphp

                    @if (($hasPermission || count($children) > 0) && $main->show_in_menu)
                        <li class="{{ count($children) ? 'has-arrow' : '' }}">
                            <a href="{{ count($children) ? 'javascript:void(0);' : $main->filename }}" aria-expanded="false">
                                <i class="material-symbols-outlined">{{ $main->icon }}</i>
                                <span class="nav-text">{{ $main->pagename }}</span>
                            </a>

                            @if (count($children))
                                <ul aria-expanded="false">
                                    @foreach ($children as $sub)
                                        @if (in_array($sub->page_id, $rolePermissionsList) || $userRoleID == 1)
                                            <li>
                                                <a href="{{ $sub->filename }}">{{ $sub->pagename }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endforeach
                <hr />
            @endforeach
        </ul> --}}
            {{-- <li>
							<a class="" href="javascript:void(0);" aria-expanded="false">
								<i class="material-symbols-outlined">card_giftcard</i>
								<span class="nav-text">Bonus</span>
							</a>
						</li>
						<li>
							<a class="" href="javascript:void(0);" aria-expanded="false">
								<i class="material-symbols-outlined">apps_outage</i>
								<span class="nav-text">Social Trading</span>
							</a>
						</li>						
						<hr />
						
						<span class="main-menu">Prop-Firm</span>
						<li>
							<a class="" href="{{ route('propfirm.challenges') }}" aria-expanded="false">
								<i class="material-symbols-outlined">apps_outage</i>
								<span class="nav-text">New Challenge</span>
							</a>
						</li>
						<li>
							<a class="" href="{{ route('propfirm.mychallenges') }}" aria-expanded="false">
								<i class="material-symbols-outlined">apps_outage</i>
								<span class="nav-text">My Challenges</span>
							</a>
						</li>	
						<li>
							<a class="" href="javascript:void(0);" aria-expanded="false">
								<i class="material-symbols-outlined">apps_outage</i>
								<span class="nav-text">Contests</span>
							</a>
						</li>
											
						<hr />
						
						<span class="main-menu">Funds</span>
						<li><a class="" href="{{ route('funds.funddeposit') }}" aria-expanded="false">
								<i class="material-symbols-outlined">monetization_on</i>
								<span class="nav-text">Deposit</span>
							</a>
						</li>
						<li><a class="" href="{{ route('funds.fundwithdrawal') }}" aria-expanded="false">
								<i class="material-symbols-outlined">monetization_on</i>
								<span class="nav-text">Withdrawal</span>
							</a>
						</li>
						<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
								<i class="material-symbols-outlined">lab_profile</i>
								<span class="nav-text">Transfer</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ route('funds.fundtransfer') }}">Internal Accounts</a></li>
								<li><a href="{{ route('funds.fundp2p') }}">P2P</a></li>
							</ul>
						</li>
						<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
								<i class="material-symbols-outlined">monetization_on</i>
								<span class="nav-text">History</span>
							</a>
							<ul aria-expanded="false">
								<li><a href="{{ route('funds.fundhistory') }}">Financial Transactions</a></li>
								<li><a href="{{ route('funds.fundprophistory') }}">Challenge Purchase</a></li>
							</ul>
						</li>						
						<hr />
						
						<span class="main-menu">Hedge</span>						
						<li>
							<a class="" href="javascript:void(0);" aria-expanded="false">
								<i class="material-symbols-outlined">apps_outage</i>
								<span class="nav-text">Investing</span>
							</a>
						</li>
						<li>
							<a class="" href="javascript:void(0);" aria-expanded="false">
								<i class="material-symbols-outlined">apps_outage</i>
								<span class="nav-text">My Investments</span>
							</a>
						</li>
						
						<hr />
						<span class="main-menu">Our Partner</span>
						<li>
							<a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
								<i class="fa-regular fa-gear fw-bold"></i>
								<span class="nav-text">Dashboard</span>
							</a>
						</li>
						
						<hr />
						<span class="main-menu">Help Center</span>
						<li>
							<a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
								<i class="fa-regular fa-gear fw-bold"></i>
								<span class="nav-text">Web Terminal</span>
							</a>
						</li>
						<li>
							<a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
								<i class="fa-regular fa-gear fw-bold"></i>
								<span class="nav-text">Resources</span>
							</a>
						</li>
						<li>
							<a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
								<i class="fa-regular fa-gear fw-bold"></i>
								<span class="nav-text">Help Desk</span>
							</a>
						</li>
					</ul>  --}}

            <div class="copyright">
                <p><strong></strong> © <span class="current-year"><?php echo date('Y'); ?></span> All Rights Reserved
                </p>
                <p class="fs-12">Forex One Portal</p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Initialize MetisMenu
        $('#menu').metisMenu({
            toggle: true // only one submenu open at a time
        });

        // Optional: force aria-expanded toggle (sometimes needed for Blade-generated menus)
        $('#menu li.has-arrow > a').on('click', function() {
            var $this = $(this);
            var expanded = $this.attr('aria-expanded') === 'true';
            $this.attr('aria-expanded', !expanded);
        });
    });
</script>

<!--**********************************
            Sidebar end
        ***********************************-->
