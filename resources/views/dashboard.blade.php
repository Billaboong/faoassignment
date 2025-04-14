<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div id="container"></div>
                    </div>
                </div>
                <!-- ... -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div id="subscribers"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
   
  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" id="subscriberssector1">

            <figure class="highcharts-figure">
                <div id="subscriberssector"></div>

                <div id="sliders">
                    <table>
                        <tr>
                            <td><label for="alpha">Alpha Angle</label></td>
                            <td><input id="alpha" type="range" min="0" max="45" value="15"/> <span id="alpha-value" class="value"></span></td>
                        </tr>
                        <tr>
                            <td><label for="beta">Beta Angle</label></td>
                            <td><input id="beta" type="range" min="-45" max="45" value="15"/> <span id="beta-value" class="value"></span></td>
                        </tr>
                        <tr>
                            <td><label for="depth">Depth</label></td>
                            <td><input id="depth" type="range" min="20" max="100" value="50"/> <span id="depth-value" class="value"></span></td>
                        </tr>
                    </table>
                </div>
            </figure>
        </div>

 
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div id="ganalyticsnewsbriefs"></div>
                            
                        </div>
                    </div>
                    <!-- ... -->
             
                </div>
    
            </div>
   
        </div>


    <script src="{{ asset('highcharts/highcharts.js') }}"></script>
    <!--<script src="https://code.highcharts.com/highcharts-3d.js"></script> -->
    <script src="{{ asset('highcharts/highcharts-3d.js') }}"></script>
    <script src="{{ asset('highcharts/exporting.js') }}"></script>
    <script src="{{ asset('highcharts/export-data.js') }}"></script>
    <script src="{{ asset('highcharts/accessibility.js') }}"></script>
    <script>
        var published = {!! $published !!};
        var pendingPublished = {!! $pendingPublished !!};
        var subscribers = {!! $subscribers !!};
        var admins = {!! $admins !!};
        var sectors = {!! $sectors !!};
        var ganalytics = {!! $refinedFilterAnalyticsData !!};
        //console.log(ganalytics);

        var seriesCategory = [];
        var seriesTotalUsers = [];
        var seriesEventCountPerUser = [];

        for (var i = 0; i < ganalytics.length; i++) {
          //  console.log(ganalytics[i][0].file);
          
            seriesCategory.push([
                ganalytics[i][0].file
        ]);
        seriesTotalUsers.push([
                ganalytics[i][0].totalUsers
        ]);
        seriesEventCountPerUser.push([
                ganalytics[i][0].eventCountPerUser
        ]);
        
        }

        console.log(ganalytics);
        console.log(seriesTotalUsers);
        console.log(seriesEventCountPerUser);
       
        
                var seriesData = [];

        for (var i = 0; i < sectors.length; i++) {
        seriesData.push([
            sectors[i].name,
            sectors[i].data
        ]);
        }

        



        (function(H) {
            H.seriesTypes.pie.prototype.animate = function(init) {
                const series = this,
                    chart = series.chart,
                    points = series.points,
                    {
                        animation
                    } = series.options,
                    {
                        startAngleRad
                    } = series;

                function fanAnimate(point, startAngleRad) {
                    const graphic = point.graphic,
                        args = point.shapeArgs;

                    if (graphic && args) {

                        graphic
                            // Set inital animation values
                            .attr({
                                start: startAngleRad,
                                end: startAngleRad,
                                opacity: 1
                            })
                            // Animate to the final position
                            .animate({
                                start: args.start,
                                end: args.end
                            }, {
                                duration: animation.duration / points.length
                            }, function() {
                                // On complete, start animating the next point
                                if (points[point.index + 1]) {
                                    fanAnimate(points[point.index + 1], args.end);
                                }
                                // On the last point, fade in the data labels, then
                                // apply the inner size
                                if (point.index === series.points.length - 1) {
                                    series.dataLabelsGroup.animate({
                                            opacity: 1
                                        },
                                        void 0,
                                        function() {
                                            points.forEach(point => {
                                                point.opacity = 1;
                                            });
                                            series.update({
                                                enableMouseTracking: true
                                            }, false);
                                            chart.update({
                                                plotOptions: {
                                                    pie: {
                                                        innerSize: '40%',
                                                        borderRadius: 8
                                                    }
                                                }
                                            });
                                        });
                                }
                            });
                    }
                }

                if (init) {
                    // Hide points on init
                    points.forEach(point => {
                        point.opacity = 0;
                    });
                } else {
                    fanAnimate(points[0], startAngleRad);
                }
            };
        }(Highcharts));

        Highcharts.chart('container', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Newsletter Briefs'
            },
            subtitle: {
                text: 'Total Number'
            },
            tooltip: {
                headerFormat: '',
                pointFormat: '<span style="color:{point.color}">\u25cf</span> ' +
                    '{point.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    borderWidth: 2,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f}%',
                        distance: 20
                    }
                }
            },
            series: [{
                name: 'Briefs',
                colorByPoint: true,
                data: [{
                    name: 'Published <b>(' + published + ')</b>',
                    y: published,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Pending published <b>(' + pendingPublished + ')</b>',
                    y: pendingPublished
                }]
            }]
        }, function(chart) { // on complete
            if (chart.series.length < 1) { // check series is empty
                chart.renderer.text('No Data Available', 140, 120)
                    .css({
                        color: '#4572A7',
                        fontSize: '20px'
                    })
                    .add();
            }
        });

        /*
        Highcharts.chart('container', {
            chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
            },
            title: {
            text: 'Early Warning Briefs'
            },
            tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
            point: {
            valueSuffix: '%'
            }
            },
            plotOptions: {
            pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
            }
            },
            series: [{
            name: 'Briefs',
            colorByPoint: true,
            data: [{
            name: 'Published <b>(' + published +')</b>',
            y: published,
            sliced: true,
            selected: true
            },  {
            name: 'Pending published <b>(' + pendingPublished +')</b>',
            y: pendingPublished
            }]
            }]
            }, function(chart) { // on complete
      if (chart.series.length < 1) { // check series is empty
        chart.renderer.text('No Data Available', 140, 120)
          .css({
            color: '#4572A7',
            fontSize: '20px'
          })
          .add();
      }});

      */

        Highcharts.chart('subscribers', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Users'
            },
            subtitle: {
                text: '2025'
            },
            xAxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ],
                crosshair: true,
                accessibility: {
                    description: 'Months'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total Number aggregated by Role'
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Subscribers',
                    color: 'rgb(0,226,114)',
                    data: subscribers
                },
                {
                    name: 'Administrators',
                    color: 'rgb(254,106,53)',
                    data: admins
                }
            ]
        });

        // Set up the chart
