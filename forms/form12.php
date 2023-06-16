<?php 

    include("../tmp/formHeader.php");

    $error = ["EmpName" => ""];

    if(isset($_POST["prev"])){
        header("Location: form11.php");
    } 

    if(isset($_POST["submit"])){

        $EmpName = $_POST["EmpName"];

        if(empty($EmpName)){
            $error["EmpName"] = "Pleae fill in the Employer Name";
        }

        if(!array_filter($error)){
            session_start();
            $_SESSION["EmpName"] = $EmpName;
            header("Location: form13.php");
        }
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>Employer?</h2>
            <div class="details">
                <p>"our lenders need a bit more details regarding your employment."<br> If benefits type "Benefit" for employer name</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form12.php" method="post">
            <input type="text" placeholder="Employer Name" name="EmpName">
            <p><?php echo $error["EmpName"] ?></p>

            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>