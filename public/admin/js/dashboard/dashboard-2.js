
(function($) {
  "use strict"

  $('#ticket-sold-circle').circleProgress({
    // startAngle: -Math.PI / 4 * 3,
    thickness: '5',
    value: 0.75,
    size: 200,
    lineCap: 'round',
    fill: { color: 'rgba(70, 199, 158,1)' },
    reverse: false
});

$('#attend_event_1').circleProgress({
    // startAngle: -Math.PI / 4 * 3,
    thickness: '7',
    value: 0.3,
    size: 145,
    lineCap: 'round',
    fill: { color: 'rgba(105, 27, 204,1)' },
    reverse: false
});
$('#attend_event_2').circleProgress({
    // startAngle: -Math.PI / 4 * 3,
    thickness: '7',
    value: 0.5,
    size: 145,
    lineCap: 'round',
    fill: { color: 'rgba(40, 199, 111,1)' },
    reverse: false
});
$('#attend_event_3').circleProgress({
    // startAngle: -Math.PI / 4 * 3,
    thickness: '7',
    value: 0.8,
    size: 145,
    lineCap: 'round',
    fill: { color: 'rgba(61, 68, 101,1)' },
    reverse: false
});

     var activity = document.getElementById("activity");
     if (activity !== null) {
     var activityData = [
         {
         first: [0, 65, 52, 115, 98, 165, 125],
        //  second: [40, 105, 92, 155, 138, 205, 165],
        //  third: [115, 98, 165, 125, 138, 205, 165],
         },
         {
        //  first: [0, 65, 77, 33, 49, 100, 100],
         second: [20, 85, 97, 53, 69, 120, 120]
         },
         {
          third: [115, 98, 165, 125, 138, 205, 165],
         }
     ];

     activity.height = 100;

     var config = {
         type: "line",
         data: {
         labels: [
             "4 Jan",
             "5 Jan",
             "6 Jan",
             "7 Jan",
             "8 Jan",
             "9 Jan",
             "10 Jan"
         ],
         datasets: [
             {
                 label: "Discount Code",
                 backgroundColor: "rgba(102, 150, 254, 0.4)",
                 borderColor: "rgba(102, 150, 254, 1)",
                 data: activityData[0].first,
                //  lineTension: 0,
                //  borderDash: [10, 5],
                 pointRadius: 0,
                 borderWidth: 2,
             },
             {
                 label: "Page Views",
                 backgroundColor: "rgba(102, 150, 254, 0.4)",
                 borderColor: "rgba(102, 150, 254, 1)",
                 data: activityData[0].second,
                //  lineTension: 0,
                //  borderDash: [10, 5],
                 borderWidth: 2,
                 pointRadius: 0,
             },
             {
                 label: "Door Sale",
                 backgroundColor: "rgba(102, 150, 254, 0.4)",
                 borderColor: "rgba(102, 150, 254, 1)",
                 data: activityData[0].third,
                //  lineTension: 0,
                //  borderDash: [10, 5],
                 borderWidth: 2,
                 pointRadius: 0,
             }
         ]
         },
         options: {
         responsive: true,
         maintainAspectRatio: false,
         legend: {
             display: false
         },
         scales: {
             xAxes: [{
                 gridLines: {
                     display: false,
                     drawBorder: true
                 },
                 ticks: {
                 fontColor: "#8a909d", 
                 },
             }
             ],
             yAxes: [
             {
                 gridLines: {
                 fontColor: "#8a909d",
                 fontFamily: "Nunito, sans-serif",
                 display: true,
                 color: "rgba(0,0,0,0.08)",
                 zeroLineColor: "rgba(0,0,0,0.08)"
                 },
                 ticks: {
                 stepSize: 50,
                 fontColor: "#8a909d",
                 fontFamily: "Nunito, sans-serif"
                 }
             }
             ]
         },
         tooltips: {
            display: false,
             mode: "index",
             intersect: false,
             titleFontColor: "#fff",
             bodyFontColor: "#fff",
             titleFontSize: 12,
             bodyFontSize: 15,
             backgroundColor: "rgba(106, 28, 205, 1)",
             displayColors: true,
             xPadding: 10,
             yPadding: 7,
             borderColor: "rgba(106, 28, 205, 1)",
             borderWidth: 2,
             caretSize: 6,
             caretPadding: 5
         }
         }
     };

     var ctx = document.getElementById("activity").getContext("2d");
     var myLine = new Chart(ctx, config);

     var items = document.querySelectorAll("#user-activity .nav-tabs .nav-item");
     items.forEach(function (item, index) {
         item.addEventListener("click", function () {
         config.data.datasets[0].data = activityData[index].first;
         config.data.datasets[1].data = activityData[index].second;
         config.data.datasets[2].data = activityData[index].third;
         myLine.update();
         });
     });
     }

 

     const chart_netsales = document.getElementById("chart_netsales").getContext('2d');

    new Chart(chart_netsales, {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: "Sales Stats",
                backgroundColor: "rgba(253, 81, 144, .2)",
                borderColor: 'rgba(253, 81, 144, 1)',
                borderWidth: 2,
                lineTension: 0,
	            pointRadius: 4,
                pointBorderWidth: 2,
                pointBackgroundColor: '#fff',
                pointBorderColor: 'rgba(253, 81, 144, 1)',
                pointHoverBackgroundColor: 'rgba(253, 81, 144, 1)',
                pointHoverBorderColor: 'rgba(253, 81, 144, 1)',
                data: [0, 18, 14, 24, 16, 30]
            }]
        },
        options: {
            title: {
                display: !1
            },
            tooltips: {
                intersect: !1,
                mode: "nearest",
                xPadding: 5,
                yPadding: 5,
                caretPadding: 5
            },
            legend: {
                display: !1
            },
            responsive: !0,
            maintainAspectRatio: !1,
            hover: {
                mode: "index"
            },
            scales: {
                xAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Month"
                    }, 
                    ticks: {
                        max: 30, 
                        min: 0
                    }
                }],
                yAxes: [{
                    display: !1,
                    gridLines: !1,
                    scaleLabel: {
                        display: !0,
                        labelString: "Value"
                    },
                    ticks: {
                        beginAtZero: !0
                    }
                }]
            },
            elements: {
                // line: {
                //     tension: 0.2
                // },
                // point: {
                //     radius: 0,
                //     borderWidth: 0
                // }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }
        }
    });


    const areaChart_3 = document.getElementById("areaChart_3").getContext('2d');
    
     areaChart_3.height = 100;
 
     new Chart(areaChart_3, {
         type: 'line',
         data: {
             defaultFontFamily: 'Poppins',
             labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
             datasets: [
                 {
                    label: "Click",
                    data: [25, 20, 60, 41, 66, 45, 80],
                    borderColor: 'rgba(105, 27, 204, 1)',
                    borderWidth: 2,
                    backgroundColor: 'rgba(105, 27, 204, .5)',
                    lineTension: 0,
                    pointRadius: 0,
                    // pointBackgroundColor: "rgba(255,255,255,1)",
                    // pointHoverBackgroundColor: "rgba(255,255,255,1)",
                    // pointBorderWidth: 2,
                    // pointHoverRadius: 8,
                    // pointHoverBorderWidth: 1
                 }, 
                //  {
                //     label: "Bounse Rate",
                //     data: [35, 25, 80, 51, 86, 55, 70],
                //     borderColor: 'rgba(253, 81, 144, .8)',
                //     borderWidth: "3",
                //     backgroundColor: 'rgba(253, 81, 144, .8)',
                //     lineTension: 0,
                //     pointRadius: 0,
                //     // pointBackgroundColor: "rgba(255,255,255,1)",
                //     // pointHoverBackgroundColor: "rgba(255,255,255,1)",
                //     // pointBorderWidth: 2,
                //     // pointHoverRadius: 8,
                //     // pointHoverBorderWidth: 1
                //  }
             ]
         },
         options: {
             legend: false, 
             scales: {
                 yAxes: [{
                    display: !1,
                    
                        gridLines: {
                          display: true,
                          color: "#eee",
                          zeroLineColor: "#eee",
                        },
                     ticks: {
                         beginAtZero: true, 
                         max: 100, 
                         min: 0, 
                         stepSize: 20, 
                         padding: 10
                     }
                 }],
                 xAxes: [{ 
                    display: !1,
                    gridLines: {
                        display: false,
                        color: "transparent",
                        zeroLineColor: "transparent",
                      },
                     ticks: {
                         padding: 5,
                         beginAtZero: false, 
                     }
                 }]
             }
         }
     });

     const chart_invites = document.getElementById("chart_invites").getContext('2d');

     new Chart(chart_invites, {
         type: "line",
         data: {
             labels: ["January", "February", "March", "April", "May", "June"],
             datasets: [{
                 label: "Sales Stats",
                 backgroundColor: "rgba(70, 199, 158, .2)",
                 borderColor: 'rgba(70, 199, 158, 1)',
                 borderWidth: 2,
                 lineTension: 0,
                 pointRadius: 4,
                 pointBorderWidth: 2,
                 pointBackgroundColor: '#fff',
                 pointBorderColor: 'rgba(70, 199, 158, 1)',
                 pointHoverBackgroundColor: 'rgba(70, 199, 158, 1)',
                 pointHoverBorderColor: 'rgba(70, 199, 158, 1)',
                 data: [0, 18, 14, 24, 16, 30]
             }]
         },
         options: {
             title: {
                 display: !1
             },
             tooltips: {
                 intersect: !1,
                 mode: "nearest",
                 xPadding: 5,
                 yPadding: 5,
                 caretPadding: 5
             },
             legend: {
                 display: !1
             },
             responsive: !0,
             maintainAspectRatio: !1,
             hover: {
                 mode: "index"
             },
             scales: {
                 xAxes: [{
                     display: !1,
                     gridLines: !1,
                     scaleLabel: {
                         display: !0,
                         labelString: "Month"
                     }, 
                     ticks: {
                         max: 30, 
                         min: 0
                     }
                 }],
                 yAxes: [{
                     display: !1,
                     gridLines: !1,
                     scaleLabel: {
                         display: !0,
                         labelString: "Value"
                     },
                     ticks: {
                         beginAtZero: !0
                     }
                 }]
             },
             elements: {
                 // line: {
                 //     tension: 0.2
                 // },
                 // point: {
                 //     radius: 0,
                 //     borderWidth: 0
                 // }
             },
             layout: {
                 padding: {
                     left: 0,
                     right: 0,
                     top: 0,
                     bottom: 0
                 }
             }
         }
     });
  


})(jQuery);



