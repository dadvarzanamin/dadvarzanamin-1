@extends('admin')
@section('style')
    <title>پروفایل کاربری</title>
@endsection
@section('main')
                <div class="dashboard-heading mb-5">
                    <h3 class="fs-22 font-weight-semi-bold">پروفایل من</h3>
                </div>
                <div class="profile-detail mb-5">
                    <ul class="generic-list-item generic-list-item-flash">
                        <li><span class="profile-name">تاریخ ثبت نام: </span><span class="profile-desc">{{jdate(Auth::user()->created_at)->format('%A, %d %B %Y')}} </span></li>
                        <li><span class="profile-name">نام و نام خانوادگی: </span><span class="profile-desc">{{(Auth::user()->name)}}</span>@if(!Auth::user()->name)  <span style="color: red;">کاربر گرامی لطفا نام و نام خانوادگی خود را در تنظیمات پروفایل کامل کنید.</span> @endif</li>
                        <li><span class="profile-name">نام کاربری: </span><span class="profile-desc">{{(Auth::user()->username)}}</span></li>
                        <li><span class="profile-name">نوع کاربری: </span><span class="profile-desc">@foreach(\App\Models\TypeUser::whereId(Auth::user()->type_id)->pluck('title_fa') as $title) {{$title}} @endforeach</span>@if(!Auth::user()->type_id)  <span style="color: red;">کاربر گرامی لطفا با کلیک بر روی ایمیل خود آن را تایید نمایید.</span> @endif</li>
                        <li><span class="profile-name">ایمیل: </span><span class="profile-desc">{{(Auth::user()->email)}}</span> @if(Auth::user()->email_verify == 0)  <span style="color: red;">کاربر گرامی لطفا با کلیک بر روی ایمیل خود آن را تایید نمایید.</span> @endif</li>
                        <li><span class="profile-name">شماره تلفن: </span><span class="profile-desc">{{(Auth::user()->phone)}}</span> @if(Auth::user()->phone_verify == 0) <span style="color: red;">کاربر گرامی لطفا با کلیک بر روی شماره موبایل خود آن را تایید نمایید.</span>@endif</li>
                    </ul>
                </div>
            </div>
        </div>

@endsection
