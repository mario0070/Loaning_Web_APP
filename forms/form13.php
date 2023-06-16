<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form12.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form14.php");
    } 

?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>How long have you been employed?</h2>
            <div class="details">
                <p>"Our lenders need a bit more details regardiing your employment." <br> If on Benefits, how long?</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form13.php" method="post">

            <div class="btn">
                <button name="next">5 Years or More</button>
                <button name="next">4 Years</button>
                <button name="next">3 Years</button>
                <button name="next">2 Years</button>
                <button name="next">1 Years or Less</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>