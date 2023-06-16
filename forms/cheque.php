<?php 

    include("../tmp/formHeader.php");
    include("../tmp/conn.php");
    
    session_start();
    $fname =  $_SESSION["fname"];
    $number = $_SESSION["number"];
    $lname = $_SESSION["lname"];
    $email = $_SESSION["email"];
    $zipCode = $_SESSION["zipCode"];
    $homeAddy = $_SESSION["homeAddy"];
    $dob = $_SESSION["dob"];
    $EmpName = $_SESSION["EmpName"];
    $workNum = $_SESSION["workNum"];
    $LicenseNum = $_SESSION["LicenseNum"];
    $state = $_SESSION["state"];
    $ssn = $_SESSION["ssn"];

    $error = ["bank_name" => "","acct_num" => "","ABA" => ""];

    if(isset($_POST["submit"])){
        $bank_name = $_POST["bank_name"];
        $acct_num = $_POST["acct_num"];
        $ABA = $_POST["ABA"];

        if(empty($bank_name)){
            $error["bank_name"] = "Enter your bank name";
        }

        if(empty($acct_num)){
            $error["acct_num"] = "Account Number attached to bank";
        }

        if(empty($ABA)){
            $error["ABA"] = "Bank ABA";
        }

        if(!array_filter($error)){
            $sql = "INSERT INTO 
            usersinfo(`firstname`, `lastname`, `phone_number`, `email`, `ssn`, `home_address`, `zip_code`, `dob`, `license_number`, `home_state`,`bank_aba`, `bank_acct_num`, `bank_name`)
            VALUE('$fname','$lname','$number','$email','$ssn','$homeAddy','$zipCode','$dob','$LicenseNum','$state','$ABA','$acct_num','$bank_name')";
            $query = $conn->query($sql);

            if($query){
                header("Location: ../index.php");
            }

        }
    } 

?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>Where do you like your loan deposited?</h2>
        </div>

        <form action="cheque.php" method="post">
            <input type="text" placeholder="Enter Bank Name" name="bank_name">
            <p><?php echo $error["bank_name"] ?></p>

            <img src="../imgs/check.webp" alt="">
            <input type="text" placeholder="Bank ABA" name="ABA">
            <p><?php echo $error["ABA"] ?></p>

            <input type="text" placeholder="Bank Account Number" name="acct_num">
            <p><?php echo $error["acct_num"] ?></p>

            <button name="submit">Request Loan</button>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>