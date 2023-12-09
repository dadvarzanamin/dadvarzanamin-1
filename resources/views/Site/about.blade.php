@extends('master')
@section('style')
    @if($thispage->page_description)    <meta name="description"         content="{{$thispage->page_description}}">                    @endif
    @if(json_decode($thispage->keyword))<meta name="keyword"             content="{{implode("،" , json_decode($thispage->keyword))}}"> @endif
    <meta name="twitter:card"        content="summary" />
    @if($thispage->tab_title)           <meta name="twitter:title"       content="{{$thispage->tab_title}}" />                         @endif
    @if($thispage->page_description)    <meta name="twitter:description" content="{{$thispage->page_description}}" />                  @endif
    @if($thispage->tab_title)           <meta itemprop="name"            content="{{$thispage->tab_title}}">                           @endif
    @if($thispage->page_description)    <meta itemprop="description"     content="{{$thispage->page_description}}">                    @endif
    <meta property="og:url"          content="{{url()->current()}}" />
    @if($thispage->tab_title)           <meta property="og:title"        content="{{$thispage->tab_title}}"/>                          @endif
    @if($thispage->page_description)    <meta property="og:description"  content="{{$thispage->page_description}}" />                  @endif
    <link rel="canonical" href="{{url()->current()}}" />

    <link rel="stylesheet" href="{{asset('site/css/animated-headline.css')}}" />
    <title>{{$thispage->tab_title}}</title>
