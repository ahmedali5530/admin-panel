//search plugin
$(document).on('click','.search',function(e){
    e.preventDefault();
    var search_field = $(this).data('search-field');
    $(search_field).toggleClass('hidden');
    $(search_field).children('input').focus();
});

$(document).on('keyup','.table-search',function(e){
    e.preventDefault();
    if(e.keyCode == 27){
        $('.search').trigger('click');
    }
    var search_table = $(this).data('search-table');

    var searchTerm = $(this).val();

    var listItem = $(search_table+' tbody').children('tr');

    var searchSplit = searchTerm.replace(/ /g, "'):containsi('");

    $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
            return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
    });

    $(search_table+" tbody tr").not(":containsi('" + searchSplit + "')").each(function(ev){
        $(this).attr('visible','false');
    });

    $(search_table+" tbody tr:containsi('" + searchSplit + "')").each(function(ev){
        $(this).attr('visible','true');
    });
});

//tooltip settings 
$('.tip').tooltip();

//quick search shortcut
Mousetrap.bind('/',function(e){
    e.preventDefault();
    $('.search').trigger('click');
});

//table js hover
$(document).on('mouseover','.table-js-hover tr',function(e){
    $(this).parent().find('tr').removeClass('bg-grey');
    $(this).addClass('bg-grey');
});

//material ripple
$('.ripple').on('mousedown', function(e) {
  var $ripple = $('<div class="ripple-effect"></div>');
  var posX = e.pageX - $(this).offset().left - 5;
  var posY = e.pageY - $(this).offset().top - 5;
  var color = $(this).data('ripple-color') || $(this).css('color');
  var opacity = $(this).data('ripple-opacity') || 0.4;
  $ripple.css('top', posY+'px')
    .css('left', posX+'px')
    .css('opacity', opacity)
    .css('background', color);
  
  $(this).append($ripple);
  setTimeout(function(){$ripple.remove()}, 700);
});

$(document).on('click','.ljax',function(e){
    e.preventDefault();
    var link = $(this).attr('href'),
        dataLink = $(this).data('link'),
        beforeCallback = $(this).data('before-callback'),
        afterCallback = $(this).data('after-callback'),
        redirect = $(this).data('redirect'),
        refresh = $(this).data('refresh'),
        target = $(this).attr('target'),
        targetElement = $(this).data('target-element');
});

$(document).on('focusin change blur','.form-control',function(e){
    e.preventDefault();
    var label = $(this).prev('label'),
        input = $(this);
    
    if($.trim(input.val()) == ''){
        label.addClass('label-float');
    }else{
        
    }
}).on('focusout change blur','.form-control',function(e){
    //e.preventDefault();
    var label = $(this).prev('label'),
        input = $(this);
    //label.removeAttr('style');
    if($.trim(input.val()) == ''){
        label.removeClass('label-float');
    }
});

$(document).ready(function(){
  adjustWidth();
});

var adjustWidth = function(){
    var tabs = $('.adjust-width ul li');
    var totalTabs = tabs.length;
    tabs.each(function(i, t){
        $(t).css('width',100/totalTabs+'%');
    });
}

//toast
var toastTimeout;
var showToast = function(text, icon, closeOnClick){
    //find the toast
    var toast = $('body').find('.toast');
    if(toast.hasClass('shown')){
        hideToast();
    }else{
        toast.addClass('shown').css({display : 'block'}).animate({bottom : '15px'}, 100);
        if(typeof text !== 'undefined'){
            toast.children('.toast-text').html(text);
        }

        if(typeof icon !== 'undefined'){
            toast.children('.toast-icon').html(icon);
        }
    }

    //set click on close handler
    if(closeOnClick === true){
        toast.on('click', function(){
            hideToast();
        })
    }else if(closeOnClick === false){
      
        toastTimeout = setTimeout(function(){
            hideToast();
        }, 3000);
    }else{

    }
}



var hideToast = function(){
    clearTimeout(toastTimeout);
    $('body').find('.toast').removeClass('shown').animate({bottom : '-100px'}, 100);
}

//chart settings
 var chart;

var chartData = [
    {
        "country": "USA",
        "visits": 4025
    },
    {
        "country": "China",
        "visits": 1882
    },
    {
        "country": "Japan",
        "visits": 1809
    },
    {
        "country": "Germany",
        "visits": 1322
    },
    {
        "country": "UK",
        "visits": 1122
    },
    {
        "country": "France",
        "visits": 1114
    },
    {
        "country": "India",
        "visits": 984
    },
    {
        "country": "Spain",
        "visits": 711
    },
    {
        "country": "Netherlands",
        "visits": 665
    },
    {
        "country": "Russia",
        "visits": 580
    },
    {
        "country": "South Korea",
        "visits": 443
    },
    {
        "country": "Canada",
        "visits": 441
    },
    {
        "country": "Brazil",
        "visits": 395
    },
    {
        "country": "Italy",
        "visits": 386
    },
    {
        "country": "Australia",
        "visits": 384
    },
    {
        "country": "Taiwan",
        "visits": 338
    },
    {
        "country": "Poland",
        "visits": 328
    }
];


AmCharts.ready(function () {
    // SERIAL CHART
    chart = new AmCharts.AmSerialChart();
    chart.dataProvider = chartData;
    chart.categoryField = "country";
    chart.startDuration = 1;

    // AXES
    // category
    var categoryAxis = chart.categoryAxis;
    categoryAxis.labelRotation = 90;
    categoryAxis.gridPosition = "start";

    // value
    // in case you don't want to change default settings of value axis,
    // you don't need to create it, as one value axis is created automatically.

    // GRAPH
    var graph = new AmCharts.AmGraph();
    graph.valueField = "visits";
    graph.balloonText = "[[category]]: <b>[[value]]</b>";
    graph.type = "column";
    graph.lineAlpha = 0;
    graph.fillAlphas = 0.8;
    chart.addGraph(graph);

    // CURSOR
    var chartCursor = new AmCharts.ChartCursor();
    chartCursor.cursorAlpha = 0;
    chartCursor.zoomable = false;
    chartCursor.categoryBalloonEnabled = false;
    chart.addChartCursor(chartCursor);

    chart.creditsPosition = "top-right";

    chart.write("barchart");
});


///pie chart
var pchart;
var legend;

var pchartData = [{
    country: "Czech Republic",
    litres: 301.90
}, {
    country: "Ireland",
    litres: 201.10
}, {
    country: "Germany",
    litres: 165.80
}, {
    country: "Australia",
    litres: 139.90
}, {
    country: "Austria",
    litres: 128.30
}, {
    country: "UK",
    litres: 99.00
}, {
    country: "Belgium",
    litres: 60.00
}];

AmCharts.ready(function () {
    // PIE CHART
    pchart = new AmCharts.AmPieChart();
    pchart.dataProvider = pchartData;
    pchart.titleField = "";
    pchart.valueField = "litres";
    pchart.outlineColor = "#FFFFFF";
    pchart.outlineAlpha = 0.8;
    pchart.outlineThickness = 2;

    // WRITE
    pchart.write("piechart");
});