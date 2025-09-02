 
<script>
    function verifyConnection_() {    
        const dbname = document.getElementById("dbname").value;
        const username = document.getElementById("username").value;
        var ok = new Information("data/index/req_sql/index_re_sql_verifyConnection.php"); // création de la classe 
        ok.add("dbname", dbname); // ajout de l'information pour lenvoi 
        ok.add("username", username); // ajout d'une deuxieme information denvoi  
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(verifyConnection, 250);

        function verifyConnection() {
        location.reload();
        }
    }
    
</script>