<?php 

    include("../tmp/formHeader.php");

    $error = ["workNum" => ""];

    if(isset($_POST["prev"])){
        header("Location: form13.php");
    } 

    if(isset($_POST["submit"])){

        $workNum = $_POST["workNum"];

        if(empty($workNum)){
            $error["workNum"] = "Work Number must not be empty";
        }

        if(!array_filter($error)){
            session_start();
            $_SESSION["workNum"] = $workNum;
            header("Location: form15.php");
        }
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your work phone number?</h2>
            <div class="details">
                <p>"This number is mandatory for most lenders. Our lenders will never contact your employer to disclose your loan inquiry" <br> If on Benefits, enter your providers number </p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form14.php" method="post">
            <input type="tel" placeholder="Work Number" name="workNum">
            <p><?php echo $error["workNum"] ?></p>

            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>