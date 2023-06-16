<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form3.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form5.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is the best time to reach you?</h2>
            <div class="details">
                <p>"our lenders may contact you to verify yoour identity."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form4.php" method="post">

            <div class="btn">
                <button name="next">Morning</button>
                <button name="next">Noon</button>
                <button name="next">Evening</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>