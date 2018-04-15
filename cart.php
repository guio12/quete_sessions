<?php require 'inc/head.php'; 

if (!isset($_SESSION['loginname']))
{
        header('Status: 301 Moved Permanently', false, 301); header('Location: login.php'); exit();
}


?>




<section class="cookies container-fluid">
    <div class="row">
     
     <h2>Panier</h2>
     
     <table class="table table-bordered">
         <thead>
             <tr>
                 <th>Produit</th>
             </tr>
         </thead>
         <tbody>
            <?php
             
             foreach ($_SESSION['cart'] as $panier)
             {
                 echo "<tr><td>".$panier."</tr></td>";
             }
             
             ?>
             
         </tbody>
     </table>
     
     
     
    </div>
</section>
<?php require 'inc/foot.php'; ?>