@endsection
@section('main')

    <section class="breadcrumb-area">
        <img @if($slides) src="{{asset('storage/'.$slides->file_link)}}" @else src="{{asset('site/images/img1.jpg')}}" @endif alt="" style="width: 100%">
    </section>

    <section class="about-area section--padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content pb-5">
                        <div class="section-heading2">
                            <h2 class="section__title pb-3 lh-50">موسسه حقوقی دادورزان امین</h2>
                            <p class="section__desc">
                                ما اینجا هستیم تا دسترسی همه افراد به خدمات حقوقی تخصصی، با کیفیت و مقرون‌ به‌ صرفه را آسان کنیم. ما به‌ عنوان ارائه‌ دهنده آنلاین راهکارهای حقوقی تخصصی به شرکت‌ها و کسب‌ و کارهای ایران فعالیت می‌کنیم و تا امروز به بیش از 500 شرکت کوچک، متوسط و بزرگ ایرانی کمک کرده‌ایم تا راه بهتری برای رفع نیازهای قانونی خود بیابند.
                            </p>
                        </div>
                        <ul class="generic-list-item pt-3">
                            <li><i class="la la-check-circle mr-2 text-success"></i>دسترسی سریع و هوشمند</li>
                            <li><i class="la la-check-circle mr-2 text-success"></i>وکلای خبره و توانمند</li>
                            <li><i class="la la-check-circle mr-2 text-success"></i>پرونده های موفق و حل شده</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-md-block">
                    <div class="generic-img-box generic-img-box-layout-2">
                        <div class="img__item img__item-1">
                            <img class="lazy" src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img7.jpg')}}" alt="درباره تصویر" />
                            <div class="generic-img-box-content">
                                <h3 class="fs-24 font-weight-semi-bold pb-1">40+ نفر </h3>
                                <span>وکیل خبره</span>
                            </div>
                        </div>
                        <div class="img__item img__item-2">
                            <img class="lazy" src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img13.jpg')}}" alt="درباره تصویر" />
                            <div class="generic-img-box-content">
                                <h3 class="fs-24 font-weight-semi-bold pb-1">200+ ساعت</h3>
                                <span>دوره های آموزشی</span>
                            </div>
                        </div>
                        <div class="img__item img__item-3">
                            <img class="lazy" src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img14.jpg')}}" alt="درباره تصویر" />
                            <div class="generic-img-box-content">
                                <h3 class="fs-24 font-weight-semi-bold pb-1">500+ پرونده</h3>
                                <span>پرونده موفق</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="get-started-area pt-30px pb-120px position-relative">
        <span class="ring-shape ring-shape-1"></span>
        <span class="ring-shape ring-shape-2"></span>
        <span class="ring-shape ring-shape-3"></span>
        <span class="ring-shape ring-shape-4"></span>
        <span class="ring-shape ring-shape-5"></span>
        <span class="ring-shape ring-shape-6"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item hover-s text-center">
                        <div class="card-body">
                            <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img7.jpg')}}" alt="تصویر کارت" class="img-fluid lazy rounded-full" style="width: 150px;height: 150px" />
                            <h5 class="card-title pt-4 pb-2">انواع موضوعات قضایی و دعاوی</h5>
                            <p class="card-text text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.  </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item hover-s text-center">
                        <div class="card-body">
                            <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img13.jpg')}}" alt="تصویر کارت" class="img-fluid lazy rounded-full" style="width: 150px;height: 150px"/>
                            <h5 class="card-title pt-4 pb-2">همکاری با بیش از 40 وکیل خبره</h5>
                            <p class="card-text text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item hover-s text-center">
                        <div class="card-body">
                            <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img14.jpg')}}" alt="تصویر کارت" class="img-fluid lazy rounded-full" style="width: 150px;height: 150px" />
                            <h5 class="card-title pt-4 pb-2">خدمات الکترونیک و هوشمند وکالتی</h5>
                            <p class="card-text text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است. </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center">می خواهید با ما بپیوندید؟ <a href="careers.html" class="text-color hover-underline">موقعیت های باز</a> ما را ببینید<a href="careers.html" class="text-color hover-underline"></a></p>
        </div>
    </section>

    <section class="our-mission-area section--padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-md-block">
                    <div class="row pb-5">
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box">
                                <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img7.jpg')}}" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box my-3">
                                <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img13.jpg')}}" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box">
                                <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img14.jpg')}}" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box my-3">
                                <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img7.jpg')}}" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content pl-4">
                        <div class="section-heading">
                            <h2 class="section__title pb-3 lh-50">ماموریت ما</h2>
                            <p class="section__desc pb-3">
                                تفاوتی ندارد یک کسب و کار کوچک داشته باشید یا یک هلدینگ بین المللی، در برابر چالش‌های حقوقی همواره نیاز به یک مشاور حقوقی با تجربه و قراردادهای منسجم خواهید داشت. وینداد، این امکان را برای شما به ارمغان آورده است تا تمام امور حقوقی و ثبتی خود را بدون دغدغه و به صورت یکپارچه به تیم متخصص و باتجربه‌ای بسپارید که سال‌ها در این حوزه فعالیت داشته و به انواع مسائل و قوانین کسب و کار تسلط بالایی دارند
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="story-area section--padding">
        <div class="container">
            <div class="story-content text-center">
                <div class="section-heading">
                    <h2 class="section__title pb-3 lh-50">داستان ما</h2>
                    <p class="section__desc">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                        متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                    </p>
                </div>
            </div>
            <div class="row pt-60px">
                <div class="col-lg-4 responsive-column-half">
                    <div class="story-img-item">
                        <img class="lazy" src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img7.jpg')}}" alt="تصویر داستان" />
                    </div>
                </div>
                <div class="col-lg-4 responsive-column-half">
                    <div class="story-img-item">
                        <img class="lazy" src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img13.jpg')}}" alt="تصویر داستان" />
                    </div>
                </div>
                <div class="col-lg-4 responsive-column-half">
                    <div class="story-img-item">
                        <img class="lazy" src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img14.jpg')}}" alt="تصویر داستان" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-block"></div>

    <section class="team-member-area section--padding">
        <div class="container">
            <div class="team-member-heading-content text-center">
                <div class="section-heading">
                    <h2 class="section__title lh-50">اعضای اصلی تیم دادورزان امین</h2>
                </div>
            </div>
            <div class="row pt-60px">
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-1.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">حاج حسین علی اکبرزاده</a></h5>
                            <p class="card-text">رئیس هیئت مدیره</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-2.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">مهدی علی اکبر زاده</a></h5>
                            <p class="card-text">عضو هیئت مدیره و مدیرعامل</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-3.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">یحیا ابراهیمی</a></h5>
                            <p class="card-text">مدیر گروه وکلا</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-1.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">محمد حسین دیوان بیگی</a></h5>
                            <p class="card-text">مدیر فنآوری اطلاعات و رسانه</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-1.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">امیر کارگر</a></h5>
                            <p class="card-text">مدیر پژوهش و دانش</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-8.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">مهسا احمدی</a></h5>
                            <p class="card-text">مسئول دفتر مدیرعامل</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-6.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">اشکان خیری</a></h5>
                            <p class="card-text">مشاور و وکیل پایه یک</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="{{asset('site/images/small-avatar-7.jpg')}}" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">سید علیرضا علیزاده</a></h5>
                            <p class="card-text">مشاور و وکیل پایه یک</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-area bg-gray section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-content-wrap pb-4">
                        <div class="section-heading">
                            <h2 class="section__title mb-3">درباره ما چه میگویند؟</h2>
                            <p class="section__desc">
                                موکلین که پرنده آنها را با ما پیش برده اند و وکلایی که با ما همکاری کرده اند درباره ما چه میگوند؟
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonial-carousel-2 owl-action-styled owl-action-styled-2">
                        <div class="card card-item">
                            <div class="card-body">
                                <p class="card-text">
                                    من از زمانی که کارهای حقوقی شرکت را به این مجموعه سپردم با آرامش به کارهای شرکت پرداخته و تمام موارد حقوقی را از دوستان مشورت میگیرم و در صورت بروز شکل از این مجموعه برای رفع آن اعتماد می کنم
                                </p>
                                <div class="media media-card align-items-center pt-4">
                                    <div class="media-img avatar-md">
                                        <img src="{{asset('site/images/small-avatar-1.jpg')}}" alt="آواتار گواهی" class="rounded-full" />
                                    </div>
                                    <div class="media-body">
                                        <h5>مهندس میرمحمدی</h5>
                                        <div class="d-flex align-items-center pt-1">
                                            <span class="lh-18 pr-2">مدیرعامل شرکت مینو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-item">
                            <div class="card-body">
                                <p class="card-text">
                                    من از زمانی که کارهای حقوقی شرکت را به این مجموعه سپردم با آرامش به کارهای شرکت پرداخته و تمام موارد حقوقی را از دوستان مشورت میگیرم و در صورت بروز شکل از این مجموعه برای رفع آن اعتماد می کنم
                                </p>
                                <div class="media media-card align-items-center pt-4">
                                    <div class="media-img avatar-md">
                                        <img src="{{asset('site/images/small-avatar-2.jpg')}}" alt="آواتار گواهی" class="rounded-full" />
                                    </div>
                                    <div class="media-body">
                                        <h5>ابراهیم محمدی</h5>
                                        <div class="d-flex align-items-center pt-1">
                                            <span class="lh-18 pr-2">معاون حقوقی شرکت توسعه اعتماد میهن</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-item">
                            <div class="card-body">
                                <p class="card-text">
                                    من از زمانی که کارهای حقوقی شرکت را به این مجموعه سپردم با آرامش به کارهای شرکت پرداخته و تمام موارد حقوقی را از دوستان مشورت میگیرم و در صورت بروز شکل از این مجموعه برای رفع آن اعتماد می کنم
                                </p>
                                <div class="media media-card align-items-center pt-4">
                                    <div class="media-img avatar-md">
                                        <img src="{{asset('site/images/small-avatar-3.jpg')}}" alt="آواتار گواهی" class="rounded-full" />
                                    </div>
                                    <div class="media-body">
                                        <h5>احمد جوکار</h5>
                                        <div class="d-flex align-items-center pt-1">
                                            <span class="lh-18 pr-2">مدیر حقوقی شرکت پتروشیمی</span>

                                        </div>
                                    </div>
                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-block"></div>

    <section class="about-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content pb-5">
                        <div class="section-heading">
                            <h2 class="section__title pb-3 lh-50">موسسه حقوقی دادوران امین مکانی عالی برای رشد</h2>
                            <p class="section__desc pb-3">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                            </p>
                        </div>
                        <div class="btn-box pt-35px">
                            <a href="#" class="btn theme-btn">به تیم ما بپیوندید <i class="la la-arrow-left icon ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="generic-img-box generic-img-box-layout-3">
                        <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset('site/images/img16.jpg')}}" alt="درباره تصویر" class="img__item lazy img__item-1" />
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
