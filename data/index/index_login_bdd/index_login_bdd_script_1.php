<script>
        function login_bdd_() {
            const dbname = document.getElementById("dbname").value;
            const username = document.getElementById("username").value;
            var ok = new Information("req/login_bdd.php"); // création de la classe 
            ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
            ok.add("username", username); // ajout d'une deuxieme information denvoi  
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 
            const myTimeout = setTimeout(login_bdd_, 250);
            function login_bdd_() {
          location.reload() ;
            }
        }
    </script>