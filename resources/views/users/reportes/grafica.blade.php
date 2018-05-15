@extends('material.layouts.dashboard')
@section('page-title', 'Gráficos:')
@push('styles')
    {{--Amcharts--}}
    <link href="{{ asset('assets/global/plugins/amcharts/amstockcharts/style.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/amcharts/amstockcharts/plugins/export/export.css') }}" rel="stylesheet"
          type="text/css"/>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line boxless tabbable-reversed">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_0" data-toggle="tab"> Entradas Por Fecha </a>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_0">
                        @component('themes.bootstrap.elements.portlets.portlet', ['icon' => 'icon-book-open', 'title' => 'Gráfico Entradas Universidad'])
                            <div id="chartFecha" style="height:400px;"></div>
                        @endcomponent
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugins')
    {{--Amcharts--}}
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amcharts.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/serial.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/lang/es.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/themes/patterns.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/themes/light.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/plugins/export/export.min.js') }}"
            type="text/javascript"></script>
@endpush

@push('functions')
    <script>
        $(document).ready(function () {
            var chartFecha = AmCharts.makeChart("chartFecha", {
                "type": "serial",
                "theme": "light",
                "fontFamily": 'Open Sans',
                "color": '#888888',
                "dataProvider": [
                        @foreach($date as $info => $valor)
                    {
                        "date": "{{$info}}",
                        "duration": {{$valor}},
                        "lineColor": "#b7e021"
                    },
                    @endforeach],
                "balloon": {
                    "cornerRadius": 6
                },
                "graphs": [{
                    "bullet": "square",
                    "bulletBorderAlpha": 1,
                    "bulletBorderThickness": 1,
                    "fillAlphas": 0.3,
                    "fillColorsField": "lineColor",
                    "legendValueText": "[[value]]",
                    "lineColorField": "lineColor",
                    "title": "duration",
                    "valueField": "duration"
                }],
                "chartScrollbar": {
                    "oppositeAxis": false,
                    "dragIcon": "dragIconRectSmallBlack"
                },
                "chartCursor": {
                    "categoryBalloonDateFormat": "YYYY MMM DD",
                    "cursorAlpha": 0,
                    "zoomable": false
                },
                "dataDateFormat": "YYYY-MM-DD",
                "categoryField": "date",
                "categoryAxis": {
                    "dateFormats": [{
                        "period": "DD",
                        "format": "DD"
                    }, {
                        "period": "WW",
                        "format": "MMM DD"
                    }, {
                        "period": "MM",
                        "format": "MMM"
                    }, {
                        "period": "YYYY",
                        "format": "YYYY"
                    }],
                    "parseDates": true,
                    "autoGridCount": false,
                    "axisColor": "#555555",
                    "gridAlpha": 0,
                    "gridCount": 50
                },
                "export": {
                    "enabled": true
                }
            });
            $('#chartFecha').closest('.portlet').find('.fullscreen').click(function () {
                chartFecha.invalidateSize();
            });
         });
    </script>
@endpush