@extends('admin_layout')
@section('admin_content') 
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        Thông Kê Theo Năm
                        </header> 
                        
                        
                        <div class="row w3-res-tb">
                        <div class="col-sm-3">
                            
                          <label for="birthday">Năm bắt đầu:</label>
                            <input type="text" id="start_year" >
                          </div>
                          <div class="col-sm-3">
                            <div class="input-group">
                              
                              <label for="birthday">Năm kết thúc:</label>
                              <input type="text" id="end_year" >
                              <span class="input-group-btn">
                                <button class="btn btn-sm btn-default margin-top" onclick="Load()" type="button">Load</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        
                        <div class="panel-body">
                            <div class="position-center">
                                <canvas id="myChart"></canvas>
                            </div>  
                            <div class="position-center">
                                <label for="exampleInputEmail1" id="total_money"></a>
                                
                            </div>  
                            
                        </div>
                        

                    </section>
                    <?php
                        $data_order= array();
                        
                        foreach($data as $key => $value)
                        {
                            array_push($data_order,$value);
                        }
                    ?>
                    <script>
                        // === include 'setup' then 'config' above ===
                        
                        
                        function Load()
                        {
                          var data = <?php echo json_encode($data_order) ?>;
                          var arr_header = [];
                          var arr_total_money=[];
                          const start_year_input = document.getElementById('start_year').value;
                          const end_year_input = document.getElementById('end_year').value;
                          var start_year_order=new Date();
                          var nam = start_year_input;
                          var sum_total_money = 0;

                          for(var index = start_year_input; index <= end_year_input ; index++)
                          {
                            
                            arr_header.push(index);
                            arr_total_money.push(sum_money(index,data));
                            sum_total_money+= sum_money(index,data);
                            
                          }
                          var labels = arr_header;
                          var data = {
                            labels: labels,
                            datasets: [{
                              label: 'Tổng Thành Tiền',   
                              backgroundColor: 'rgb(255, 99, 132)',
                              borderColor: 'rgb(255, 99, 132)',
                              data: arr_total_money,
                            }]
                          };

                          var config = {
                            type: 'bar',
                            data: data,
                            options: {
                              scales: {
                                y: {
                                  beginAtZero: true
                                }
                              }
                            },
                          };
                          var myChart = new Chart(
                              document.getElementById('myChart'),
                              config
                          );
                          document.getElementById('total_money').innerHTML= "Tổng Tiền: " + sum_total_money.toString();
                        }
                        function sum_money(Year, arrdata)
                        {
                          var sum_money = 0;
                          var start_time_order=new Date();
                          for (let index = 0; index < arrdata.length; index++) {
                            start_time_order= new Date(arrdata[index].NgayLap);

                            if(parseInt( Year) == parseInt(start_time_order.getFullYear()))
                            {
                              sum_money += arrdata[index].TongThanhTien;
                            }
                            else
                              break;
                            
                          }
                          return sum_money;
                        }

                        
                        
                        
                    </script>
            </div>
            @endsection
        