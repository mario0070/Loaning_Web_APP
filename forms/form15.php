<?php 

    include("../tmp/formHeader.php");

    $error = ["LicenseNum" => "","state" => ""];

    if(isset($_POST["prev"])){
        header("Location: form14.php");
    } 

    if(isset($_POST["submit"])){
        
        $LicenseNum = $_POST["LicenseNum"];
        $state = $_POST["state"];

        if(empty($LicenseNum)){
            $error["LicenseNum"] = "Pleae fill in the License Number";
        }

        if(empty($state)){
            $error["state"] = "Choose your state";
        }

        if(!array_filter($error)){
            session_start();
            $_SESSION["LicenseNum"] = $LicenseNum;
            $_SESSION["state"] = $state;
            header("Location: form16.php");
        }
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your Driver's License or State ID Number?</h2>
            <div class="details">
                <p>"Your driver's license/ID number is used to verify your identity and prevent fraud." </p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form15.php" method="post">
            <input type="text" placeholder="License Number" name="LicenseNum">
            <p><?php echo $error["LicenseNum"] ?></p>

            <select name="state" id="">
                <option value="">Home State</option>
                <option value="alaska">Alaska</option>
            </select>
            <p><?php echo $error["state"] ?></p>

            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>