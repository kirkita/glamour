@extends('frontend.layouts.app')

@section('title', __('My Account'))

@section('content')
    <div class="container py-4 animate__animated animate__fadeIn">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="clearfix text-center pt-4 mb-5 mx-auto">
                    <img src="{{ $logged_in_user->avatar }}" class="rounded-circle mx-auto" width="120px" height="120px" />
                </div>

                <nav class="text-center">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <x-utils.link
                            :text="__('My Profile')"
                            class="nav-link active"
                            id="my-profile-tab"
                            data-toggle="pill"
                            href="#my-profile"
                            role="tab"
                            aria-controls="my-profile"
                            aria-selected="true" />

                        <x-utils.link
                            :text="__('Edit Information')"
                            class="nav-link"
                            id="information-tab"
                            data-toggle="pill"
                            href="#information"
                            role="tab"
                            aria-controls="information"
                            aria-selected="false"/>

                        @if (! $logged_in_user->isSocial())
                            <x-utils.link
                                :text="__('Password')"
                                class="nav-link"
                                id="password-tab"
                                data-toggle="pill"
                                href="#password"
                                role="tab"
                                aria-controls="password"
                                aria-selected="false" />
                        @endif

                        <x-utils.link
                            :text="__('Two Factor Authentication')"
                            class="nav-link"
                            id="two-factor-authentication-tab"
                            data-toggle="pill"
                            href="#two-factor-authentication"
                            role="tab"
                            aria-controls="two-factor-authentication"
                            aria-selected="false"/>
                    </div>
                </nav>

                <div class="tab-content" id="my-profile-tabsContent">
                    <div class="tab-pane fade pt-3 show active" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                        @include('frontend.pages.user.account.tabs.profile')
                    </div><!--tab-profile-->

                    <div class="tab-pane fade pt-3" id="information" role="tabpanel" aria-labelledby="information-tab">
                        @include('frontend.pages.user.account.tabs.information')
                    </div><!--tab-information-->

                    @if (! $logged_in_user->isSocial())
                        <div class="tab-pane fade pt-3" id="password" role="tabpanel" aria-labelledby="password-tab">
                            @include('frontend.pages.user.account.tabs.password')
                        </div><!--tab-password-->
                    @endif

                    <div class="tab-pane fade p-4" id="two-factor-authentication" role="tabpanel" aria-labelledby="two-factor-authentication-tab">
                        @include('frontend.pages.user.account.tabs.two-factor-authentication')
                    </div><!--tab-information-->
                </div><!--tab-content-->

            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container-->
@endsection
