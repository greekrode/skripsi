@extends('layouts.app')
@section('header-title',' Search Job')
@section('title', 'Job Search')
@section('content')
    <div class="header-spacer header-spacer-small"></div>

    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Search Your Job Here!</h1>
                        <p>Here, you can check for your job. </p>
                    </div>
                </div>
            </div>
        </div>

        <img class="img-bottom" src="{{ asset('img/group-bottom.png') }}" alt="friends">
    </div>

    <!-- ... end Main Header Groups -->

    <!-- Search Widget -->

<div class="container">
    <div class="row">
        <div class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Search Filter</h6>
                </div>
                <div class="ui-block-content">

                    <!-- Search Form -->
                    <form>
                        <div class="row">
                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                <fieldset class="form-group label-floating is-select">
                                    <label class="control-label">Country</label>
                                    <select class="selectpicker form-control" name="country" data-live-search="true">
                                        <option value="all">All</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->code }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>

                            </div>

                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                <fieldset class="form-group label-floating is-select">
                                    <label class="control-label">Seniority Level</label>
                                    <select class="selectpicker form-control" name="seniority" data-live-search="true">
                                        <option value="all">All</option>
                                        @foreach ($seniorities as $seniority)
                                            <option value="{{ $seniority->id }}">{{ $seniority->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                <fieldset class="form-group label-floating is-select">
                                    <label class="control-label">Employment Type</label>
                                    <select class="selectpicker form-control" name="type" data-live-search="true">
                                        <option value="all">All</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col col-lg-4 col-md-4 offset-md-8 col-sm-12 col-12">
                                <a href="#" class="btn btn-blue btn-md full-width" onclick="searchJob()">Search Now</a>
                            </div>
                        </div>
                    </form>

                    <!-- ... end Search Form -->
                </div>
            </div>


        </div>
    </div>
</div>

<!-- ... end Search Widget -->

    <script>
        function searchJob() {
            $.ajax({

            });
        }
    </script>

@endsection
