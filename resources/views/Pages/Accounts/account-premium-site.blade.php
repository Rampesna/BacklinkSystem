@extends('Layouts.master')
@section('site_title', 'Backlink Satış')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))

@section('content')

    @php($user = \Illuminate\Support\Facades\Auth::user())

    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="card-value float-right text-muted"><i class="icon-globe"></i></div>
                    <h3 class="mb-1">{{$getPremiumSite->alexa_global}}</h3>
                    <div>Global Alexa</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="card-value float-right text-muted">{{$getPremiumSite->alexa_country_code}}</div>
                    <h3 class="mb-1">{{$getPremiumSite->alexa_country}}</h3>
                    <div>Ülke Alexa</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="card-value float-right text-muted"><i class="fa fa-google"></i></div>
                    <h3 class="mb-1">{{$getPremiumSite->google_index}}</h3>
                    <div>Google Index Sayısı</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="card-value float-right text-muted"><i class="icon-list"></i></div>
                    <h3 class="mb-1">{{$getPremiumSite->yandex_index}}</h3>
                    <div>Yandex Index Sayısı</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-6">
            <div class="card insight-title">
                <div class="header">
                    @if($getPremiumSite->meta_description < 160)
                        <h2 style="color: #00cc66">Site Açıklaması / Description (İdeal)</h2>
                    @else
                        <h2>Site Açıklaması / Description (160 Karakterden Kısa)</h2>
                    @endif
                </div>
                <div class="body">
                    <span>{{$getPremiumSite->meta_description}}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card insight-title">
                <div class="header">
                    <h2 style="color: #00cc66">Site Anahtar Kelimeler / Keywords</h2>
                </div>
                <div class="body">
                    <span>{{$getPremiumSite->meta_keywords}}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Google Sıralama Analizi ({{$url}})</h2>
                </div>
                <div class="body">
                    <div id="chart-employment" style="height: 300px"></div>
                </div>
            </div>
        </div>
        @if(!is_null($getPremiumSite->enemy_url))
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Rakip Analizi ({{$getPremiumSite->enemy_url}})</h2>
                    </div>
                    <div class="body">
                        <div id="chart-employment-2" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">

@stop

