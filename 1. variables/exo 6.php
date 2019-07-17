<!-- 
    C'est les soldes. Un t-shirt qui te plaît coûte 785€ à la base mais ce mois-ci, ton magasin préféré lui applique une ristourne de 30%. Grâce à tes nouvelles connaissances en PHP, affiche le prix de départ, le montant de la ristourne et le prix que tu vas payer sur ton navigateur.
 -->

   <?php
    $Tshirt = 785;
    $discount = 30;
    $finalprice = $Tshirt - ($Tshirt*$discount/100);
    echo "le tshirt coutait $Tshirt euros, mais grace à la ristoune de $discount pourcent, il coute $finalprice euros";
    