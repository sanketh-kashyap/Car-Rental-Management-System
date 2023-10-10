<?php
if(isset($_POST['upcar']) ){
    require_once('connection.php');
    $carid=$_GET['id'];

   
    
        

                $carname=mysqli_real_escape_string($con,$_POST['carname']);

                $ftype=mysqli_real_escape_string($con,$_POST['ftype']);
                $capacity=mysqli_real_escape_string($con,$_POST['capacity']);
                $price=mysqli_real_escape_string($con,$_POST['price']);
                
                $query="UPDATE cars SET CAR_NAME='$carname', FUEL_TYPE='$ftype', CAPACITY=$capacity, PRICE=$price where CAR_ID=$carid";
                $result = mysqli_query($con,$query);
                if($result){
                    echo '<script>alert("Car Updated Successfully!!")</script>';
                    echo '<script> window.location.href = "adminvehicle.php";</script>';             }

        

}
else{
    echo "false";
}



?>
