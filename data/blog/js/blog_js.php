<script>
     function envoyer_comment(_this) {
        _this.style.display="none";
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