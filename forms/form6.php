<?php 

    include("../tmp/formHeader.php");

    $error = ["debt" => ""];

    if(isset($_POST["prev"])){
        header("Location: form5.php");
    } 

    if(isset($_POST["submit"])){
        $debt = $_POST["debt"];

        if(empty($debt)){
            $error["debt"] = "Select one";
        }

        if(!array_filter($error)){
            // $sql = "INSERT INTO usersinfo(firstname,lastname,email) VALUE('$fname','$lname','$email')";
            // $query = $conn->query($sql);
            header("Location: form7.php");
        }
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>How much credit card debt do you currently have?</h2>
            <div class="details">
                <p>"EXPAND your request to INCLUDE additional financial options that specialize in consolidating unsecured debt"</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form6.php" method="post">
            <select name="debt" id="">
                <option value="">Choose a debt amount</option>
                <option value="none">None</option>
                <option value="$1,000">$1,000 - $5,000</option>
                <option value="none">$5,000 - $10,000</option>
                <option value="none">$10,000 - $15,000</option>
                <option value="none">$15,000 - $20,000</option>
                <option value="none">$20,000 - $25,000</option>
                <option value="none">$25,000 - $30,000</option>
                <option value="none">$30,000 - $35,000</option>
                <option value="none">$35,000 - $40,000</option>
                <option value="none">$40,000 - $45,000</option>
                <option value="none">$45,000 - $50,000</option>
                <option value="none">$50,000+</option>
            </select>
            <p><?php echo $error["debt"] ?></p>

            <div class="btns">
                <button name="prev">Previous</button>
                <button name="submit">Next</button>
            </div>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>