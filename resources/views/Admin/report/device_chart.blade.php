<!DOCTYPE html>
<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <h3>กราฟแสดงอุปกรณ์และบราวเซอร์ที่เปิดเข้ามา</h3>
                        </div>
                    </div>
                    <div id="chart">
                        <div class="row">
                            <canvas id="piechart" style="width: 600px;height:300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    {{-- chart --}}
    <?php  $graph =  \App\CustomerDevice::all();
            $count  = array();
            $name  = array();  
            $color  = array();
    
            foreach ($graph as $key => $value) {
    
                array_push($count,$value->count);
                array_push($name,$value->device.' ใช้ '.$value->browser);
                array_push($color , '#'.dechex(rand(0x000000, 0xFFFFFF)));
    
            }
          
     
            $json_name  = json_encode( $name);
            $json_count = json_encode( $count);
            $json_color = json_encode( $color);
    
    ?>    
</body>
</html>        
                     
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- form mask -->
<script src="{{ URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')}}"></script>

<!-- form mask init -->
<script src="{{ URL::asset('assets/js/pages/form-repeater.int.js')}}"></script> 
<!--tinymce js-->
<script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- Summernote js -->
<script src="{{ URL::asset('assets/libs/summernote/summernote.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>  

<!-- Sweert Alert -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> 

<!-- Bootstrap tags input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>

<!-- chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

<script>
    ///chart

    var dynamicColors = function() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgb(" + r + "," + g + "," + b + ")";
}



    var ctx = document.getElementById("piechart").getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'pie',
        data: {
                labels: <?php echo  $json_name ?>,
                datasets: [{
                    barPercentage: 0.5,
                    barThickness: 6,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    data: <?php echo    $json_count ?>,
                    backgroundColor: <?php echo    $json_color ?>,
                }]
            },
        
    });


   
</script>
