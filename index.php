<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Vote</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 22px; font-weight: 400; background-color: rgb(43, 43, 44);
     color: white; text-align: center;width: 100%; padding: 7px; ">
        <h2>Vote For STAR PLAYER</h2>
    </div>
    <div class="container">
    <form action="index.html" method="post" align="center" >
        
        <div class="meli">
        <div class="mfihlo">
            <div><img src="images/lorch.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="lorch" value="Vote for Lorch">
        </div>
    

        
        <div class="mfihlo">
            <div><img src="images/parker.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="parker" value="Vote for Parker">
        </div>
  
        <div class="mfihlo">
            <div><img src="images/motshwari.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="motswari" value="Vote for Motswari">
        </div>
        </div>

        <div class="meli">
        <div class="mfihlo">
            <div><img src="images/ngcobo.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="ngobo" value="Vote for Ngcobo">
        </div>

        <div class="mfihlo">
            <div><img src="images/lepase.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="lepase" value="Vote for Lepase">
        </div>

            <div class="mfihlo">
            <div><img src="images/zuma.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="zuma" value="Vote for Zuma">
        </div>
        </div>


        <div class="meli">
        <div class="mfihlo">
            <div><img src="images/pule.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="pule" value="Vote for Pule">
        </div>
    

       
        <div class="mfihlo">
            <div><img src="images/nurkovic.jpg" width="85%" height="250" alt=""></div>       
            <input type="submit" name="nurkovic" value="Vote for Nurkovic">
        </div>
        </div>

   </form>
<?php

$con = mysqli_connect("localhost","root","","mytest");

if(isset($_POST['lorch']))
{
    $vote_lorch = "update votes set lorch=lorch+1";
    $run_lorch = mysqli_query($con,$vote_lorch);

    if($run_lorch) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Thembinkosi Lorch !!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['parker']))
{
    $vote_parker = "update votes set parker=parker+1";
    $run_parker = mysqli_query($con,$vote_parker);

    if($run_parker) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Bernad Parker !!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['motshwari']))
{
    $vote_motshwari = "update votes set motshwari=motshwari+1";
    $run_motshwari = mysqli_query($con,$vote_motshwari);

    if($run_motshwari) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Ben Motshwari !!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['ngcobo']))
{
    $vote_ngcobo = "update votes set ngcobo=ngcobo+1";
    $run_ngcobo = mysqli_query($con,$vote_ngcobo);

    if($run_ngcobo) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Nkosingiphile Ngcobo !!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['lepase']))
{
    $vote_lepase = "update votes set lepase=lepase+1";
    $run_lepase = mysqli_query($con,$vote_lepase);

    if($run_lepase) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Zakhele Lepase !!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['zuma']))
{
    $vote_zuma = "update votes set zuma=zuma+1";
    $run_zuma = mysqli_query($con,$vote_zuma);

    if($run_zuma) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Dumisani Zuma !!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['pule']))
{
    $vote_pule = "update votes set pule=pule+1";
    $run_pule = mysqli_query($con,$vote_pule);

    if($run_pule) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Vincent Pule!!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['nurkovic']))
{
    $vote_nurkovic = "update votes set nurkovic=nurkovic+1";
    $run_nurkovic = mysqli_query($con,$vote_nurkovic);

    if($run_nurkovic) {
        echo"<h2 align='center'> Your Vote Has Been Cast For Samir Nurkovic !!</h2>";
        echo"<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

if(isset($_POST['lorch']))
{
    $vote_lorch = "update votes set lorch=lorch+1";
    $run_lorch = mysqli_query($con,$vote_lorch);

    if($run_lorch) {
        echo "<h2 align='center'> Your Vote Has Been Cast For Thembinkosi Lorch !!</h2>";
        echo "<h2 align='center'><a href='index.php?results'>View Results</a></h2>";
    }
}

// New Section Started Here
if(isset($_GET['results']))
{
    $get_votes ="select * from votes";
    $run_votes = mysqli_query($con, $get_votes);
    $row_votes = mysqli_fetch_array($run_votes);

          $lorch = $row_votes['lorch'];
          $parker = $row_votes['parker'];
          $motshwari = $row_votes['motshwari'];
          $ngcobo = $row_votes['ngcobo'];
          $lepase = $row_votes['lepase'];
          $zuma = $row_votes['zuma'];
          $pule = $row_votes['pule'];
          $nurkovic = $row_votes['nurkovic'];

     $count = $lorch+$parker+$motshwari+$ngcobo+$lepase+$zuma+$pule+$nurkovic;
     
     $per_lorch = round($lorch*100/count) . "%";
     $per_parker = round($parker*100/count) . "%";
     $per_motshwari = round($motshwari*100/count) . "%";
     $per_ngcobo = round($ngcobo*100/count) . "%";
     $per_lepase = round($lepase*100/count) . "%";
     $per_zuma = round($zuma*100/count) . "%";
     $per_pule = round($pule*100/count) . "%";
     $per_nurkovic = round($nurkovic*100/count) . "%";

     echo "
     <div style='background: orange;  padding: 10px; text-align: center;'>
        <center>
            <h2>Updated Results: </h2>
            <p style='background: black; color: white; padding: 10px; width: 500px;'>
                <b>Thembinkosi Lorch : </b> $lorch ($per_lorch)
            </p>

             <p style='background: black; color: white; padding: 10px; width: 500px;'>
             <b>Bernad Parker : </b> $parker ($per_parker)
           </p>

             <p style='background: black; color: white; padding: 10px; width: 500px;'>
           <b>Ben Motshwari : </b> $motshwari ($per_motshwari)
         </p>

          <p style='background: black; color: white; padding: 10px; width: 500px;'>
          <b>Nkosingiphile Ngcobo : </b> $ngcobo ($per_ngcobo)
        </p>

        <p style='background: black; color: white; padding: 10px; width: 500px;'>
        <b>Zakhele Lepase : </b> $lepase ($per_lepase)
    </p>

        <p style='background: black; color: white; padding: 10px; width: 500px;'>
        <b>Dumisani Zuma : </b> $zuma ($per_zuma)
    </p>

        <p style='background: black; color: white; padding: 10px; width: 500px;'>
        <b>Vincent Pule : </b> $pule ($per_pule)
    </p>

        <p style='background: black; color: white; padding: 10px; width: 500px;'>
        <b>Sarmi Nurkovic : </b> $nurkovic ($per_nurkovic)
    </p>
            
        </center>

     </div>
     ";
}

?>
</div>

<div style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 18px; font-weight: 400; background-color: rgb(43, 43, 44);
color: white; text-align: center;width: 100%; padding: 7px; ">
   <h2>Brought By : <strong>STAR PLAYER</strong></h2>
</div>
</body>
</html>