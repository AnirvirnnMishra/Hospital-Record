<!DOCTYPE html>
<html><head><title>MY WEBSITE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html{scroll-behavior:smooth;}
* {
  box-sizing: border-box;
}
body{
	background: linear-gradient(156deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 26%, rgba(252,176,69,1) 100%);
	padding:10px;
	}
	
fieldset {
  display: block;
  margin-left: 2px;
  margin-right: 2px;
  padding-top: 0.35em;
  padding-bottom: 0.625em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 7px inset red;
  border-radius:10px;
}	

.header{
	background-size:auto;
	background-color:white;
	padding:30px;
	text-align:center;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	border-top-left-radius:5px;
	border-top-right-radius:5px;
	}
	
h1{
	font-style:italic;
	font-size:50px;
	text-shadow:1px 1px 5px #aaa;
	}
	
ul {
  list-style-type: none;
  margin:0;
  padding:0;
  overflow: hidden;
  background-color: #333;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  border-bottom-left-radius:20px;
  border-bottom-right-radius:20px;

}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover {
  background-color: #aaa;
}
li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 190px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  display: block;
  text-align: left;
  border-bottom:1px solid black;
}

.dropdown-content a:hover {background-color: #aaa;}

.dropdown:hover .dropdown-content {
  display: block;
}
@media screen and (max-width:600px){
	li{
	float:left;
	width:100%;
	text-align:center;
	}
	.dropdown-content{width:92.80%;}
}
.leftcolumn{
	width:25%;
	float:left;
	}
.rightcolumn{
	width:25%;
	float:right;
	border-radius:10px;
	border:5px inset crimson;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
	background-color:#f9f9f9;
	

}
.Form{
	margin-top:10px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}

form{
	background-color:white;
	padding:20px;
	border-radius:10px;
	}
.leftcolumn {   
  float: left;
  width: 70%;
  margin-top:5px;
}

.rightcolumn {
  float: left;
  width: 25%;
  margin-top: 5px;
  margin-left:30px;
}
legend{
	text-align:center;
	}
label{
	font-weight:bold;
	font-size:18px;
	}
	
.required{
	padding:16px 16px;
	}

input[type=text],input[type=address],input[type=date]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 2px inset red;
  background: #f1f1f1;
  border-radius:10px;
  font-size:15px;
  outline:none;
}
input[type=radio]{
	font-weight:bold;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 50%;
}

#myBtn:hover {
  background-image:linear-gradient(to right,purple,blue);
}

@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
	float:none;
	margin:0;
  }
  .rightcolumn{border:2px inset red;box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);}
  	#gen{display:block;}
	#res{margin-top:25px;}
	#sub{margin-top:25px;}

}

#gen{
	text-align:left;
	font-weight:bold;
	font-size:18px;
	}
	
.gend{
	background-color:#f1f1f1;
	border:1px solid black;
	}
	
table{
	border-collapse:collapse;
	table-layout:fixed;
	overflow-x:auto;
	}
	
th{
	border:2px solid black;
	padding:16px;
	font-weight:bold;
	font-size:18px;
	background-color:#F24646;
	text-shadow:2px 2px 5px black;
	color:white;
	font-family:Arial;
	text-align:left;
	}
	
tr {
	text-align:center;
	background-color: #f9f9f9;
	padding:10px;
	margin:0px 0px 0px 0px;
	}
	
tr input[type=text],tr input[type=date]{
	background-color:white;
	border:none;
	font-weight:bold;
	font-size:15px;
	margin:0;
	outline:none;
	}
	
.medtable{
	overflow-x:auto;
	}
#mySidenav a {
  position: fixed;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 55%;
  background-color: #4CAF50;
}

#blog {
  top: 60%;
  background-color: #2196F3;
}

#projects {
  top: 65%;
  background-color: #f44336;
}

#contact {
  top: 70%;
  background-color: #555
}

