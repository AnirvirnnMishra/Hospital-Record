<html>
    <head>
    Search Window
    </head>
    <body>
        <div>
        <h3>Enter Aadhar To Search</h3>
        </div>
        <div>
        <form method="POST">
        <input type="text" pattern="[0-9]{16}" for="search" name='aadharId' maxlength="16" minlength="16">
        <button type="submit" name="submit_search">Search</button>
        
        </form>
        <table>
                
        
        <?php
        require_once 'connect.php';
        if(isset($_POST["submit_search"]))
        {

            $connection=connect();
            $aadhar=hash("sha256",$_POST["aadharId"]);
            $_SESSION["aadhar_id"]=$_POST["aadharId"];
            $patient_array=mysqli_fetch_array(mysqli_query($connection,"select * from ubid2dcv_hospital.Patient where AadharNo='".$aadhar."'order by uhid desc limit 1;"));
            // echo var_dump($patient_array);
            // echo "select uhid,from ubid2dcv_hospital.Patient where AadharNo='".$aadhar."'order by uhid desc limit 1;";
            // die();

            if($patient_array)
            {
                
                $Patient_Result=mysqli_query($connection,"select ubid2dcv_hospital.Prescription.uhid ,ubid2dcv_hospital.Prescription.Dose, ubid2dcv_hospital.Prescription.Morning,ubid2dcv_hospital.Prescription.Afternoon,ubid2dcv_hospital.Prescription.Evening,ubid2dcv_hospital.Prescription.Night,ubid2dcv_hospital.Prescription.StartDate,ubid2dcv_hospital.Prescription.EndDate,ubid2dcv_hospital.Prescription.SpecificSymptom,ubid2dcv_hospital.Prescription.MedicineID,ubid2dcv_hospital.Medicine.MedicineName from  ubid2dcv_hospital.Medicine inner join ubid2dcv_hospital.Prescription on ubid2dcv_hospital.Medicine.MedicineId=ubid2dcv_hospital.Prescription.MedicineID where uhid =(select uhid from ubid2dcv_hospital.Patient where AadharNo='".$aadhar."'
                 order by uhid desc limit 1)");
                 $Patient_Result=mysqli_fetch_array($Patient_Result);
                 $Patient_Result+=$patient_array;
                echo var_dump($Patient_Result);

            }
            else
            {
                echo "<script>alert('No Patient Found');</script>";
                unset($_POST);
            }

        }
        ?>
        </table>

        </div>
    </body>
</html>
<!-- 
select uhid,DateAppointment from ubid2dcv_hospital.Patient where AadharNo='6a1a34128ebfdfe37e2ee401d56dd6dd65b531f78db6fa866c72bcc053b28f3d'
 order by uhid desc limit 1;
 select * from ubid2dcv_hospital.Patient where AadharNo='6a1a34128ebfdfe37e2ee401d56dd6dd65b531f78db6fa866c72bcc053b28f3d'
 order by uhid desc limit 1;
 
select * from ubid2dcv_hospital.Prescription where  uhid=32 and DateAppointment='2021-02-02'; -->
