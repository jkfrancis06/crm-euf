//alert('ok');
var posting_bs;
var posting_su;
var posting_modem;
var posting_trafic;
var posting_charge;
var base_url = window.location.origin+"/tns/index.php/dashboard/graph";
var graph_url = window.location.origin+"/tns/index.php/dashboard/traficgraph";
var graph_bs = window.location.origin+"/tns/index.php/dashboard/getBSStatus";
var myChart = echarts.init(document.getElementById('echart_guage'), theme);
var myChart2 = echarts.init(document.getElementById('echart_guage2'), theme);
var myChart3 = echarts.init(document.getElementById('echart_guage3'), theme);

setInterval(function()
{ 
    if(posting_bs && posting_bs.readyState !=0){
        
    }else{
        drawBS(base_url,posting_bs);
    }
    if(posting_su && posting_su.readyState !=0){
        
    }else{
        drawSU(base_url,posting_su);
    }
    if(posting_modem && posting_modem.readyState !=0){
        
    }else{
        drawModem(base_url,posting_modem);
    }
 
}, 3000);
 
setInterval(function(){
    if(posting_trafic && posting_trafic.readyState !=0){
        
    }else{
        drawCore(graph_url,posting_trafic);
    }
    
}, 12000);

drawBSstate(graph_bs,posting_charge);



function drawModem(url){
    posting_modem = $.post( url, {key:3});
    posting_modem.readyState;
    posting_modem.done(function(data){
        hbs_active = data;
        $("#loader_modem").hide();
        //document.getElementById("loader_modem").style.display = "none";
        myChart3.setOption({
          tooltip: {
            formatter: "{a} <br/>{b} : {c}%"
          },
          toolbox: {
            show: false,
            feature: {
              restore: {
                show: true
              },
              saveAsImage: {
                show: true
              }
            }
          },
          series: [{
            name: 'Performance',
            type: 'gauge',
            center: ['50%', '50%'],
            radius: [0, '75%'],
            startAngle: 140,
            endAngle: -140,
            min: 0,
            max: 100,
            precision: 0,
            splitNumber: 10,
            axisLine: {
              show: true,
              lineStyle: {
                color: [
                  [0.2, '#ff4500'],
                  [0.4, 'orange'],
                  [0.8, 'skyblue'],
                  [1, 'lightgreen']
                ],
                width: 30
              }
            },
            axisTick: {
              show: true,
              splitNumber: 5,
              length: 8,
              lineStyle: {
                color: '#eee',
                width: 1,
                type: 'solid'
              }
            },
            axisLabel: {
              show: true,
              formatter: function(v) {
                switch (v + '') {
                  case '10':
                    return '';
                  case '30':
                    return '';
                  case '60':
                    return '';
                  case '90':
                    return '';
                  default:
                    return '';
                }
              },
              textStyle: {
                color: '#333'
              }
            },
            splitLine: {
              show: true,
              length: 30,
              lineStyle: {
                color: '#eee',
                width: 2,
                type: 'solid'
              }
            },
            pointer: {
              length: '80%',
              width: 8,
              color: 'auto'
            },
            title: {
              show: true,
              offsetCenter: ['-65%', -10],
              textStyle: {
                color: '#333',
                fontSize: 15
              }
            },
            detail: {
              show: true,
              backgroundColor: 'rgba(0,0,0,0)',
              borderWidth: 0,
              borderColor: '#ccc',
              width: 100,
              height: 40,
              offsetCenter: ['-80%', 10],
              formatter: '{value}%',
              textStyle: {
                color: 'auto',
                fontSize: 30
              }
            },
            data: [{
              value: hbs_active,
              name: 'Modems connectés'
            }]
          }]
        });
    });
}

function drawSU(url){
    posting_su = $.post(url, {key:2});
    ok_su = posting_su.readyState;
    posting_su.done(function(data){
        hbs_active = data;
        $("#loader_su").hide();
        //document.getElementById("loader_su").style.display = "none";
        myChart2.setOption({
          tooltip: {
            formatter: "{a} <br/>{b} : {c}%"
          },
          toolbox: {
            show: false,
            feature: {
              restore: {
                show: true
              },
              saveAsImage: {
                show: true
              }
            }
          },
          series: [{
            name: 'Performance',
            type: 'gauge',
            center: ['50%', '50%'],
            radius: [0, '75%'],
            startAngle: 140,
            endAngle: -140,
            min: 0,
            max: 100,
            precision: 0,
            splitNumber: 10,
            axisLine: {
              show: true,
              lineStyle: {
                color: [
                  [0.2, '#ff4500'],
                  [0.4, 'orange'],
                  [0.8, 'skyblue'],
                  [1, 'lightgreen']
                ],
                width: 30
              }
            },
            axisTick: {
              show: true,
              splitNumber: 5,
              length: 8,
              lineStyle: {
                color: '#eee',
                width: 1,
                type: 'solid'
              }
            },
            axisLabel: {
              show: true,
              formatter: function(v) {
                switch (v + '') {
                  case '10':
                    return '';
                  case '30':
                    return '';
                  case '60':
                    return '';
                  case '90':
                    return '';
                  default:
                    return '';
                }
              },
              textStyle: {
                color: '#333'
              }
            },
            splitLine: {
              show: true,
              length: 30,
              lineStyle: {
                color: '#eee',
                width: 2,
                type: 'solid'
              }
            },
            pointer: {
              length: '80%',
              width: 8,
              color: 'auto'
            },
            title: {
              show: true,
              offsetCenter: ['-65%', -10],
              textStyle: {
                color: '#333',
                fontSize: 15
              }
            },
            detail: {
              show: true,
              backgroundColor: 'rgba(0,0,0,0)',
              borderWidth: 0,
              borderColor: '#ccc',
              width: 100,
              height: 40,
              offsetCenter: ['-80%', 10],
              formatter: '{value}%',
              textStyle: {
                color: 'auto',
                fontSize: 30
              }
            },
            data: [{
              value: hbs_active,
              name: 'HSU actives'
            }]
          }]
        });


    });
}

