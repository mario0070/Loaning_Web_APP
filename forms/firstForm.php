<?php   
    include("../tmp/formHeader.php");
    include("../tmp/conn.php");

    $error = ["fname" => "" , "lname" => "", "email" => ""];
    $fname = $lname = $email = "";

   // first form
   if(isset($_POST["submit"])){
       $fname = $_POST["fname"];
       $lname = $_POST["lname"];
       $email = $_POST["email"];

       if(empty($fname)){
           $error["fname"] = "First Name must not be empty";
       }

       if(empty($lname)){
           $error["lname"] = "Last Name must not be empty";
       }

       if(empty($email)){
           $error["email"] = "Email address must not be empty";
       }
       elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           $error["email"] = "Email address is not valid";
       }

       if(!array_filter($error)){
            session_start();
            $_SESSION["fname"] = $fname;
            $_SESSION["lname"] = $lname;
            $_SESSION["email"] = $email;
            header("Location: secForm.php");
        }

   }
?>

    <div class="form">
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your name ?</h2>
            <div class="details">
                <p>"Enter your full legal name and valid email address, our lenders need to verify your identity."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="firstForm.php" method="post">
            <input type="text" placeholder="First Name" name="fname" value="<?php echo $fname?>">
            <p><?php echo $error["fname"] ?></p>

            <input type="text" placeholder="Last Name" name="lname">
            <p><?php echo $error["lname"] ?></p>

            <input type="email" placeholder="Email Address" name="email">
            <p><?php echo $error["email"] ?></p>

            <button name="submit">Next</button>
        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>