<?php 

    include("../tmp/formHeader.php");
    include("../tmp/conn.php");

    $error = ["number" => ""];
    $number = "";

    if(isset($_POST["prev"])){
        header("Location: firstForm.php");
    } 

    if(isset($_POST["submit"])){
        $number = $_POST["number"];

        if(empty($number)){
            $error["number"] = "Phone Number must not be empty";
        }

        if(!array_filter($error)){
            session_start();
            $_SESSION["number"] = $number;
            header("Location: form3.php");
        }

        
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your phone number?</h2>
            <div class="details">
                <p>"Your loan request may need final confirmation by phone before funding."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="secForm.php" method="post">
            <input type="tel" placeholder="Phone Number" name="number">
            <p><?php echo $error["number"] ?></p>

            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>

            <p class="num">By providing your number and clicking “Continue”, you consent to receive calls, texts and pre-recorded messages from graceloanadvance.com, its Lending Partners and/or Network Partners.**</p>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>