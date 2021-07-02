<?php 
$NameofthePatient = filter_input(INPUT_POST, 'NameofthePatient');
$ContactNumber = filter_input(INPUT_POST, 'ContactNumber');
$EmailId  = filter_input(INPUT_POST, 'EmailId');
$Address = filter_input(INPUT_POST, 'Address');
$Incomeperannum = filter_input(INPUT_POST, 'Incomeperannum');
$Selectthedisease = filter_input(INPUT_POST, 'Selectthedisease');
$NationCardNo = filter_input(INPUT_POST, 'NationCardNo');

if (!empty($NameofthePatient)){

    if(!empty($ContactNumber)){

        if(!empty($EmailId)){

            if(!empty($Address)){

                if(!empty($Incomeperannum)){

                    if(!empty($Selectthedisease)){

                        if(!empty($NationCardNo)){
                            $host = "localdata";
                            $dbusername = "root"
                            $dbpassword = "";
                            $dbname ="tech1";

                            // Creating Connection
                                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                                die('Connect Error (', mysqli_connect_error() .') '
                                  . mysqli_connect_error());
                        }
                        else{
                            
                            $sql = "INSERT INTO patientregistration (NameofthePatient, ContactNumber, EmailId, Address, Selectthedisease, NationCardNo)  
                            values ('$NameofthePatient' , '$ContactNumber' , '$EmailId' , '$Incomeperannum' , '$Selectthedisease' , '$NationCardNo')"
                             if ($conn->query($sql))
                             {
                                echo "New record is inserted sucessfully";
                                }
                                else{
                                echo "Error: ". $sql ."
                                ". $conn->error;
                                }
                                $conn->close();
                                }


                        }
                        }
                        else{
                            echo "NationCardNo should not be empty.";
                            die();
                        }
                    }
                    else{
                        echo "Selectthedisease should not be empty.";
                        die();}

                    
                    
                }else{
                    echo "Incomeperannum should not be empty";
                    die(); }
                
                    
            }else{ "Address should not be empty.";
                die(); }
        } else{ "EmailId should not be empty.";
            die(); }  

    }else{ "ContactNumber should not be empty.";
        die(); }
}else{ "NameofthePatient should not be empty.";
    die(); }
?>