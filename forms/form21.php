<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form20.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form22.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your reason for seeking a loan?</h2>
            <div class="details">
                <p>"To point you in the direction, tell us the reason for your loan."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form21.php" method="post">

            <div class="btn">
                <button name="next">Credit Card Debt Relief</button>
                <button name="next">Student Loan Relief</button>
                <button name="next">Debt Consolidation</button>
                <button name="next">Other</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>