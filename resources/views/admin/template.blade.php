<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>.: @yield('tittle','Admin Store') :.</title>

  <!-- Bootstrap core CSS -->


  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('admin/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/css/animate.min.css') }}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/maps/jquery-jvectormap-2.0.3.css') }}" />
  <link href="{{ asset('admin/css/icheck/flat/green.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/css/floatexamples.css') }}" rel="stylesheet" type="text/css" />

  <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

  <!--TABLAS-->

  <link href="{{ asset('admin/js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/js/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/js/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/js/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('admin/js/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!--JQUERY-->
  <script
  src="https://code.jquery.com/jquery-1.11.3.min.js"
  integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
  crossorigin="anonymous"></script>

  <!--Datepicker bootsrap 1.6.4 en fuscar facturas por fecha-->
  
  <link href="{{ asset('botstrapdatepicker1.6.4/css/bootstrap-datepicker3.css') }}" rel="stylesheet">
  <link href="{{ asset('botstrapdatepicker1.6.4/css/bootstrap-datepicker3-standalone.css') }}" rel="stylesheet">
  <script src="{{ asset('botstrapdatepicker1.6.4/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('botstrapdatepicker1.6.4/locales/bootstrap-datepicker.es.min.js') }}"></script>


  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        </head>


        <body class="nav-md" onload="back()" oncontextmenu="return false" >

          <div class="container body">
            @if (Session::has('flash_message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ Session::get('flash_message') }}
            </div>
            @endif

            <div class="main_container">
              <!--Roles-->
              
              @if (Auth::user()->rol===1)
              @include('admin.partials.navAdmin')
              @elseif (Auth::user()->rol===3)
              @include('admin.partials.navDesp')
              @elseif (Auth::user()->rol===4)
              @include('admin.partials.navBod')
              @elseif (Auth::user()->rol===5)
              @include('admin.partials.vavCaj')
              @endif

              @include('admin.partials.messages')  
                      
              @yield('content')        
              <!--@include('admin.partials.footer')  @include('admin.partials.content')-->
            </div>

          </div>

          <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
          </div>

          <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
          <!-- form wizard -->
          <script type="text/javascript" src="{{ asset('admin/js/wizard/jquery.smartWizard.js') }}"></script>

          <!-- gauge js -->
          <script type="text/javascript" src="{{ asset('admin/js/gauge/gauge.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/gauge/gauge_demo.js') }}"></script>
          <!-- bootstrap progress js -->
          <script src="{{ asset('admin/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
          <!-- icheck -->
          <script src="{{ asset('js/icheck/icheck.min.js') }}"></script>
          <!-- daterangepicker -->
          <script type="text/javascript" src="{{ asset('admin/js/moment/moment.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/datepicker/daterangepicker.js') }}"></script>
          <!-- chart js -->
          <script src="{{ asset('admin/js/chartjs/chart.min.js') }}"></script>

          <script src="{{ asset('admin/js/custom.js') }}"></script>

          <!-- flot js -->
          <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
          <script type="text/javascript" src="{{ asset('admin/js/flot/jquery.flot.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/jquery.flot.pie.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/jquery.flot.orderBars.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/jquery.flot.time.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/date.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/jquery.flot.spline.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/jquery.flot.stack.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/curvedLines.js') }}"></script>
          <script type="text/javascript" src="{{ asset('admin/js/flot/jquery.flot.resize.js') }}"></script>

          <script>
            $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
      [gd(2012, 1, 1), 17],
      [gd(2012, 1, 2), 74],
      [gd(2012, 1, 3), 6],
      [gd(2012, 1, 4), 39],
      [gd(2012, 1, 5), 20],
      [gd(2012, 1, 6), 85],
      [gd(2012, 1, 7), 7]
      ];

      var data2 = [
      [gd(2012, 1, 1), 82],
      [gd(2012, 1, 2), 23],
      [gd(2012, 1, 3), 66],
      [gd(2012, 1, 4), 9],
      [gd(2012, 1, 5), 119],
      [gd(2012, 1, 6), 6],
      [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type="text/javascript" src="{{ asset('admin/js/maps/jquery-jvectormap-2.0.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/maps/gdp-data.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script type="text/javascript" src="{{ asset('admin/js/maps/jquery-jvectormap-us-aea-en.js') }}"></script>
  <!-- pace -->
  <script src="{{ asset('admin/js/pace/pace.min.js') }}"></script>
  <script>
    $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src="{{ asset('admin/js/skycons/skycons.min.js') }}"></script>
  <script>
    var icons = new Skycons({
      "color": "#73879C"
    }),
    list = [
    "clear-day", "clear-night", "partly-cloudy-day",
    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
    "fog"
    ],
    i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    var data = {
      labels: [
      "Symbian",
      "Blackberry",
      "Other",
      "Android",
      "IOS"
      ],
      datasets: [{
        data: [15, 20, 30, 10, 30],
        backgroundColor: [
        "#BDC3C7",
        "#9B59B6",
        "#455C73",
        "#26B99A",
        "#3498DB"
        ],
        hoverBackgroundColor: [
        "#CFD4D8",
        "#B370CF",
        "#34495E",
        "#36CAAB",
        "#49A9EA"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  <!-- /datepicker -->
  <!-- /footer content -->


  <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="{{ asset('admin/js/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/responsive.bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/js/datatables/dataTables.scroller.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/js/datepicker/daterangepicker.js') }}"></script>


        <!-- datepicker -->
        <script type="text/javascript">
          $(document).ready(function() {

            var cb = function(start, end, label) {
              console.log(start.toISOString(), end.toISOString(), label);
              $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'right',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };

      $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

      $('#reportrange_right').daterangepicker(optionSet1, cb);

      $('#reportrange_right').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange_right').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });

      $('#options1').click(function() {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
      });

      $('#options2').click(function() {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
      });

      $('#destroy').click(function() {
        $('#reportrange_right').data('daterangepicker').remove();
      });

    });
  </script>
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <!-- /datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#single_cal1').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_1"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal3').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal4').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_4"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#reservation').daterangepicker(null, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <!-- /datepicker -->

  <!-- pace -->
  <script src="{{ asset('admin/js/pace/pace.min.js') }}"></script>
  <script>
    var handleDataTableButtons = function() {
      "use strict";
      0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
        dom: "Bfrtip",
        buttons: [{
          extend: "copy",
          className: "btn-sm"
        }, {
          extend: "csv",
          className: "btn-sm"
        }, {
          extend: "excel",
          className: "btn-sm"
        }, {
          extend: "pdf",
          className: "btn-sm"
        }, {
          extend: "print",
          className: "btn-sm"
        }],
        responsive: !0
      })
    },
    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons()
        }
      }
    }();
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').dataTable();
      $('#datatable-keytable').DataTable({
        keys: true
      });
      $('#datatable-responsive').DataTable();
      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });
      var table = $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });
    });
    TableManageButtons.init();
  </script>


  

</body>

</html>
