<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>choix 5 clef</title>
            <link rel="stylesheet" href="commencement_clef.css">
        </head>
        <body>
          
          
            <p>Dans la maison une piéce m'interpelle, c'est la bibliotheque.</p>
            <p>Je décide de commencer par cette piéce. Je vais</p>
            

            
        <form method="post" action="choix_carton/choix_carton_clef.php">
            <label for="carton" class="choix" id="carton_label">observer les cartons.</label> 
<br/><br/>
                <input type="submit" name="carton" id="carton" value="Carton" class="btn">
        </form>
    
    
        <form method="post" action="choix_bibliotheque/choix_bibliotheque_clef.php">
            <label for="bibliotheque" class="choix" id="bibliotheque_label">observer la bibliotheque.</label>
<br/><br/>  
                <input type="submit" name="bibliotheque" id="bibliotheque" value="Bibliotheque" class="btn">
        </form>          
                  
                 <!-- 
            <figure>
               <audio autoplay muted controls loop src="septahelix-triptych-of-snippets-choix_remixer.mp3" >la musique</audio>
            </figure>
          
          
          -->
          
        </body>
    </html>