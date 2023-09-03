<!DOCTYPE html>
<html lang="en">
<head>
    <title>TICKET BOOKING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
    include 'connect.php';
?>
<body>
    <div class="container-fluid"> 
        <form method="post" action="insert.php">
        <h4 class="text-center bg-info p-3">TRAIN TICKET BOOKING</h4>
        <div class="row bg-warning m-3 p-3">
        <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>ENTER YOUR NAME</h4></label>
                    <input type="type" id="name" class="form-control name" name="name" autocomplete="off">
                </div>
            </div> 
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>ENTER YOUR ADDRESS</h4></label>
                    <input type="type" id="address" class="form-control address" name="address" autocomplete="off">
                </div>
            </div>
            <div class="col-sm-2">
            <div class="form-group">
                    <label><h4>MOBILE NUMBER</h4></label>
                    <input type="number" id="num" class="form-control num" name="num" autocomplete="off">
                </div>
            </div>
            <div class="col-sm-2">
            <div class="form-group">
                    <label><h4>DATE</h4></label>
                    <input type="date" id="date" class="form-control date" name="date">
                </div>
            </div>      
            </div>   
        <div class="row bg-warning m-3 p-3">
            <div class="col-sm-4">
                <div class="form-group">
                    <label><h4>TRAIN NAME</h4></label>
                    <select class="form-select" id="train_name" name="train_name">
                        <option value="">Please Select</option>
                        <?php
                            $trains = mysqli_query($conn,"SELECT * FROM m_trains_t");
                            for(;$row=mysqli_fetch_array($trains);)
                            {
                        ?>
                                <option value="<?php echo $row['train_id']; ?>"><?php echo $row['train_name']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>TRAIN NUMBER</h4></label>
                    <input  id="train_num" class="form-control train_num" name="train_num" readonly="true">
                </div>
            </div>
            
            <div class="col-sm-2">
            <div class="form-group">
                    <label><h4>START TIME</h4></label>
                    <input  id="str_time" class="form-control str_time" name="str_time" readonly="true">
                </div>
            </div>
            <div class="col-sm-2">
            <div class="form-group">
                    <label><h4>END TIME</h4></label>
                    <input  id="end_time" class="form-control end_time" name="end_time" readonly="true">
                </div>
            </div>
        </div>

        <div class="row bg-warning m-3 p-3">
            <div class="col-sm-6">
                <div class="form-group">
                    <label><h4>START LOCATION</h4></label>
                    <input  id="start_location" class="form-control start_location" name="start_location" readonly="true">
                </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                    <label><h4>END LOCATION</h4></label>
                    <input  id="end_location" class="form-control end_location" name="end_location" readonly="true">
                </div>
            </div>
        </div>

        <div class="row bg-warning m-3 p-3">
            <div class="col-sm-4">
                <div class="form-group">
                    <label><h4>COUCH</h4></label>
                    <select  id="couch" class="form-control couch" name="couch" >
                          <option>--select--</option>
                          <option value="fc">FIRST CLASS</option>
                          <option value="sc">SECOND CLASS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>PREFERENCE</h4></label>
                    <select id="preference" class="form-control preference" name="preference">
                        <option>--select--</option>
                        <option value="slee">SLEEPER</option>
                        <option value="sitt">SITTING</option>

                    </select>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>AMOUNT</h4></label>
                    <input id="amount" class="form-control amount" name="amount" readonly="true">
                </div>
            </div>
        </div>

        <div class="row bg-warning m-3 p-3">
            <div class="col-sm-4">
                <div class="form-group">
                    <label><h4>ADULT LIST</h4></label>
                    <input type="number" id="adult_list" class="form-control adult_list" name="adult_list">
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>CHILD LIST</h4></label>
                    <input type="number" id="cld_list" class="form-control cld_list" name="cld_list">
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>TOTAL PASSENGER LIST</h4></label>
                    <input type="number" id="totl_lis" class="form-control totl_lis" name="totl_lis" readonly="true">
                </div>
            </div>
        </div>


        <div class="row bg-warning m-3 p-3">
            <div class="col-sm-4">
                <div class="form-group">
                    <label><h4>TOTAL AMOUNT</h4></label>
                    <input type="number" id="tol_amt" class="form-control tol_amt" name="tol_amt" readonly="true">
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>GST(18%)</h4></label>
                    <input type="number" id="gst" class="form-control gst" name="gst" readonly="true">
                </div>
            </div>
            <div class="col-sm-4">
            <div class="form-group">
                    <label><h4>NET AMOUNT</h4></label>
                    <input type="number" id="net_amt" class="form-control net_amt" name="net_amt" readonly="true">
                </div>
            </div>
        </div>
       
        <div class="col text-center">
        <button type="submit"  class="btn btn-success center submit" name="submit" value="Submit">Submit</button>
        </div>
        </form>
    </div>

    <script>
    </script>
<script>
    $(document).ready(function(){
        $('#train_name').on('change',function(){
            var train_id= $(this).val();
            console.log(train_id);
            $.ajax({
                url: "gettraindetails.php",
                type: "POST",
                data: {train_id:train_id},
                dataType: "JSON",
                success:function(data)
                {
                   $('#train_num').val(data.train_number);
                   $('#start_location').val(data.start_location);
                   $('#end_location').val(data.end_location);
                   $('#str_time').val(data.start_time);
                   $('#end_time').val(data.end_time);
                }
               
        });
        $('#preference').on('change',function(){
               var pref = $("#preference").val();
               var coach = $('#couch').val();
               if(coach == 'sc')
               {
                    if(pref == 'sitt'){
                        $("#amount").val("370");
                       }
                    else if(pref == 'slee')
                       {
                        $("#amount").val("470");
                       } 
                }
               else 
               {
                 if(pref == 'slee')
                    {
                      $("#amount").val("770");
                    } 
                  else if(pref == 'sitt')
                    {
                      $("#amount").val("570");
                    } 
                }
            });
        });

        $("#totl_lis").click(function(){
    var adult=parseInt($("#adult_list").val());
    var child=parseInt($("#cld_list").val());
    var total=adult+child;
      var net= $("#totl_lis").val(total);
        });
        $("#tol_amt").click(function(){
        var tol1=parseInt($("#amount").val());
        var tol2=parseInt($("#totl_lis").val());
        var tol3=tol1*tol2;
         var nets=$("#tol_amt").val(tol3);
         });
         $("#gst").click(function(){
        var amt=parseInt($("#tol_amt").val());
        var am=(amt*0.18);
         var nets1=$("#gst").val(am);
         });
         $("#net_amt").click(function(){
        var amt1=parseInt($("#tol_amt").val());
        var amt2=parseInt($("#gst").val());
        var net1=amt1+amt2;
         var nets1=$("#net_amt").val(net1);
         });
    });
</script>
</body>
</html>