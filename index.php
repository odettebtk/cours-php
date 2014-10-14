<!DOCTYPE html>
<html>
    <head>
        <title>essai de page</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
        $sNOM="braive";
        $sPRENOM="Xavier";
        $sRUE=" de la Sirène";
        $iNo=2;
        $iCP=4000;
        $sVille="liège";
        $ftotalHT=457.00;
        $result=1+1;
        echo $result/2;
        print_r($_POST);
        //filter_input(input_get,"nom")
        //$_GET["nom"]
        ?>
        
        <form action="index.php" method="get">
          nom:<input type="text" name="nom" value="BOT" />
          prenom:<input type="text" name="prenom" value="Odette" />
          <input type="submit" value="buton" name="envoyer" />
        </form>
        <table border="1">
          
            <tbody>
                <tr>
                    <td> Client </td>
                    <td><?php echo $sPRENOM." ".$sNOM ?> </td>
                </tr>
                <tr>
                    <td>Adresse </td>
                    <td><?php echo $iNo.",".$iCP ?> <br> <?php echo $sRUE." ".$sVille ?> </td>
                </tr>
                
                             
                <tr>
                    <td>Montant de la commande HT </td>
                   <td><?php echo $ftotalHT ?> </td>
                </tr>
            </tbody>
        </table>
        
        
   <form action=" .php" method="get">
       <label> Login </label>
       <input> </input> <br>
       
       <label> passe </label>
       <input> </input>
   </form>
    </body>
</html>