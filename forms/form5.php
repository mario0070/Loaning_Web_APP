<?php 

    include("../tmp/formHeader.php");

    $error = ["dob" => ""];
    $dob = "";

    if(isset($_POST["prev"])){
        header("Location: form4.php");
    } 

    if(isset($_POST["submit"])){
        $dob = $_POST["dob"];

        if(empty($dob)){
            $error["dob"] = "Date of birth must be set";
        }

        if(!array_filter($error)){
            session_start();
            $_SESSION["dob"] = $dob;
            header("Location: form6.php");
        }
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your date of birth?</h2>
            <div class="details">
                <p>"your date of birth is needed to verify your identity"</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form5.php" method="post">
            <input type="date" name="dob">
            <p><?php echo $error["dob"] ?></p>

            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>