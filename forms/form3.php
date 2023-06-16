<?php 

    include("../tmp/formHeader.php");
    include("../tmp/conn.php");

    $error = ["zipCode" => "","homeAddy" => ""];
    // $number = "";

    if(isset($_POST["prev"])){
        header("Location: secForm.php");
    } 

    if(isset($_POST["submit"])){
        $zipCode = $_POST["zipCode"];
        $homeAddy = $_POST["homeAddy"];

        if(empty($zipCode)){
            $error["zipCode"] = "Zip Code must not be empty";;
        }

        if(empty($homeAddy)){
            $error["homeAddy"] = "Home Address must not be empty";
        }

        if(!array_filter($error)){
            session_start();
            $_SESSION["zipCode"] = $zipCode;
            $_SESSION["homeAddy"] = $homeAddy;
            header("Location: form4.php");
        }
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your home address?</h2>
            <div class="details">
                <p>"We need to know where you are when requesting a loan."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form3.php" method="post">
            <input type="text" placeholder="Zip Code" name="zipCode">
            <p><?php echo $error["zipCode"] ?></p>

            <input type="text" placeholder="Home Address" name="homeAddy">
            <p><?php echo $error["homeAddy"] ?></p>
            
            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>