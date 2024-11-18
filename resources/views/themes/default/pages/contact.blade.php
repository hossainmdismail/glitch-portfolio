@extends('themes.default.layout.app')

@section('content')
    <!-- Pagetitle -->
    <section class="page-title">
        <div class="shape"></div>
        <div class="shape right s3"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title__body">
                        <div class="page-title__main">
                            <h4 class="title">Contact</h4>

                            <ul class="breacrumb">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>
                                    <p>Contact</p>
                                </li>
                            </ul>
                            <div class="bottom">
                                <p>Share this page</p>

                                <ul class="list-social">
                                    <li><a href="#">
                                            <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.57969 9.03953C2.51969 9.03953 1.19969 9.03953 0.599688 9.03953C0.279688 9.03953 0.179688 8.91953 0.179688 8.61953C0.179688 7.81953 0.179688 6.99953 0.179688 6.19953C0.179688 5.87953 0.299688 5.77953 0.599688 5.77953H2.57969C2.57969 5.71953 2.57969 4.55953 2.57969 4.01953C2.57969 3.21953 2.71969 2.45953 3.11969 1.75953C3.53969 1.03953 4.13969 0.559531 4.89969 0.279531C5.39969 0.0995311 5.89969 0.0195312 6.43969 0.0195312H8.39969C8.67969 0.0195312 8.79969 0.139531 8.79969 0.419531V2.69953C8.79969 2.97953 8.67969 3.09953 8.39969 3.09953C7.85969 3.09953 7.31969 3.09953 6.77969 3.11953C6.23969 3.11953 5.95969 3.37953 5.95969 3.93953C5.93969 4.53953 5.95969 5.11953 5.95969 5.73953H8.27969C8.59969 5.73953 8.71969 5.85953 8.71969 6.17953V8.59953C8.71969 8.91953 8.61969 9.01953 8.27969 9.01953C7.55969 9.01953 6.01969 9.01953 5.95969 9.01953V15.5395C5.95969 15.8795 5.85969 15.9995 5.49969 15.9995C4.65969 15.9995 3.83969 15.9995 2.99969 15.9995C2.69969 15.9995 2.57969 15.8795 2.57969 15.5795C2.57969 13.4795 2.57969 9.09953 2.57969 9.03953Z"
                                                    fill="white" />
                                            </svg>
                                        </a></li>
                                    <li><a href="#">
                                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.5 1.42062C13.9794 1.66154 13.4246 1.82123 12.8462 1.89877C13.4412 1.524 13.8954 0.935077 14.1089 0.225231C13.5541 0.574154 12.9416 0.820615 12.2889 0.958154C11.7621 0.366462 11.0114 0 10.1924 0C8.60337 0 7.32412 1.36062 7.32412 3.02862C7.32412 3.26862 7.34338 3.49938 7.39062 3.71908C5.0045 3.59631 2.89313 2.38985 1.47475 0.552C1.22712 1.00523 1.08188 1.524 1.08188 2.08246C1.08188 3.13108 1.59375 4.06062 2.35675 4.59877C1.89562 4.58954 1.44325 4.44831 1.06 4.22585C1.06 4.23508 1.06 4.24708 1.06 4.25908C1.06 5.73046 2.05487 6.95262 3.3595 7.23415C3.12587 7.30154 2.87125 7.33385 2.607 7.33385C2.42325 7.33385 2.23775 7.32277 2.06362 7.28215C2.4355 8.48123 3.49075 9.36277 4.7455 9.39138C3.769 10.1972 2.52912 10.6828 1.18688 10.6828C0.9515 10.6828 0.72575 10.6717 0.5 10.6412C1.77137 11.5062 3.27813 12 4.903 12C10.1845 12 13.072 7.38462 13.072 3.384C13.072 3.25015 13.0676 3.12092 13.0615 2.99262C13.6311 2.56615 14.1097 2.03354 14.5 1.42062Z"
                                                    fill="white" />
                                            </svg>
                                        </a></li>
                                    <li><a href="#">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.0006 14V8.87249C14.0006 6.35249 13.4581 4.42749 10.5181 4.42749C9.10062 4.42749 8.15563 5.19749 7.77063 5.93249H7.73563V4.65499H4.95312V14H7.85813V9.36249C7.85813 8.13749 8.08563 6.96499 9.59063 6.96499C11.0781 6.96499 11.0956 8.34749 11.0956 9.43249V13.9825H14.0006V14Z"
                                                    fill="white" />
                                                <path d="M0.226562 4.65479H3.13156V13.9998H0.226562V4.65479Z"
                                                    fill="white" />
                                                <path
                                                    d="M1.68 0C0.7525 0 0 0.7525 0 1.68C0 2.6075 0.7525 3.3775 1.68 3.3775C2.6075 3.3775 3.36 2.6075 3.36 1.68C3.36 0.7525 2.6075 0 1.68 0Z"
                                                    fill="white" />
                                            </svg>

                                        </a></li>
                                    <li><a href="#">
                                            <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.2347 1.9639C17.1458 1.22216 16.4468 0.510897 15.7154 0.415609C11.2555 -0.138536 6.7457 -0.138536 2.28731 0.415609C1.55533 0.51069 0.856308 1.22216 0.76739 1.9639C0.452537 4.68236 0.452537 7.31818 0.76739 10.036C0.856308 10.7778 1.55533 11.4897 2.28731 11.5843C6.7457 12.1384 11.2557 12.1384 15.7154 11.5843C16.4468 11.4898 17.1458 10.7778 17.2347 10.036C17.5496 7.31842 17.5496 4.68236 17.2347 1.9639ZM7.58931 8.82375V3.17703L11.8243 6.00049L7.58931 8.82375Z"
                                                    fill="white" />
                                            </svg>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pagetitle -->

    <section class="touch">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h6 class="sub-heading"><span>Get in Touch!</span></h6>
                        <h3 class="heading">Let’s Start Working <br>
                            Together
                        </h3>
                    </div>
                    <div class="touch__main">
                        <div class="info">
                            <h5>Contact information</h5>
                            <ul class="list">
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7V7Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7V7Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p>20, Backway Road, New York, US AB42</p>
                                </li>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_794_6441)">
                                            <path
                                                d="M1.5 4.5C1.5 10.0227 5.97733 14.5 11.5 14.5H13C13.3978 14.5 13.7794 14.342 14.0607 14.0607C14.342 13.7794 14.5 13.3978 14.5 13V12.0853C14.5 11.7413 14.266 11.4413 13.932 11.358L10.9833 10.6207C10.69 10.5473 10.382 10.6573 10.2013 10.8987L9.55467 11.7607C9.36667 12.0113 9.042 12.122 8.748 12.014C7.65659 11.6128 6.66544 10.9791 5.84319 10.1568C5.02094 9.33456 4.38725 8.34341 3.986 7.252C3.878 6.958 3.98867 6.63333 4.23933 6.44533L5.10133 5.79867C5.34333 5.618 5.45267 5.30933 5.37933 5.01667L4.642 2.068C4.60143 1.9058 4.50781 1.7618 4.37604 1.65889C4.24426 1.55598 4.08187 1.50006 3.91467 1.5H3C2.60218 1.5 2.22064 1.65804 1.93934 1.93934C1.65804 2.22064 1.5 2.60218 1.5 3V4.5Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_794_6441">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p>+000-000-000-000</p>

                                </li>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.5 4.5V11.5C14.5 11.8978 14.342 12.2794 14.0607 12.5607C13.7794 12.842 13.3978 13 13 13H3C2.60218 13 2.22064 12.842 1.93934 12.5607C1.65804 12.2794 1.5 11.8978 1.5 11.5V4.5M14.5 4.5C14.5 4.10218 14.342 3.72064 14.0607 3.43934C13.7794 3.15804 13.3978 3 13 3H3C2.60218 3 2.22064 3.15804 1.93934 3.43934C1.65804 3.72064 1.5 4.10218 1.5 4.5M14.5 4.5V4.662C14.5 4.9181 14.4345 5.16994 14.3096 5.39353C14.1848 5.61712 14.0047 5.80502 13.7867 5.93933L8.78667 9.016C8.55014 9.16169 8.2778 9.23883 8 9.23883C7.7222 9.23883 7.44986 9.16169 7.21333 9.016L2.21333 5.94C1.99528 5.80569 1.81525 5.61779 1.69038 5.3942C1.56551 5.1706 1.49997 4.91876 1.5 4.66267V4.5"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p>support@gmail.com</p>
                                </li>
                            </ul>

                            <div class="image">
                                <img src="{{ asset('themes/default') }}/assets/images/layouts/touch.png" alt="">
                            </div>
                        </div>

                        <form action="#" class="form-box">
                            <div class="row">
                                <div class="col">
                                    <label>Your name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Your email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Your phone</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Subject</label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Select</option>
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Message</label>
                                    <textarea name="mess" id="mess" cols="30" rows="10"></textarea>
                                </div>

                            </div>
                            <div class="row mb-0">
                                <div class="col">
                                    <button class="action-btn"><span>Send Now</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map">
        <div class="container">
            <div class="row">
                <div class="map__main">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.93962245741!2d90.36468187479196!3d23.749532388810717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40311a29c1f9eaa9%3A0x7eda334fe00e121c!2sSynex%20Digital!5e0!3m2!1sen!2sbd!4v1730923577170!5m2!1sen!2sbd"
                        width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <section class="faq s3">
        <div class="shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="block-text">
                        <h6 class="sub-heading"><span>FAQs</span></h6>
                        <h3 class="heading">Frequently
                            <br>
                            Aksed Questions
                        </h3>
                        <p>Below is a list of frequently asked questions and answers from partners and 3D artist. Please
                            check this FAQ first before contacting us.</p>

                    </div>
                    <div class="faq__main flat-tabs">
                        <ul class="menu-tab">
                            <li>
                                <h6 class="fs-14">Web Development</h6>
                            </li>
                            <li class="active">
                                <h6 class="fs-14">UI/UX</h6>
                            </li>
                            <li>
                                <h6 class="fs-14">Ecommerce</h6>
                            </li>
                            <li>
                                <h6 class="fs-14">SAAS</h6>
                            </li>

                        </ul>
                        <div class="content-tab">
                            <div class="content-inner">
                                <div class="flat-accordion">
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>01.</span> When the musics over turn off the light?
                                            <span class="icon-plus"></span>
                                        </h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>02.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>03.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>04.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="flat-accordion">
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>01.</span> When the musics over turn off the light?
                                            <span class="icon-plus"></span>
                                        </h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>02.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>03.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>04.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="flat-accordion">
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>01.</span> When the musics over turn off the light?
                                            <span class="icon-plus"></span>
                                        </h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>02.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>03.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>04.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="flat-accordion">
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>01.</span> When the musics over turn off the light?
                                            <span class="icon-plus"></span>
                                        </h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>02.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>03.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flat-toggle">
                                        <h6 class="toggle-title"><span>04.</span> What is the best way to collect NFT?<span
                                                class="icon-plus"></span></h6>
                                        <div class="toggle-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Tellus aliquam parturient erat id vel, condimentum a,
                                                hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                ultrices venenatis.
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">

                    <div class="image">
                        <img src="{{ asset('themes/default') }}/assets/images/layouts/img-faq.png" alt="">
                    </div>

                </div>

            </div>
        </div>
        <div class="footer__main">
            <div class="block-text center">

                <h3 class="heading">Get Newsletter</h3>
                <p>Get udpated with news, tips & tricks</p>


            </div>
            <form action="#" class="form">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your email">

                </div>
                <button class="action-btn"><span>Subscribe</span></button>
            </form>
        </div>
    </section>
@endsection
