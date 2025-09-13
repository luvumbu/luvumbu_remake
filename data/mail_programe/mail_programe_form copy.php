 

<style>
 
.form-container {
    width: 80%;
    max-width: 500px;
    margin: 30px auto;
    padding: 20px;
    background-color: #f9f9f9; /* fond très clair */
    border-radius: 6px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
    color: #333;
}

.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
    font-weight: normal;
}

.form-container label {
    display: block;
    margin-bottom: 5px;
    font-size: 1em;
}

.form-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
    box-sizing: border-box;
    transition: border-color 0.2s ease;
}

.form-container input:focus {
    border-color: #999; /* léger accent au focus */
    outline: none;
}

.form-container .submit {
    display: block;
    text-align: center;
    background-color: #e0e0e0; /* gris clair */
    color: #333;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

.form-container .submit:hover {
    background-color: #d0d0d0; /* gris un peu plus foncé au hover */
}
</style>

 

 

 

    <div class="form-container"  >
        <h2>Enregistrer une adresse mail</h2>
        <form method="POST" action="">
            <label for="nom">Nom</label>
            <input type="text" id="name_mail_user" name="nom" placeholder="Entrez votre nom" required>

            <label for="email">Adresse email</label>
            <input type="email" id="info_mail_user" name="email" placeholder="Entrez votre email" required>

            <div class="submit" type="submit" onclick="submit(this)">Enregistrer</div>
        </form>
    </div>



    <script>
        function submit(_this) {
_this.style.display="none";
            const name_mail_user = document.getElementById("name_mail_user").value;
            const info_mail_user = document.getElementById("info_mail_user").value;
            var ok = new Information("req_sql/mail_submit.php"); // création de la classe 
            ok.add("name_mail_user", name_mail_user); // ajout de l'information pour lenvoi 
            ok.add("info_mail_user", info_mail_user); // ajout d'une deuxieme information denvoi  
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 



            const myTimeout = setTimeout(myGreeting, 300);

            function myGreeting() {
                location.reload() ; 
            }





        }
    </script>