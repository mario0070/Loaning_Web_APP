<?php 

    include("../tmp/formHeader.php");

    if(isset($_POST["prev"])){
        header("Location: form8.php");
    } 

    if(isset($_POST["next"])){
        header("Location: form10.php");
    } 
?>

    <div class="form">
        
        <a href="../index.php"><img src="../imgs/logo.webp" alt=""></a>

        <div class="head">
            <h2>What is your gross monthly income?</h2>
            <div class="details">
                <p>"Our lenders need your income before taxes to approve your loan."</p>
            </div>
            <span>A HELPFUL TIP!</span>
        </div>

        <form action="form9.php" method="post">

            <div class="gross">
                <button name="next">$5000 or More</button>
                <button name="next">$4000 - $5000</button>
            </div>
            <div class="gross">
                <button name="next">$3500 - $4000</button>
                <button name="next">$3000 - $3500</button>
            </div>
            <div class="gross">
                <button name="next">$2500 - $3000</button>
                <button name="next">$2000 - $2500</button>
            </div>
            <div class="gross">
                <button name="next">$1500 - $2000</button>
                <button name="next">Below $1500</button>
            </div>

            <button name="prev">Previous</button>
         

        </form>

    </div>
    
<?php include("../tmp/footer.php") ?>