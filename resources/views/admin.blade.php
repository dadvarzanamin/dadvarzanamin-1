<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="مهندس محمد حسین دیوان بیگی">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, follow">

    <!-- Google fonts -->
{{--    <link rel="preconnect" href="https://fonts.gstatic.com/">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">--}}


    <link rel="icon" href="{{$companies['favicon16']}}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{$companies['favicon32']}}" sizes="32x32" type="image/png">

    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">

@yield('style')
</head>
<body>

{{--<div class="preloader">--}}
{{--    <div class="loader">--}}
{{--        <svg class="spinner" viewBox="0 0 50 50">--}}
{{--            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>--}}
{{--        </svg>--}}
{{--    </div>--}}
{{--</div>--}}

<header class="header-menu-area">
    <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="media media-card align-items-center">
                            <div class="media-body">
                                <h2 class="section__title fs-20"> سلام؛ {{ Auth::user()->name }}  </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="logo-box logo--box">
                            <a href="index.html" class="logo"><img src="{{asset($companies['image'])}}" alt="لوگو" /></a>
                        </div>
                        <div class="menu-wrapper float-left">
                            <div class="nav-left-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">
                                    <div class="shop-cart notification-cart pr-3 mr-3 border-left border-left-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-bell"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center justify-content-between">
                                                        <h4>اطلاعیه</h4>
                                                        <span class="ribbon fs-14">18</span>
                                                    </li>
                                                    <li>
                                                        <div class="notification-body">
                                                            <a href="dashboard.html" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-1 mr-3 text-white">
                                                                    <i class="la la-bolt"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>رزومه شما به روز شد!</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">1 ساعت پیش</span>
                                                                </div>
                                                            </a>
                                                            <a href="dashboard.html" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-2 mr-3 text-white">
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>رمز عبور را عوض کردی</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">12 خرداد 1400</span>
                                                                </div>
                                                            </a>
                                                            <a href="dashboard.html" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-3 mr-3 text-white">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>حساب شما با موفقیت ایجاد شد</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">12 خرداد 1400</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="menu-heading-block">
                                                        <a href="dashboard.html" class="btn theme-btn w-100">نمایش همه اعلان ها <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shop-cart user-profile-cart">
                                        <ul>
                                            <li>
                                                <div class="shop-cart-btn">
                                                    <div class="avatar-xs">
                                                        <img class="rounded-full img-fluid" @if(Auth::user()->image)  src="{{Auth::user()->image}}" @else src="{{asset('admin/assets/img/users/1.jpg')}}" @endif alt="{{(Auth::user()->name)}}" />
                                                    </div>
                                                    <span class="dot-status bg-1"></span>
                                                </div>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center">
                                                        <a href="" class="avatar-sm flex-shrink-0 d-block">
                                                            <img class="rounded-full img-fluid" @if(Auth::user()->image)  src="{{Auth::user()->image}}" @else src="{{asset('admin/assets/img/users/1.jpg')}}" @endif alt="{{Auth::user()->name}}" />
                                                        </a>
                                                        <div class="ml-2">
                                                            <h4><a href="" class="text-black">{{Auth::user()->name}}</a></h4>
                                                            <span class="d-block fs-14 lh-20">{{Auth::user()->email}}</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="theme-picker d-flex align-items-center justify-content-center lh-40">
                                                            <button class="theme-picker-btn dark-mode-btn w-100 font-weight-semi-bold justify-content-center" title="حالت تاریک">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                                                </svg>
                                                                حالت تاریک
                                                            </button>
                                                            <button class="theme-picker-btn light-mode-btn w-100 font-weight-semi-bold justify-content-center" title="حالت نور">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                    <circle cx="12" cy="12" r="5"></circle>
                                                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                                                </svg>
                                                                حالت نور
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="generic-list-item">
                                                            <li>
                                                                <a href="{{route('setting')}}"> <i class="la la-gear mr-1"></i> تنظیمات </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('message')}}">
                                                                    <i class="la la-envelope mr-1"></i>پیام های
                                                                    <span class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('user-request')}}"> <i class="la la-question mr-1"></i> درخواست مشاوره </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('logout')}}"> <i class="la la-power-off mr-1"></i> خروج </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="right" title="بستن منو">
            <i class="la la-times"></i>
        </div>
        <!-- end off-canvas-menu-close -->
        <h4 class="off-canvas-menu-heading pt-90px">هشدارها</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="dashboard.html">اطلاعیه</a></li>
            <li><a href="dashboard-message.html">پیام ها</a></li>
            <li><a href="my-courses.html">لیست علاقه مندیها</a></li>
            <li><a href="shopping-cart.html">سبد خرید من</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">حساب</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="dashboard-settings.html">تنظیمات حساب</a></li>
            <li><a href="dashboard-purchase-history.html">سابقه خرید</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">مشخصات</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="student-detail.html">پروفایل عمومی</a></li>
            <li><a href="dashboard-settings.html">ویرایش نمایه</a></li>
            <li><a href="index.html">خروج</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">بیشتر از Aduca</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
            <li><a href="for-business.html">آدوکا برای تجارت</a></li>
            <li><a href="#">برنامه را دریافت کنید</a></li>
            <li><a href="invite.html">دوستان را دعوت کنید</a></li>
            <li><a href="contact.html">کمک</a></li>
        </ul>
        <div class="theme-picker d-flex align-items-center justify-content-center mt-4 px-3">
            <button class="theme-picker-btn dark-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center" title="حالت تاریک">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
                حالت تاریک
            </button>
            <button class="theme-picker-btn light-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center" title="حالت نور">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5"></circle>
                    <line x1="12" y1="1" x2="12" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="23"></line>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                    <line x1="1" y1="12" x2="3" y2="12"></line>
                    <line x1="21" y1="12" x2="23" y2="12"></line>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                </svg>
                حالت نور
            </button>
        </div>
    </div>
