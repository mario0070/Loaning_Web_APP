<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form17.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form19.php");
    } 

?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>How long have you had this bank account for?</h2>
            <div class="details">
                <p>"Let us know how long you've had your bank account for"</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form18.php" method="post">

            <div class="btn">
                <button name="next">5 Years</button>
                <button name="next">4 Years</button>
                <button name="next">3 Years</button>
                <button name="next">2 Years</button>
                <button name="next">One Years or Less</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>