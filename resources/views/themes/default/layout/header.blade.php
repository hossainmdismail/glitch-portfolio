        <!-- Header -->
        <header id="header_main" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__body">
                            <div class="header__logo">
                                <a href="{{ route('home') }}">
                                    <img id="site-logo" src="{{ Storage::url($configData->logo) }}" alt="Peson"
                                        width="160" height="38" data-retina="assets/images/logo/logo@2x.png"
                                        data-width="160" data-height="38">
                                </a>
                            </div>

                            <div class="header__right">
                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li class="menu-item menu-current-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        {{-- <li class="menu-item">
                                            <a href="#">Explore</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="nft.html">NFTs</a></li>
                                                <li class="menu-item"><a href="blog.html">Blog List</a></li>
                                                <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>

                                                <li class="menu-item"><a href="vision-mission.html">Visions &
                                                        Mission</a></li>
                                                <li class="menu-item"><a href="help-center.html">Help Center</a></li>
                                                <li class="menu-item"><a href="parti-asset.html">Participants &
                                                        Assets</a></li>
                                                <li class="menu-item"><a href="advisor.html">Advisors & Backers</a></li>
                                                <li class="menu-item"><a href="partner.html">Partners & Investors</a>
                                                </li>

                                            </ul>
                                        </li> --}}
                                        <li class="menu-item">
                                            <a href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="mobile-button"><span></span></div>
                            </div>

                            <div class="header__action">
                                {{-- <a href="#" class="search-btn">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9.7659" cy="9.76639" r="8.98856" stroke="white"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.0176 16.4849L19.5416 19.9997" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a> --}}
                                <a href="{{ route('contact') }}" class="action-btn"><span>Join Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end Header -->
