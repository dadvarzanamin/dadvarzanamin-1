@extends('admin')
@section('style')
    <title>تنظیمات حساب کاربری</title>
@endsection
@section('main')
    @include('sweetalert::alert')
    <div class="dashboard-heading mb-5">
        <h3 class="fs-22 font-weight-semi-bold">ویرایش حساب کاربری</h3>
    </div>
    <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="false">مشخصات فردی</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true">کلمه عبور</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="change-email-tab" data-toggle="tab" href="#change-email" role="tab" aria-controls="change-email" aria-selected="false">تغییر ایمیل</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab" aria-controls="withdraw" aria-selected="false">حساب ها و پرداخت ها</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">ویرایش</h3>
                <form method="post" action="{{route('edit-user-profile')}}" class="row pt-40px" enctype="multipart/form-data">
                    @csrf
                    <div class="input-box col-lg-3">
                        <label class="label-text">نام و نام خانوادگی</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="name" value="{{Auth::user()->name}}" />
                            <span class="la la-user input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-3">
                        <label class="label-text">آدرس ایمیل</label>
                        <div class="form-group">
                            <input class="form-control form--control text-left" type="email" name="email" value="{{Auth::user()->email}}" />
                            <span class="la la-envelope input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-3">
                        <label class="label-text">شماره تلفن</label>
                        <div class="form-group">
                            <input class="form-control form--control text-left" type="text" name="phone" value="{{Auth::user()->phone}}" />
                            <span class="la la-phone input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-3">
                        <label class="label-text">تصویر پروفایل</label>
                        <div class="media-body">
                            <div class="file-upload-wrap file-upload-wrap-2">
                                <input type="file" name="image" class="multi file-upload-input with-preview"/>
                                <span class="file-upload-text"><i class="la la-photo mr-2"></i>یک عکس آپلود کنید</span>
                            </div>
                        </div>
                    </div>
                    <div class="input-box col-lg-8"></div>
                    <div class="input-box col-lg-4">
                        <p class="fs-14" style="color:#e53a3a;">حداکثر اندازه فایل 5 مگابایت، ابعاد: 200x200 و فایل های مجاز jpg و png</p>
                    </div>
                    <div class="input-box col-lg-12 py-2">
                        <button type="submit" class="btn theme-btn">ذخیره تغییرات</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">رمز عبور را تغییر دهید</h3>
                <form method="post" action="{{route('change-password')}}" class="row">
                    @csrf
                    <div class="input-box col-lg-4">
                        <label class="label-text">رمز عبور قدیمی</label>
                        <div class="form-group">
                            <input class="form-control form--control" required type="password" name="old_password" placeholder="رمز عبور قدیمی" />
                            <span class="la la-lock input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-4">
                        <label class="label-text">رمز عبور جدید</label>
                        <div class="form-group">
                            <input class="form-control form--control" required type="password" name="password" placeholder="رمز عبور جدید" />
                            <span class="la la-lock input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-4">
                        <label class="label-text">رمز عبور جدید را تأیید کنید</label>
                        <div class="form-group">
                            <input class="form-control form--control" required type="password" name="password_confirmation" placeholder="رمز عبور جدید را تأیید کنید" />
                            <span class="la la-lock input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-12 py-2">
                        <button class="btn theme-btn">رمز عبور را تغییر دهید</button>
                    </div>
                </form>
                <form method="post" class="pt-5 mt-5 border-top border-top-gray">
                    @csrf
                    <h3 class="fs-17 font-weight-semi-bold pb-1">رمز عبور را فراموش کرده و سپس رمز عبور را بازیابی کنید</h3>
                    <p class="pb-4">
                        ایمیل اکانت خود را برای بازنشانی رمز عبور وارد کنید. سپس پیوندی به ایمیل برای بازنشانی رمز عبور دریافت خواهید کرد و به ایمیل خود مراجعه کنید
                    </p>
                    <div class="input-box">
                        <label class="label-text">آدرس ایمیل</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="email" name="email" placeholder="آدرس ایمیل را وارد کن" />
                            <span class="la la-envelope input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box py-2">
                        <button class="btn theme-btn">بازیابی رمز عبور</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">تغییر ایمیل</h3>
                <form method="post" class="row">
                    <div class="input-box col-lg-4">
                        <label class="label-text">ایمیل قدیمی</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="ایمیل قدیمی" />
                            <span class="la la-envelope input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-4">
                        <label class="label-text">ایمیل جدید</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="text" placeholder="ایمیل جدید" />
                            <span class="la la-envelope input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-12 py-2">
                        <button class="btn theme-btn">تغییر ایمیل</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
            <div class="setting-body">
                <h3 class="fs-17 font-weight-semi-bold pb-4">یک روش برداشت را انتخاب کنید</h3>
                <form method="post" class="row">
                    <h3 class="fs-17 font-weight-semi-bold pb-4 col-lg-12">اطلاعات حساب</h3>
                    <div class="input-box col-lg-4">
                        <label class="label-text">نام بانک</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="bank_name" value="{{Auth::user()->bank_name}}" />
                            <span class="la la-bank input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-4">
                        <label class="label-text">شماره حساب</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="bank_account" style="text-align: left" value="{{Auth::user()->bank_account}}" />
                            <span class="la la-pencil input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-4">
                        <label class="label-text">شماره کارت</label>
                        <div class="form-group">
                            <input class="form-control form--control" type="text" name="bank_card" style="text-align: left" value="{{Auth::user()->bank_card}}" />
                            <span class="la la-id-card input-icon"></span>
                        </div>
                    </div>
                    <div class="input-box col-lg-12 py-2">
                        <button class="btn theme-btn">ذخیره حساب برداشت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'خطا',
                html: '<ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
            });
        </script>
    @endif
@endsection