</style>
</head>
<body  onload="AddRow('Medication');">
	<div class="header">
		<h1>My Website</h1>
		<p>Resize to see the responsive effect</p>
	</div>
	<div id="mySidenav" class="sidenav">
		<a href="#" id="about">About</a>
		<a href="#" id="blog">Blog</a>
		<a href="#" id="projects">Projects</a>
		<a href="#" id="contact">Contact</a>
	</div>
		<ul>
			<li style="background-color:green;"><a href="#">Home</a></li>
			<li><a href="#">Contact</a></li>
			<li class="dropdown">
				<a href="#">Dropdown</a>
					<div class="dropdown-content">
						<a href="#">Link1</a>
						<a href="#">Link2</a>
						<a href="#">Link3</a>
					</div>
				</div>
			</li>
			<li style="float:right;"><a href="#">About</a></li>
			</a>

		</ul>
	<div class="Form">
		<form action="#" method="post">
			<fieldset>
				<legend><h2>Diagnosis</h2></legend>
					<div class="leftcolumn">
						<div class="required">
							<label for="pfname">First Name : </label>
							<input type="text" name="pfname" id="pfname" placeholder="Enter First Name" size="25" required></input>
						</div>
						<div class="required">
							<label for="pmname">Middle Name<span style="font-weight:normal">&nbsp;(optional)</span> : </label>
							<input type="text" name="pmname" id="pmname" placeholder="Enter Middle Name" size="25" required></input>
						</div>
						<div class="required">
							<label for="plname">Last Name : </label> 
							<input type="text" name="plname" id="plname" placeholder="Enter Last Name" required size="25"></input>
						</div>
						<div class="required">
							<label for="age">Age : </label>
							<input type="text" name="age" id="age"  size="3" maxlength="3" required placeholder="Enter Age"></input>
						</div>
						<div class="required">
							<fieldset class="gend">
								<legend id="gen">Gender</legend>
								<input type="radio" id="male" name="gender" value="m">
								</input><label for="male" style="font-size:15px;font-weight:bold;">Male</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" id="female" name="gender" value="f">
								</input><label for="female" style="font-size:15px;font-weight:bold;">Female</label>&nbsp;&nbsp;&nbsp;&nbsp;				
								<input type="radio" id="other" name="gender" value="o">
								</input><label for="other" style="font-size:15px;font-weight:bold;">Other</label>
							</fieldset>
						</div>
						<div class="required">
							<label for="addr">Address : </label>
							<input type="address" id="addr" name="addr" required placeholder="Enter Address"></input>
						</div>
						<div class="required">
							<label for="mobno">Mobile&nbsp;No. : </label>
							<input type="text" maxlength="10" pattern="[0-9]{10}" required name="mobno" id="mobno" placeholder="Enter Mobile No."></input>
						</div>
						<div class="required">
							<label for="consult">Const. Doctor : </label>
							<input type="text" id="consult" name="consult" required></input>
						</div>
						<div class="required">
							<label for="finaldiag">Final Diagnosis : </label>
							<input type="text" name="finaldiag" id="finaldiag" required placeholder="Enter Final Diagnosis"></input>
						</div>
						<div class="required">
							<label for="drug">Drug History : </label>
							<input type="text" required id="drug" name="drug" placeholder="Enter Drug History"></input>
						</div>
						<div class="required">
							<label for="treat">Treatment Received During Hospitalization : </label>
							<input type="text" required id="treat" name="treat"></input>
						</div>	
					</div>
					<div class="rightcolumn">
						<div class="required">
							<label for="adhaar">Adhaar No. : </label>
							<input type="text" id="adhaar" name="adhaar" required pattern="[0-9]{16}" minlength="16" maxlength="16" size="16" placeholder="Enter Adhaar No."></input>
						</div>
						<div class="required">
							<label for="uhid">UHID No. : </label>
							<input type="text" id="uhid" name="uhid" required pattern="[0-9]{5}" maxlength="5" size="5" placeholder="Enter UHID No."></input>
						</div>	
						
						<div class="required">
							<label for="wardno">Gen ward/Bed No. : </label>
							<input type="text" id="wardno" name="wardno" required pattern="[0-9]{3}" maxlength="3" size="3" placeholder="Enter Ward/Bed No."></input>
						</div>
						<div class="required">
							<label for="dop">Date of Appointment : </label>
							<input type="date" id="dop" name="dop" required></input>
						</div>
						<div class="required">
							<label for="doa">Date of Admission : </label>
							<input type="date" id="doa" name="doa" ></input>
						</div>
						<div class="required">
							<label for="dod">Date of Discharge : </label>
							<input type="date" id="dod" name="dod" ></input>
						</div>
					</div>
					
			</fieldset>
			<div class="medtable">
							<div class="required">
								<button onclick="AddRow('Medication');" type="button" style="border:1px inset black;border-radius:50%;padding:7px;font-weight:bold;font-size:15px;margin-bottom:5px;outline:none;background-color:#F24646;color:white;text-shadow:2px 2px 10px black">&nbsp;+&nbsp;</button>
								<table border="2px" id="Medication" >
									<tbody>
										<tr>
											<th></th>
											<th>
												Medicine
											</th>
											<th>
												Dose
											</th>
											<th>
												Morning
											</th>
											<th>
												Afternoon
											</th>
											<th>
												Evening
											</th>
											<th>
												Night
											</th>
											<th>
												Start_Date
											</th>
										<th>
										Stop_Date
									</th>
									<th>
										On specific Symptom
									</th>	
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<input type="submit" value="Submit" name="submit_form" style="padding:10px 10px;border-radius:5px; width:120px;margin-left:25%;border:none;" id="sub"></input>
				<button type ="reset" onclick="window.location.reload();" style="padding:10px 10px;border-radius:5px; width:120px;margin-left:25%;border:none;outline:none;" id="res">Reset</button>
		</form>



		<?php
        
        require_once "connect.php";
        $connection = connect();
        if (isset($_POST["submit_form"])) {

            // 
            unset($_POST["submit_form"]);
            $Patient_Query = "insert into ubid2dcv_hospital.Patient(FirstName,";
            $Patient_Data="value( '".$_POST["pfname"]."',";

            if (isset($_POST["pmname"]) && trim($_POST["pmname"]) != '') {
                // echo "yes";
                $Patient_Query .= " MiddleName, ";
                $Patient_Data.=" '".$_POST["pmname"]."', ";
                

            }
            
            $Patient_Query.=" LastName,Age,Gender,Address,mobileNo,ConstDoctor, ";
            $Patient_Data.=" '".$_POST["plname"]."',".$_POST['age'].","."'".$_POST["gender"]."',"." '".$_POST["addr"]."','".$_POST["mobno"]."',"." '".$_POST["consult"]."', ";

            if (isset($_POST["wardno"]) )
            {
                $Patient_Query.="GenWard_Bed, ";
                $Patient_Data.=$_POST["wardno"]." ,";


            }
            $Patient_Query.=" AadharNo,DateAppointment,";
            $HashedAadhar=hash("sha256",$_POST["adhaar"]);
            
            
            $Patient_Data.=" '".$HashedAadhar."',"."cast('".$_POST["dop"]."' as date), ";
            if (isset($_POST["doa"]) && isset($_POST["dod"]))
            {
                $Patient_Query.=" DateAdmission,DateDischarge, ";
                $Patient_Data.="cast('".$_POST["doa"]."' as date) , cast('".$_POST["dod"]."' as date),";


			}
			$x=0;
            $Patient_Query.=" FinalDiagnosis,DrugHistory,TreatmentRecieved) ";

            $Patient_Data.="'".$_POST["finaldiag"]."','".$_POST["drug"]."','".$_POST["treat"]."');";
            
			$Patient_Query.=" ".$Patient_Data;
			$med_array=array();
            for($i=0;$i<=20;$i++)
            {
				$j=1;
                if (isset($_POST["Medicine,".$i.",".$j])&& trim($_POST["Medicine,".$i.",".$j])!='')
                {
					$x=1;
					// echo "Medicine,".$i.",".$j;
					$med_result=mysqli_query($connection,"select  MedicineId,MedicineName from ubid2dcv_hospital.Medicine where MedicineName='" .$_POST["Medicine,".$i.",".$j] ."'");	
                    
                    if ($med_result=mysqli_fetch_row($med_result))
                    {
                        // $med_result=mysqli_fetch_array($med_result);
                        $med_array["Medication,".$i]=$med_result;
                    }
                    else{
                        mysqli_query($connection,"insert into ubid2dcv_hospital.Medicine(MedicineName) value('".$_POST["Medicine,".$i.",".$j]."')");
                        $med_result=mysqli_query($connection,"select  MedicineId,MedicineName from ubid2dcv_hospital.Medicine where MedicineName='" .$_POST["Medicine,".$i.",".$j] ."'");	

                        $med_result=mysqli_fetch_array($med_result);
                        $med_array["Medication,".$i]=$med_result;

                    }
                    
					$j+=1;
					$dose=$_POST["Dose,".$i.",".$j];
					// echo var_dump($med_array);
					$med_array["Medication,".$i]+=["dose"=>$dose];
					$j+=1;
					if(isset($_POST["Morning,".$i.",".$j]))
					{
					$morning=$_POST["Morning,".$i.",".$j];
					$med_array["Medication,".$i]+=["morning"=>$morning];

					}
					$j+=1;
					if(isset($_POST["Afternoon,".$i.",".$j]))
					{
                    $afternoon=$_POST["Afternoon,".$i.",".$j];
					// echo "<br>$i".",".$j;
                    // echo var_dump($med_array);
                    // echo $afternoon;
					$med_array["Medication,".$i]+=["afternoon"=>$afternoon];

					}
					$j+=1;
					if(isset($_POST["Evening,".$i.",".$j]))
					{
					$evening=$_POST["Evening,".$i.",".$j];
					$med_array["Medication,".$i]+=["evening"=>$evening];
					
					}
					$j+=1;
					if(isset($_POST["Night,".$i.",".$j]))
					{
					$night=$_POST["Night,".$i.",".$j];
					$med_array["Medication,".$i]+=["night"=>$night];
					}
					$j+=1;
					$start_date=$_POST["Start_Date,".$i.",".$j];
										
					$med_array["Medication,".$i]+=["start_date"=>$start_date];
					$j+=1;
					$stop_date=$_POST["Stop_Date,".$i.",".$j];

					$med_array["Medication,".$i]+=["stop_date"=>$stop_date];
					$j+=1;

	

					if(isset($_POST["On_Sepcific_Symptom".",".$i.",".$j]))
					{
						$on_specific_symptom=$_POST["On_Sepcific_Symptom"];
						$med_array["Medication,".$i]+=["on_specific_symptom"=>$on_specific_symptom];
                    }
                
					
                    unset($j);
					// $med_array[]

					// echo var_dump($_POST);


				}
				    
				
			}
			// echo var_dump($med_array);



            // echo $Patient_Query;
            // KAL KARENGE isKE BAAAAAAAAAAAD
            


			// if (isset())
			// inserted in Patient table
			if ($x)
			{
				mysqli_query($connection,$Patient_Query);
			}
            echo mysqli_error($connection);

			$Patient_ID=mysqli_fetch_array(mysqli_query($connection,"select uhid from ubid2dcv_hospital.Patient  where AadharNo='".$HashedAadhar."' order by uhid desc limit 1"))["uhid"];
			// echo $Patient_ID;
			if($x)
			{
					$prescription_query="insert into ubid2dcv_hospital.Prescription(uhid,MedicineID,Dose,Morning,Afternoon,Evening,Night,StartDate,EndDate,SpecificSymptom,DateAppointment) values( ";

				for($i=1;$i<20;$i++)
				{
					$j=1;
					$prescription_query_values="$Patient_ID,";
					if(isset($med_array["Medication,".$i]))
					{$prescription_query_values.= $med_array["Medication,".$i][0].", "; 
					$j+=1;
					$prescription_query_values.="'".$med_array["Medication,".$i]["dose"]."',";
					if(1)
					{
						$j+=1;
						if(isset($med_array["Medication,".$i]["morning"]))
						{
							$prescription_query_values.="'y',";

						}
						else
						{
							$prescription_query_values.="'n',";

						}
					}

					if(1)
					{
						$j+=1;
						if(isset($med_array["Medication,".$i]["afternoon"]))
						{
							$prescription_query_values.="'y',";

						}
						else
						{
							$prescription_query_values.="'n',";

						}
					}

					if(1)
					{
						$j+=1;
						if(isset($med_array["Medication,".$i]["evening"]))
						{
							$prescription_query_values.="'y',";

						}
						else
						{
							$prescription_query_values.="'n',";

						}
					}

					if(1)
					{
						$j+=1;
						if(isset($med_array["Medication,".$i]["night"]))
						{
							$prescription_query_values.="'y',";

						}
						else
						{
							$prescription_query_values.="'n',";

						}
					}
					$j+=1;
					$prescription_query_values.="cast('".$med_array["Medication,".$i]["start_date"]."' as date ),";
					$j+=1;
					$prescription_query_values.="cast('".$med_array["Medication,".$i]["stop_date"]."' as date ),";
					
					$prescription_query_values.="cast('".$_POST["dop"]."' as date),"; 

					if(1)
					{
						$j+=1;
						if(isset($med_array["Medication,".$i]["on_specific_symptom"]))
						{
							$prescription_query_values.="'".$med_array["Medication,".$i]["on_specific_symptom"]."',";
							
						}
						else
						{
							$prescription_query_values.="NULL);";

						}
					}

					$total_prescription_query=$prescription_query." ". $prescription_query_values;

					mysqli_query($connection,$total_prescription_query);
				// echo $total_prescription_query;
				// mysqli_error($connection);
			
			// unset($prescription_query_values);
			
			}

		}
			}
			
			// echo var_dump(mysqli_fetch_row($Patient_ID));
			


			// array(2) { ["Medication,1"]=> array(7) { [0]=> string(1) "9" [1]=> string(11) "kfheiufhwiu" ["morning"]=> string(2) "on"
			// 	["afternoon"]=> string(2) "on" ["evening"]=> string(2) "on" ["start_date"]=> string(10) "2023-05-03" ["stop_date"]=> string(10) 
			// 	"2022-03-03" } ["Medication,2"]=> array(6) { [0]=> string(1) "3" [1]=> string(6) "Calpol" ["evening"]=> string(2) "on" ["night"]=> 
			// 	string(2) "on" ["start_date"]=> string(10) "2021-01-01" ["stop_date"]=> string(10) "2021-02-01" } } 14




        }

        ?>







	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top">&nbsp;^&nbsp;</button>
