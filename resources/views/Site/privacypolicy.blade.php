@extends('master')
@section('main')
        <section class="breadcrumb-area section-padding img-bg-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="section-heading">
                        <h2 class="section__title text-white">ادوکا - سیاست حفظ حریم خصوصی</h2>
                    </div>
                    <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                        <li><a href="index.html">صفحه اصلی</a></li>
                        <li>سیاست حفظ حریم خصوصی</li>
                    </ul>
                </div>
                <!-- end breadcrumb-content -->
            </div>
            <!-- end container -->
        </section>

        <section class="privacy-policy-area section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="card card-item">
                                <div class="card-body">
                                    <h3 class="card-title fs-18 pb-2">فیلد جستجو</h3>
                                    <div class="divider"><span></span></div>
                                    <form method="post">
                                        <div class="form-group">
                                            <input class="form-control form--control pl-3" type="text" name="search" placeholder="عبارت جستجوی خود را تایپ کنید..." />
                                            <p class="fs-13">دکمه Enter را فشار دهید یا دکمه جستجو کن را بزنید</p>
                                        </div>
                                        <button type="submit" class="btn theme-btn w-100"><i class="la la-search mr-2"></i>جستجو کن</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="card card-item">
                                <div class="card-body">
                                    <h3 class="card-title fs-18 pb-2">دسته بندی</h3>
                                    <div class="divider"><span></span></div>
                                    <ul class="generic-list-item">
                                        <li><a href="#">تحصیلات</a></li>
                                        <li><a href="#">LMS</a></li>
                                        <li><a href="#">چگونه؟</a></li>
                                        <li><a href="#">آموزش های تصویری</a></li>
                                        <li><a href="#">دیگر</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="card card-item">
                                <div class="card-body">
                                    <h3 class="card-title fs-18 pb-2">متا</h3>
                                    <div class="divider"><span></span></div>
                                    <ul class="generic-list-item">
                                        <li><a href="sign-up.html">ثبت نام</a></li>
                                        <li><a href="login.html">وارد شدن</a></li>
                                        <li><a href="#">خوراک ورودی ها</a></li>
                                        <li><a href="#">فید نظرات</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end sidebar -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-8">
                        <div class="card card-item">
                            <div class="card-body">
                                <h2 class="card-title fs-18 pb-2">1. اطلاعاتی که جمع آوری می کنیم و نحوه استفاده از آن</h2>
                                <div class="divider"><span></span></div>
                                <h3 class="fs-16 font-weight-semi-bold pb-1">الف. اطلاعات حساب:</h3>
                                <p class="pb-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </p>
                                <h3 class="fs-16 font-weight-semi-bold pb-1">ب. محتوای عمومی:</h3>
                                <p class="pb-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                </p>
                                <h3 class="fs-16 font-weight-semi-bold pb-1">ج. مخاطبین:</h3>
                                <p class="pb-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                </p>
                                <h3 class="fs-16 font-weight-semi-bold pb-1">د. ارتباطات:</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                </p>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h2 class="card-title fs-18 pb-2">2. فرم های تماس</h2>
                                <div class="divider"><span></span></div>
                                <h3 class="fs-16 font-weight-semi-bold pb-1">الف. کوکی ها</h3>
                                <p class="pb-3">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                    کاربردهای متنوع
                                </p>
                                <h3 class="fs-16 font-weight-semi-bold pb-1">ب. محتوای جاسازی شده از وب سایت های دیگر</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                    کاربردهای متنوع
                                </p>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h2 class="card-title fs-18 pb-2">3. چگونه از اطلاعات شما محافظت می کنیم</h2>
                                <div class="divider"><span></span></div>
                                <p class="pb-3">
                                    ما روش&zwnj;های مناسب جمع&zwnj;آوری، ذخیره و پردازش داده&zwnj;ها و اقدامات امنیتی را برای محافظت در برابر دسترسی غیرمجاز، تغییر، افشا یا تخریب اطلاعات شخصی، نام کاربری، رمز عبور، اطلاعات تراکنش و
                                    داده&zwnj;های ذخیره شده در سایت ما اتخاذ می&zwnj;کنیم.
                                </p>
                                <p>
                                    تبادل داده های حساس و خصوصی بین سایت و کاربران آن از طریق یک کانال ارتباطی ایمن SSL انجام می شود و با امضای دیجیتال رمزگذاری شده و محافظت می شود. سایت ما همچنین با استانداردهای آسیب پذیری PCI مطابقت دارد
                                    تا محیطی امن برای کاربران ایجاد کند.
                                </p>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h2 class="card-title fs-18 pb-2">4. اطلاعات تماس شما</h2>
                                <div class="divider"><span></span></div>
                                <p>
                                    اگر در این سایت حساب کاربری دارید یا نظرات درستی دارید، می&zwnj;توانید درخواست دریافت فایل صادراتی از داده&zwnj;های شخصی که در مورد شما داریم، از جمله هر داده&zwnj;ای که به ما ارائه کرده&zwnj;اید، دریافت
                                    کنید. شما همچنین می توانید درخواست کنید که ما اطلاعات شخصی را که در مورد شما نگهداری می کنیم پاک کنیم. این شامل هیچ داده ای نمی شود که ما موظف به نگهداری برای اهداف اداری، قانونی یا امنیتی هستیم.
                                </p>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col-lg-8 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
@endsection
