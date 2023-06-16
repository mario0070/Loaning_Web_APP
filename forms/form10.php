<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form9.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form11.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>How frequently do you get paid?</h2>
            <div class="details">
                <p>"Our lender need your income frequency to approve your loan"</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form10.php" method="post">

            <div class="btn">
                <button name="next">Weekly</button>
                <button name="next">Bi-Weekly</button>
                <button name="next">Monthly</button>
                <button name="next">Semi-Monthly</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>