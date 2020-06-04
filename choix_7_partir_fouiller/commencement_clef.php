<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>choix 7 clef</title>
            <link rel="stylesheet" href="commencement_clef.css">
        </head>
        <body>
         
            <p>Mon téléphone a sonner pour me rappeler que ce midi je dois aller dejeuner chez mes grand-parents.</p>
            <p>Je decide de</p>
            

        <form method="post" action="choix_partir/choix_partir_clef.php">
            <label for="partir" class="choix" id="partir_label">partir maintenant pour ne pas être en retard.</label> 
<br/><br/>
                <input type="submit" name="partir" id="partir" value="Partir" class="btn">
        </form>
    
    
        <form method="post" action="choix_rester/choix_rester_clef.php">
            <label for="rester" class="choix" id="rester_label">continuer de fouiller encore un peu.</label>
<br/><br/>  
                <input type="submit" name="rester" id="rester" value="Rester" class="btn">
        </form>          
                  
             <!--     
            <figure>
               <audio autoplay muted controls loop src="septahelix-triptych-of-snippets-choix_remixer.mp3" >la musique</audio>
            </figure>
        -->
             
        </body>
    </html>