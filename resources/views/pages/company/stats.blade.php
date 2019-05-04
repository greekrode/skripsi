@extends('layouts.app')
@section('header-title',' Home')
@section('title', 'Home')
@section('content')
    <div class="header-spacer header-spacer-small"></div>


    <!-- Main Header Groups -->

    <div class="main-header">
        <div class="content-bg-wrap bg-group"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Stats and Analytics</h1>
                        <p>View your stats here!</p>
                    </div>
                </div>
            </div>
        </div>

        <img class="img-bottom" src="img/group-bottom.png" alt="friends">
    </div>

    <!-- ... end Main Header Groups -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-content">
                        <ul class="statistics-list-count">
                            <li>
                                <div class="points">
								<span>
									Total Job Postings
								</span>
                                </div>
                                <div class="count-stat">{{ $totalJobPostings }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-content">
                        <ul class="statistics-list-count">
                            <li>
                                <div class="points">
								<span>
									Total Job Applicants
								</span>
                                </div>
                                <div class="count-stat">{{ $totalJobApplications->total }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-content">
                        <ul class="statistics-list-count">
                            <li>
                                <div class="points">
								<span>
									Total Accepted Jobs
								</span>
                                </div>
                                <div class="count-stat" style="color: green">{{ $totalAcceptedJobs->total }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-content">
                        <ul class="statistics-list-count">
                            <li>
                                <div class="points">
								<span>
									Total Rejected Jobs
								</span>
                                </div>
                                <div class="count-stat" style="color: red">{{ $totalRejectedJobs->total }}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="ui-block" data-mh="pie-chart">
                    <div class="ui-block-title">
                        <div class="h6 title">Top 5 Faculties</div>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{ asset('svg/icons.svg') }}#olymp-three-dots-icon"></use></svg></a>
                    </div>
                    <div class="ui-block-content">
                        <div class="chart-with-statistic">
                            <ul class="statistics-list-count">
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-purple"></span>
                                        {{ $topFaculties[0]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topFaculties[0]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-breez"></span>
										{{ $topFaculties[1]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topFaculties[1]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-primary"></span>
										{{ $topFaculties[2]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topFaculties[2]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-yellow"></span>
										{{ $topFaculties[3]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topFaculties[3]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-blue"></span>
										{{ $topFaculties[4]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topFaculties[4]->total }}</div>
                                </li>
                            </ul>


                            <div class="chart-js chart-js-pie-color">
                                <canvas id="pie-color-chart" width="180" height="180"></canvas>
                                <div class="general-statistics">{{ $topFaculties[0]->total + $topFaculties[1]->total + $topFaculties[2]->total + $topFaculties[3]->total + $topFaculties[4]->total }}
                                    <span>Total Top 5 Faculties</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="ui-block" data-mh="pie-chart">
                    <div class="ui-block-title">
                        <div class="h6 title">Top 5 Majors</div>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>
                    <div class="ui-block-content">
                        <div class="chart-with-statistic">
                            <ul class="statistics-list-count">
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-purple"></span>
                                        {{ $topMajors[0]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topMajors[0]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-breez"></span>
										{{ $topMajors[1]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topMajors[1]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-primary"></span>
										{{ $topMajors[2]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topMajors[2]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-yellow"></span>
										{{ $topMajors[3]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topMajors[3]->total }}</div>
                                </li>
                                <li>
                                    <div class="points">
									<span>
										<span class="statistics-point bg-blue"></span>
										{{ $topMajors[4]->name }}
									</span>
                                    </div>
                                    <div class="count-stat">{{ $topMajors[4]->total }}</div>
                                </li>
                            </ul>


                            <div class="chart-js chart-js-pie-color">
                                <div class="chart-js chart-radar">
                                    <canvas id="radar-chart"></canvas>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        var pieColorChart = document.getElementById("pie-color-chart");
        if (null !== pieColorChart) var ctx_pc = pieColorChart.getContext("2d"),
            data_pc = {
                labels: ["{{ $topFaculties[0]->name }}", "{{ $topFaculties[1]->name }}", "{{ $topFaculties[2]->name }}", "{{ $topFaculties[3]->name }}", "{{ $topFaculties[4]->name }}"],
                datasets: [{
                    data: [{{ $topFaculties[0]->total }}, {{ $topFaculties[1]->total }}, {{ $topFaculties[2]->total }}, {{ $topFaculties[3]->total }}, {{ $topFaculties[4]->total }}],
                    borderWidth: 0,
                    backgroundColor: ["#7c5ac2", "#08ddc1", "#ff5e3a", "#ffd71b", "#38a9ff"]
                }]
            },
            pieColorEl = new Chart(ctx_pc, {
                type: "doughnut",
                data: data_pc,
                options: {
                    deferred: {
                        delay: 300
                    },
                    cutoutPercentage: 93,
                    legend: {
                        display: !1
                    },
                    animation: {
                        animateScale: !1
                    }
                }
            });
        ! function(a) {
            "use strict";
            var t = a(".pie-chart");
            t.appear({
                force_process: !0
            }), t.on("appear", function() {
                var t = a(this);
                if (!t.data("inited")) {
                    var e = t.data("startcolor"),
                        r = t.data("endcolor"),
                        o = 100 * t.data("value");
                    t.circleProgress({
                        thickness: 16,
                        size: 360,
                        startAngle: -Math.PI / 4 * 2,
                        emptyFill: "#ebecf1",
                        lineCap: "round",
                        fill: {
                            gradient: [r, e],
                            gradientAngle: Math.PI / 4
                        }
                    }).on("circle-animation-progress", function(a, e) {
                        t.find(".content").html(parseInt(o * e, 10) + "<span>%</span>")
                    }), t.data("inited", !0)
                }
            })
        }(jQuery);

        var radarChart = document.getElementById("radar-chart");
        if (null !== radarChart) var ctx_rc = radarChart.getContext("2d"),
            data_rc = {
                labels: ["{{ $topMajors[0]->name }}", "{{ $topMajors[1]->name }}", "{{ $topMajors[2]->name }}", "{{ $topMajors[3]->name }}", "{{ $topMajors[4]->name }}"],
                datasets: [{
                    data: [{{ $topMajors[0]->total }}, {{ $topMajors[1]->total }}, {{ $topMajors[2]->total }}, {{ $topMajors[3]->total }}, {{ $topMajors[4]->total }}],
                    backgroundColor: ["#7c5ac2", "#08ddc1", "#ff5e3a", "#ffd71b", "#38a9ff"]
                }],
            },
            radarChartEl = new Chart(ctx_rc, {
                type: "pie",
                data: data_rc,
                options: {
                    deferred: {
                        delay: 300
                    },
                    legend: {
                        display: !1
                    },
                    scale: {
                        gridLines: {
                            display: !1
                        },
                        ticks: {
                            beginAtZero: !0
                        },
                        reverse: !1
                    },
                    animation: {
                        animateScale: !0
                    }
                }
            });
    </script>
@endsection
