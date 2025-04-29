<script>
    function update_all() {
        var ok = new Information("req_sql/all_projet_verif.php"); // création de la classe 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 

    }
    update_all();
</script>