const chart = new Highcharts.Chart({
    chart: {
        renderTo: 'subscriberssector',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            enabled: false
        }
    },
    tooltip: {
        headerFormat: '<b>{point.key}</b><br>',
        pointFormat: 'Users: {point.y}'
    },
    title: {
        text: 'Users Consolidated by Sector'
    },
    subtitle: {
        text: ''
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            depth: 25
        }
    },
    series: [{
        data: seriesData,
        colorByPoint: true
    }]
});

function showValues() {
    document.getElementById(
        'alpha-value'
    ).innerHTML = chart.options.chart.options3d.alpha;
    document.getElementById(
        'beta-value'
    ).innerHTML = chart.options.chart.options3d.beta;
    document.getElementById(
        'depth-value'
    ).innerHTML = chart.options.chart.options3d.depth;
}

// Activate the sliders
document.querySelectorAll(
    '#sliders input'
).forEach(input => input.addEventListener('input', e => {
    chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
    showValues();
    chart.redraw(false);
}));

showValues();

Highcharts.chart('ganalyticsnewsbriefs', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Briefs Uptake by User'
    },
    subtitle: {
        text: 'Source: Google Analytics'
    },
    xAxis: {
        categories: seriesCategory,
        title: {
            text: null
        },
        gridLineWidth: 1,
        lineWidth: 0
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        },
        gridLineWidth: 0
    },
    tooltip: {
        valueSuffix: ''
    },
    plotOptions: {
        bar: {
            borderRadius: '50%',
            dataLabels: {
                enabled: true
            },
            groupPadding: 0.1
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -60,
        y: 30,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Total Users',
        data: seriesTotalUsers
    }, {
        name: 'Event Count',
        data: seriesEventCountPerUser
    }],
    caption: {
        text: 'Total users: The total number of unique users who have viewed the briefs<br/>Event Count: The number of time users viewed the briefs'
  
    },
});
    </script>
</x-app-layout>