<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
var arrHead = new Array();
           //Empty ('') is for Remove button
arrHead = ['','Medicine', 'Dose', 'Morning','Afternoon','Evening','Night','Start_Date','Stop_Date','On_specific_Symptom'];//Last one is for ex(ON pain)

// This For naming the Added row attributes
var Dict=new Object();
for (var i=1 ;i<arrHead.length;i++)
{
    Dict[i]=arrHead[i];
}
// console.log(Dict[1]);

function AddRow(tableId)
{
        var empTab = document.getElementById('Medication');

        var rowCnt = empTab.rows.length;    // get the number of rows.
        var tr = empTab.insertRow(rowCnt); // table row.
        // tr = empTab.insertRow(rowCnt);

        for (var c = 0; c < arrHead.length; c++) {
            var td = document.createElement('td');          // TABLE DEFINITION.
            td = tr.insertCell(c);

            if (c == 0) {   // if its the first column of the table.
                // add a button control.
                var button = document.createElement('input');


                // set the attributes.
                button.setAttribute('type', 'button');
                button.setAttribute('value', '-');

                // add button's "onclick" event.
                button.setAttribute('onclick', 'removeRow(this)');



                // button.setAttribute('id',); ID FOR CSS SET KAR LENA BHAI

                td.appendChild(button);
            }
            else {
                //1Medicine 2Dose 3Morning 4Afternoon 5Evening 6Night 7Start Date 8Stop Date 9On specific Symptom 
                if (c==3|| c==4||c==5||c==6)    
                {
                    // These will be checkbox
                    var ele=document.createElement("input");
                    ele.setAttribute('type','checkbox');
                    ele.setAttribute('name',Dict[c]+","+rowCnt+","+c); //this will be like Morning,1,3


                }
                else if (c==7 || c==8)
                {
                // this is for dates
                var ele = document.createElement('input');
                ele.setAttribute('type', 'date');
                
                ele.setAttribute('name',Dict[c]+","+rowCnt+","+c);
                }
                else
                {
                var ele = document.createElement('input');
                ele.setAttribute('type', 'text');
                // ele.setAttribute('value', 'test Data'); 
                ele.setAttribute('name',Dict[c]+","+rowCnt+","+c);
                }
                td.appendChild(ele);
                
            }
            
        }
    }


function removeRow(oButton) {
    var empTab = document.getElementById('Medication');
    empTab.deleteRow(oButton.parentNode.parentNode.rowIndex); // buttton -> td -> tr
}


    // function to extract and submit table data.
function submit() {
    var myTab = document.getElementById('Medication');
    var arrValues = new Array();

    // loop through each row of the table.
    for (row = 1; row < myTab.rows.length - 1; row++) {
        // loop through each cell in a row.
        for (c = 0; c < myTab.rows[row].cells.length; c++) {
            var element = myTab.rows.item(row).cells[c];
            if (element.childNodes[0].getAttribute('type') == 'text') {
                arrValues.push("'" + element.childNodes[0].value + "'");
            }
        }
    }
}
</script>	
</body>
</html>

