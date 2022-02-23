<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HighChart</title>
</head>
<body>
    <div id="chart-container"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/9.3.2/highcharts.js"></script>
    
    <script>
        var datas = <?php echo json_encode($datas)?>

        Highcharts.chart('chart-container',{
            title:{
                text:'Released Kilimanjaro'
            },
            subtitle:{
                text:'Source: TBL QMS Software'
            },
            xAxis:{
                categories:['January','February','March','April','May','June','July','August','September','October','November','December']
            },
            yAxis:{
                title:{
                    text:'Number of released Kilimanjaro'
                },
                legend:{
                    layout:'vertical',
                    align:'right',
                    verticalAlign:'middle'
                },
                plotOptions:{
                    series:{
                        allowPointSelect:true
                    }
                },
                series:[{
                    name:'New Kili',
                    data:datas
                }],
                responsive:{
                    rules:[
                        {
                          condition:{
                              maxWidth:500
                          },
                          chartOptions:{
                              legend:{
                                  layout:'horizontal',
                                  align:'center',
                                  verticalAlign:'bottom'
                              }
                          }
                    }
                    ]
                }
            }
        })
    </script>
</body>
</html>