function drawBS(url){
    var posting_bs = $.post( url, {key:1});
    ok_bs = posting_bs.readyState;
    posting_bs.done(function(data){
        ok_bs = posting_bs.readyState;
        hbs_active = data;
        $("#loader_bs").hide();
       // document.getElementById("loader_bs").style.display = "none";
        myChart.setOption({
        tooltip: {
          formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
          show: false,
          feature: {
            restore: {
              show: true
            },
            saveAsImage: {
              show: true
            }
          }
        },
        series: [{
          name: 'Performance',
          type: 'gauge',
          center: ['50%', '50%'],
          radius: [0, '75%'],
          startAngle: 140,
          endAngle: -140,
          min: 0,
          max: 100,
          precision: 0,
          splitNumber: 10,
          axisLine: {
            show: true,
            lineStyle: {
              color: [
                [0.2, '#ff4500'],
                [0.4, 'orange'],
                [0.8, 'skyblue'],
                [1, 'lightgreen']
              ],
              width: 30
            }
          },
          axisTick: {
            show: true,
            splitNumber: 5,
            length: 8,
            lineStyle: {
              color: '#eee',
              width: 1,
              type: 'solid'
            }
          },
          axisLabel: {
            show: true,
            formatter: function(v) {
              switch (v + '') {
                case '10':
                  return '';
                case '30':
                  return '';
                case '60':
                  return '';
                case '90':
                  return '';
                default:
                  return '';
              }
            },
            textStyle: {
              color: '#333'
            }
          },
          splitLine: {
            show: true,
            length: 30,
            lineStyle: {
              color: '#eee',
              width: 2,
              type: 'solid'
            }
          },
          pointer: {
            length: '80%',
            width: 8,
            color: 'auto'
          },
          title: {
            show: true,
            offsetCenter: ['-65%', -10],
            textStyle: {
              color: '#333',
              fontSize: 15
            }
          },
          detail: {
            show: true,
            backgroundColor: 'rgba(0,0,0,0)',
            borderWidth: 0,
            borderColor: '#ccc',
            width: 100,
            height: 40,
            offsetCenter: ['-80%', 10],
            formatter: '{value}%',
            textStyle: {
              color: 'auto',
              fontSize: 30
            }
          },
          data: [{
            value: hbs_active,
            name: 'HBS actives'
          }]
        }]
      });
    });
}

function drawBSstate(url){
    var trafic_charge;
    posting_charge = $.post(url);
    posting_charge.readyState;
    posting_charge.done(function(d){
        trafic_charge = d;
        $("#loader_charge").hide();
        //document.getElementById("loader_charge").style.display = "none";
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable(trafic_charge);

            var options = {
              chart: {
                title: 'Top 10 des BS les plus chargés',
                //subtitle: 'Nombre de SU connectés',
              },
              bars: 'horizontal' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, options);
        }

    });
}

//function drawCore(url,posting_trafic){
//    var trafic_int;
//
//    posting_trafic = $.post(url);
//    posting_trafic.readyState;
//    posting_trafic.done(function(d){
//        trafic_int = d;
//        $("#loader").hide();
//        //document.getElementById("loader").style.display = "none";
//        google.charts.load('current', {'packages':['corechart']});
//        google.charts.setOnLoadCallback(drawChart);
//        function drawChart() {
//            var data = google.visualization.arrayToDataTable(trafic_int);
//
//            var options = {
//              title: 'Perfomance de bande passante au Coeur réseaux (Mbps)',
//              hAxis: {title: 'Heure',  titleTextStyle: {color: '#333'}},
//              vAxis: {minValue: 0}
//            };
//
//            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
//            chart.draw(data, options);
//        }
//    });
//    return posting_trafic;
//}
//    


