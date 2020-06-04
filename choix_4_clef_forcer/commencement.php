<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>choix_4</title>
            <link rel="stylesheet" href="commencement.css">
        </head>
        <body>


            
    <p> Je découvre une maison abandonner, je remarque que sur la boite aux lettres est inscrit LAROCHE,
    mon nom de famille.</p>
    <p> J'essaie d'ouvrir la porte mais elle est fermer.</p>
    <p>Je vais</p>
            
        <form method="post" action="choix_clef/choix_clef.php">
            <label for="clef" class="choix" id="clef_label">utiliser la clé qui étais dans l'enveloppe.</label> 
<br/><br/>
                <input type="submit" name="clef" id="clef" value="Clé" class="btn">
        </form>
    
    
        <form name="utiliser_forcer" method="post" action="choix_forcer/choix_forcer.php">
            <label for="forcer" class="choix" id="forcer_label">forcer la porte.</label>
<br/><br/>  
                <input type="submit" name="forcer" id="forcer" value="Forcer" class="btn">
        </form>          
                  
           <!--       
            <figure>
               <audio autoplay muted controls loop src="septahelix-triptych-of-snippets-choix_remixer.mp3" >la musique</audio>
            </figure>
       -->
           
        </body>
    </html>
            
            
          