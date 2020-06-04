<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>choix 8 forcer</title>
            <link rel="stylesheet" href="commencement_forcer.css">
        </head>
        <body>
        
         <p>Je viens d'arriver chez mes grand parents et je me pose beaucoup de questions. Je suis très troubler par cette photo,
        mais peutetre qu'elle ne signifie rien de speciale. </p>
        <p>Je vais</p>
        
                <form method="post" action="choix_garder/choix_garder_forcer.php">
            <label for="garder" class="choix" id="partir_label">garder cette photo pour moi.</label> 
<br/><br/>
                <input type="submit" name="garder" id="garder" value="Garder" class="btn">
        </form>
    
    
        <form method="post" action="choix_demander/choix_demander_forcer.php">
            <label for="demander" class="choix" id="demander_label">demander a ma grand-mère des explications.</label>
<br/><br/>  
                <input type="submit" name="demander" id="demander" value="Demander" class="btn">
        </form>          
                  
          <!--        
            <figure>
               <audio autoplay muted controls loop src="septahelix-triptych-of-snippets-choix_remixer.mp3" >la musique</audio>
            </figure>
        -->
          
        </body>
    </html>