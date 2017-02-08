<script src="<?php echo base_url(); ?>/themes/admin/plugins/highcharts.js"></script>
<script src="<?php echo base_url(); ?>/themes/admin/plugins/exporting.js"></script>
<section class="content-header">
    <h1>
        Dashboard
    </h1>
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-body">
                    <div class="col-xs-12">
                        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
</section>
<script>
    Highcharts.chart('container', {
    chart: {
        type: 'area',
        inverted: true
    },
    title: {
        text: 'Average fruit consumption during one week'
    },
    subtitle: {
        style: {
            position: 'absolute',
            right: '0px',
            bottom: '10px'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
    },
    xAxis: {
        categories: [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ]
    },
    yAxis: {
        title: {
            text: 'Number of units'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        },
        min: 0
    },
    plotOptions: {
        area: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'Petrol',
        data: [300, 400, 300, 500, 400, 1000, 1200]
    }, {
        name: 'Diesel',
        data: [800, 1000, 400, 1300, 1300, 500, 400]
    }, {
        name: 'Mobil',
        data: [10, 30, 40, 30, 30, 50, 40]
    }
     ]
});
</script>
