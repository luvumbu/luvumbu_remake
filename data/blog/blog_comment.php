 <style>
     .commentaires {
         max-width: 700px;
         margin: auto;
     }

     h2 {
         margin-bottom: 20px;
     }

     .commentaire {
         border-left: 4px solid #007bff;
         padding-left: 15px;
         margin-bottom: 30px;
     }

     .commentaire strong {
         display: block;
         font-weight: bold;
         margin-bottom: 5px;
     }

     .commentaire time {
         display: block;
         font-size: 0.9em;
         color: #666;
         margin-bottom: 5px;
     }

     .commentaire p {
         margin: 0;
     }

     .formulaire {
         margin-top: 40px;
     }

     .formulaire textarea {
         width: 100%;
         height: 120px;
         padding: 10px;
         font-size: 1em;
         resize: vertical;
         border: 1px solid #ccc;
         border-radius: 5px;
     }

     .formulaire button {
         margin-top: 15px;
         width: 100%;
         padding: 15px;
         font-size: 1em;
         background-color: #007bff;
         color: white;
         border: none;
         border-radius: 6px;
         cursor: pointer;
         transition: background 0.3s;
     }

     .formulaire button:hover {
         background-color: #0056cc;
     }
 </style>

 <div class="commentaires" id="commentaires_1">
     <h2>Commentaires récents</h2>
     <?php


        for ($i = 0; $i < count($row_projet_comment); $i++) {

        ?>

         <div class="commentaire">
             <strong>ADMIN</strong>
             <time><?= formaterDateFr($row_projet_comment[$i]["date_inscription_comment"]) ?></time>
             <p><?= AsciiConverter::asciiToString($row_projet_comment[$i]["id_comment_text"]) ?></p>
         </div>
     <?php
        }
        ?>
 </div>

 <div class="commentaires" id="commentaires_2">
     <div class="formulaire">
         <h2>Laissez un commentaire</h2>

         <textarea id="message" placeholder="Votre commentaire" required></textarea>
         <button type="submit" onclick="envoyer_comment(this)">Envoyer</button>

     </div>
 </div>
 </body>



 <script>
     function envoyer_comment(_this) {


         document.getElementById("commentaires_1").style.display = "none";

         _this.style.display = "none";
         const id_comment_text_ = document.getElementById("message").value;
         var ok = new Information("../req_sql/envoyer_comment.php"); // création de la classe 
         ok.add("id_comment_text", id_comment_text_); // ajout de l'information pour lenvoi 
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 
         const myTimeout = setTimeout(x, 1000);

         function x() {
               location.reload();
         }


     }
 </script>