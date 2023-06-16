<?php 

    include("../tmp/formHeader.php");

    $error = ["ssn" => ""];

    if(isset($_POST["prev"])){
        header("Location: form15.php");
    } 

    if(isset($_POST["submit"])){
        $ssn = $_POST["ssn"];

        if(empty($ssn)){
            $error["ssn"] = "Social Security Number must not be empty";
        }

        if(!array_filter($error)){
            session_start();
            $_SESSION["ssn"] = $ssn;
            header("Location: form17.php");
        }
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your Social Security Number?</h2>
            <div class="details">
                <p>"Provide your valid social security number to verify your identity for your loan." </p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form16.php" method="post">
            <input type="text" placeholder="Social Security Number" name="ssn">
            <p><?php echo $error["ssn"] ?></p>

            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>