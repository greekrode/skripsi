<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
    <div class="ui-block">

        <!-- Your Profile  -->

        <div class="your-profile">
            <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your PROFILE</h6>
            </div>

            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Profile Settings
                                <svg class="olymp-dropdown-arrow-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-dropdown-arrow-icon"></use></svg>
                            </a>
                        </h6>
                    </div>

                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <ul class="your-profile-menu">
                            <li>
                                <a href="{{ route('account.personal.edit', ['id' => Auth::user()->id]) }}" class="active">Personal Information</a>
                            </li>
                            <li>
                                <a href="{{ route('account.password.edit', ['id' => Auth::user()->id]) }}">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

{{--            <div class="ui-block-title">--}}
{{--                <a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>--}}
{{--                <a href="#" class="items-round-little bg-primary">8</a>--}}
{{--            </div>--}}
{{--            <div class="ui-block-title">--}}
{{--                <a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>--}}
{{--            </div>--}}
{{--            <div class="ui-block-title">--}}
{{--                <a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>--}}
{{--                <a href="#" class="items-round-little bg-blue">4</a>--}}
{{--            </div>--}}
{{--            <div class="ui-block-title ui-block-title-small">--}}
{{--                <h6 class="title">FAVOURITE PAGE</h6>--}}
{{--            </div>--}}
{{--            <div class="ui-block-title">--}}
{{--                <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>--}}
{{--            </div>--}}
{{--            <div class="ui-block-title">--}}
{{--                <a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>--}}
{{--            </div>--}}
        </div>

        <!-- ... end Your Profile  -->


    </div>
</div>