</header>

<section class="dashboard-area">
    <div class="off-canvas-menu dashboard-off-canvas-menu off--canvas-menu custom-scrollbar-styled pt-20px">
        <div class="off-canvas-menu-close dashboard-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="right" title="بستن منو">
            <i class="la la-times"></i>
        </div>
        <div class="logo-box px-4">
            <a href="index.html" class="logo"><img src="{{asset($companies['image'])}}" alt="لوگو" /></a>
        </div>
        <ul class="generic-list-item off-canvas-menu-list off--canvas-menu-list pt-35px">
            <li class="page-active">
                <a href="{{route('profile')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"
                        ></path>
                    </svg>
                    پروفایل من
                </a>
            </li>
            <li>
                <a href="dashboard-bookmark.html">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path>
                    </svg>
                    نشانک ها
                </a>
            </li>
            <li>
                <a href="dashboard-message.html">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"
                        ></path>
                    </svg>
                    پیام <span class="badge badge-info p-1 ml-2">2</span>
                </a>
            </li>
            <li>
                <a href="dashboard-reviews.html">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"
                        ></path>
                    </svg>
                    بررسی ها
                </a>
            </li>
            <li>
                <a href="dashboard-purchase-history.html">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"
                        ></path>
                    </svg>
                    سابقه خرید
                </a>
            </li>
            <li>
                <a href="{{route('setting')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                        ></path>
                    </svg>
                    تنظیمات
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"
                        ></path>
                    </svg>
                    خروج
                </a>
            </li>
        </ul>
    </div>
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3"><i class="la la-bars mr-1"></i> منو</div>
        <div class="container-fluid">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-2">

            </div>
    @yield('main')
</section>

<div id="scroll-top">
    <i class="la la-arrow-up" title="برو بالا"></i>
</div>

<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">حساب شما برای همیشه حذف خواهد شد!</h4>
                <p>آیا مطمئن هستید که می خواهید اکانت خود را حذف کنید؟</p>
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">لغو کنید</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">باشه حذف کن</button>
                </div>
            </div>
            <!-- end modal-body -->
        </div>
        <!-- end modal-content -->
    </div>
    <!-- end modal-dialog -->
</div>

<script src="{{asset('site/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/isotope.js')}}"></script>
<script src="{{asset('site/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('site/js/fancybox.js')}}"></script>
<script src="{{asset('site/js/datedropper.min.js')}}"></script>
<script src="{{asset('site/js/emojionearea.min.js')}}"></script>
<script src="{{asset('site/js/animated-skills.js')}}"></script>
<script src="{{asset('site/js/jquery.MultiFile.min.js')}}"></script>
<script src="{{asset('site/js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@yield('script')


</body>
</html>
