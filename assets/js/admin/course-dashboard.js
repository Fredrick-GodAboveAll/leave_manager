'use strict';
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(function () {
    floatchart();
  }, 500);
  if (!!document.querySelector('.user-scroll')) {
    new SimpleBar(document.querySelector('.user-scroll'));
  }
  if (!!document.querySelector('.feed-scroll')) {
    new SimpleBar(document.querySelector('.feed-scroll'));
  }
  const datepicker_inline = new Datepicker(document.querySelector('#pc-datepicker-6'), {
    buttonClass: 'btn'
  });

});

function floatchart() {
  (function () {


    var options = {
      chart: {
        type: 'area',
        height: 250,
        toolbar: {
          show: false
        }
      },
      colors: ['#faad14', '#1677ff'],
      dataLabels: {
        enabled: false
      },
      legend: {
        show: true,
        position: 'top'
      },
      markers: {
        size: 1,
        colors: ['#fff', '#fff', '#fff'],
        strokeColors: ['#faad14', '#1677ff'],
        strokeWidth: 1,
        shape: 'circle',
        hover: {
          size: 4
        }
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          type: 'vertical',
          inverseColors: false,
          opacityFrom: 0.5,
          opacityTo: 0
        }
      },
      grid: {
        show: false
      },
      series: [
        {
          name: 'Revenue',
          data: [200, 320, 320, 275, 275, 400, 400, 300, 440, 320, 320, 275, 275, 400, 300, 440]
        },
        {
          name: 'Sales',
          data: [200, 250, 240, 300, 340, 320, 320, 400, 350, 250, 240, 300, 340, 320, 400, 350]
        }
      ],
      xaxis: {
        tooltip: {
          enabled: false
        },
        labels: {
          hideOverlappingLabels: true
        },
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        }
      }
    };
    var chart = new ApexCharts(document.querySelector('#revenue-sales-chart'), options);
    chart.render();


    var invites_goal_chart_option = {
      series: [76],
      chart: {
        type: 'radialBar',
        offsetY: -20,
        sparkline: {
          enabled: true
        }
      },
      colors: ['#1677ff'],
      plotOptions: {
        radialBar: {
          startAngle: -95,
          endAngle: 95,
          hollow: {
            margin: 15,
            size: '50%'
          },
          track: {
            background: '#eaeaea',
            strokeWidth: '97%',
            margin: 20
          },
          dataLabels: {
            name: {
              show: false
            },
            value: {
              offsetY: 0,
              fontSize: '20px'
            }
          }
        }
      },
      grid: {
        padding: {
          top: 10
        }
      },
      stroke: {
        lineCap: 'round'
      },
      labels: ['Average Results']
    };
    var chart = new ApexCharts(document.querySelector('#invites-goal-chart'), invites_goal_chart_option);
    chart.render();


    

    var visitors_bar_chart_options = {
      chart: {
        type: 'bar',
        height: 220,
        toolbar: {
          show: false
        }
      },
      colors: ['#52c41a'],
      dataLabels: {
        enabled: false
      },
      grid: {
        strokeDashArray: 4
      },
      yaxis: {
        tickAmount: 3
      },
      states: {
        normal: {
          filter: {
            type: 'lighten',
            value: 0.5
          }
        },
        hover: {
          filter: {
            type: 'lighten',
            value: 0
          }
        }
      },
      plotOptions: {
        bar: {
          borderRadius: 2,
          columnWidth: '50%'
        }
      },
      labels: ['2018', '2019', '2020', '2021', '2022', '2023'],
      series: [
        {
          data: [20, 15, 22, 25, 32, 50]
        }
      ]
    };
    var chart = new ApexCharts(document.querySelector('#visitors-bar-chart'), visitors_bar_chart_options);
    chart.render();

    
  })();
}
