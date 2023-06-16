<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form16.php");
    } 

    if(isset($_POST["next"])){
         header("Location: form18.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What type of Bank Account do you have?</h2>
            <div class="details">
                <p>"Lenders are significantly more likely to fund checking accounts than savings account."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form17.php" method="post">

            <div class="btn">
                <button name="next">Checking</button>
                <button name="next">Savings</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>