@section('page-script')

    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script>
        c3.generate({
            bindto: '#chart-employment', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', @for($count = count($getWeeklyAnalysisKeywordOne) - 1 ; $count >= 0 ; $count--) {{$getWeeklyAnalysisKeywordOne[$count]["rank"]}} , @endfor],
                    @if(isset($getWeeklyAnalysisKeywordTwo))
                    ['data2', @for($count = count($getWeeklyAnalysisKeywordTwo) - 1 ; $count >= 0 ; $count--) {{$getWeeklyAnalysisKeywordTwo[$count]["rank"]}} , @endfor],
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordThree))
                    ['data3', @for($count = count($getWeeklyAnalysisKeywordThree) - 1 ; $count >= 0 ; $count--) {{$getWeeklyAnalysisKeywordThree[$count]["rank"]}} , @endfor],
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordFour))
                    ['data5', @for($count = count($getWeeklyAnalysisKeywordFour) - 1 ; $count >= 0 ; $count--) {{$getWeeklyAnalysisKeywordFour[$count]["rank"]}} , @endfor],
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordFive))
                    ['data5', @for($count = count($getWeeklyAnalysisKeywordFive) - 1 ; $count >= 0 ; $count--) {{$getWeeklyAnalysisKeywordFive[$count]["rank"]}} , @endfor],
                    @endif
                ],
                type: 'line', // default type of chart
                colors: {
                    'data1': '#2dd8ff',
                    @if(isset($getWeeklyAnalysisKeywordTwo))
                    'data2': '#e0a800',
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordThree))
                    'data3': '#d100a7',
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordFour))
                    'data4': '#c3ff00',
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordFive))
                    'data5': '#f70000',
                    @endif
                },
                names: {
                    // name of each serie
                    'data1': '{{$getPremiumSite->keyword}}',
                    @if(isset($getWeeklyAnalysisKeywordTwo))
                    'data2': '{{$getPremiumSite->keyword_2}}',
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordThree))
                    'data3': '{{$getPremiumSite->keyword_3}}',
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordFour))
                    'data4': '{{$getPremiumSite->keyword_4}}',
                    @endif
                    @if(isset($getWeeklyAnalysisKeywordFive))
                    'data5': '{{$getPremiumSite->keyword_5}}',
                    @endif
                }
            },
            axis: {
                x: {
                    type: 'category',
                    // name of each category
                    categories: [
                        @for($count = count($getWeeklyAnalysisKeywordOne) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyAnalysisKeywordOne[$count]["year"]."-".$getWeeklyAnalysisKeywordOne[$count]["month"]."-".$getWeeklyAnalysisKeywordOne[$count]["day"]))}}', @endfor
                        @if(isset($getWeeklyAnalysisKeywordTwo))
                            @for($count = count($getWeeklyAnalysisKeywordTwo) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyAnalysisKeywordTwo[$count]["year"]."-".$getWeeklyAnalysisKeywordTwo[$count]["month"]."-".$getWeeklyAnalysisKeywordTwo[$count]["day"]))}}', @endfor
                        @endif
                        @if(isset($getWeeklyAnalysisKeywordThree))
                            @for($count = count($getWeeklyAnalysisKeywordThree) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyAnalysisKeywordThree[$count]["year"]."-".$getWeeklyAnalysisKeywordThree[$count]["month"]."-".$getWeeklyAnalysisKeywordThree[$count]["day"]))}}', @endfor
                        @endif
                        @if(isset($getWeeklyAnalysisKeywordFour))
                            @for($count = count($getWeeklyAnalysisKeywordFour) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyAnalysisKeywordFour[$count]["year"]."-".$getWeeklyAnalysisKeywordFour[$count]["month"]."-".$getWeeklyAnalysisKeywordFour[$count]["day"]))}}', @endfor
                        @endif
                        @if(isset($getWeeklyAnalysisKeywordFive))
                            @for($count = count($getWeeklyAnalysisKeywordFive) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyAnalysisKeywordFive[$count]["year"]."-".$getWeeklyAnalysisKeywordFive[$count]["month"]."-".$getWeeklyAnalysisKeywordFive[$count]["day"]))}}', @endfor
                        @endif
                    ],

                },
                y: {
                    inverted: true,
                    ticks:2
                }
            },
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 20,
                top: 0
            },
        });
    </script>
    @if(!is_null($getPremiumSite->enemy_url))
    <script>
        c3.generate({
            bindto: '#chart-employment-2', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', @for($count = count($getWeeklyEnemyAnalysisKeywordOne) - 1 ; $count >= 0 ; $count--) {{$getWeeklyEnemyAnalysisKeywordOne[$count]["rank"]}} , @endfor],
                        @if(isset($getWeeklyEnemyAnalysisKeywordTwo))
                    ['data2', @for($count = count($getWeeklyEnemyAnalysisKeywordTwo) - 1 ; $count >= 0 ; $count--) {{$getWeeklyEnemyAnalysisKeywordTwo[$count]["rank"]}} , @endfor],
                        @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordThree))
                    ['data3', @for($count = count($getWeeklyEnemyAnalysisKeywordThree) - 1 ; $count >= 0 ; $count--) {{$getWeeklyEnemyAnalysisKeywordThree[$count]["rank"]}} , @endfor],
                        @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordFour))
                    ['data5', @for($count = count($getWeeklyEnemyAnalysisKeywordFour) - 1 ; $count >= 0 ; $count--) {{$getWeeklyEnemyAnalysisKeywordFour[$count]["rank"]}} , @endfor],
                        @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordFive))
                    ['data5', @for($count = count($getWeeklyEnemyAnalysisKeywordFive) - 1 ; $count >= 0 ; $count--) {{$getWeeklyEnemyAnalysisKeywordFive[$count]["rank"]}} , @endfor],
                    @endif
                ],
                type: 'line', // default type of chart
                colors: {
                    'data1': '#2dd8ff',
                    @if(isset($getWeeklyEnemyAnalysisKeywordTwo))
                    'data2': '#e0a800',
                    @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordThree))
                    'data3': '#d100a7',
                    @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordFour))
                    'data4': '#c3ff00',
                    @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordFive))
                    'data5': '#f70000',
                    @endif
                },
                names: {
                    // name of each serie
                    'data1': '{{$getPremiumSite->keyword}}',
                    @if(isset($getWeeklyEnemyAnalysisKeywordTwo))
                    'data2': '{{$getPremiumSite->keyword_2}}',
                    @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordThree))
                    'data3': '{{$getPremiumSite->keyword_3}}',
                    @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordFour))
                    'data4': '{{$getPremiumSite->keyword_4}}',
                    @endif
                        @if(isset($getWeeklyEnemyAnalysisKeywordFive))
                    'data5': '{{$getPremiumSite->keyword_5}}',
                    @endif
                }
            },
            axis: {
                x: {
                    type: 'category',
                    // name of each category
                    categories: [
                        @for($count = count($getWeeklyEnemyAnalysisKeywordOne) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyEnemyAnalysisKeywordOne[$count]["year"]."-".$getWeeklyEnemyAnalysisKeywordOne[$count]["month"]."-".$getWeeklyEnemyAnalysisKeywordOne[$count]["day"]))}}', @endfor
                            @if(isset($getWeeklyEnemyAnalysisKeywordTwo))
                            @for($count = count($getWeeklyEnemyAnalysisKeywordTwo) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyEnemyAnalysisKeywordTwo[$count]["year"]."-".$getWeeklyEnemyAnalysisKeywordTwo[$count]["month"]."-".$getWeeklyEnemyAnalysisKeywordTwo[$count]["day"]))}}', @endfor
                            @endif
                            @if(isset($getWeeklyEnemyAnalysisKeywordThree))
                            @for($count = count($getWeeklyEnemyAnalysisKeywordThree) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyEnemyAnalysisKeywordThree[$count]["year"]."-".$getWeeklyEnemyAnalysisKeywordThree[$count]["month"]."-".$getWeeklyEnemyAnalysisKeywordThree[$count]["day"]))}}', @endfor
                            @endif
                            @if(isset($getWeeklyEnemyAnalysisKeywordFour))
                            @for($count = count($getWeeklyEnemyAnalysisKeywordFour) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyEnemyAnalysisKeywordFour[$count]["year"]."-".$getWeeklyEnemyAnalysisKeywordFour[$count]["month"]."-".$getWeeklyEnemyAnalysisKeywordFour[$count]["day"]))}}', @endfor
                            @endif
                            @if(isset($getWeeklyEnemyAnalysisKeywordFive))
                            @for($count = count($getWeeklyEnemyAnalysisKeywordFive) - 1 ; $count >= 0 ; $count--) '{{strftime("%d %B %Y",strtotime($getWeeklyEnemyAnalysisKeywordFive[$count]["year"]."-".$getWeeklyEnemyAnalysisKeywordFive[$count]["month"]."-".$getWeeklyEnemyAnalysisKeywordFive[$count]["day"]))}}', @endfor
                        @endif
                    ],

                },
                y: {
                    inverted: true,
                    ticks:2
                }
            },
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 20,
                top: 0
            },
        });
    </script>
    @endif
@stop
