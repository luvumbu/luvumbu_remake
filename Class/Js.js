class Information {
    constructor(link) {
        this.link = link;
        this.identite = new FormData();
        this.req = new XMLHttpRequest();
        this.identite_tab = [
        ];
    }
    info() {
        return this.identite_tab; 
    }
    add(info, text){
        this.identite_tab.push([info, text]); 
    }
    push(){
        for(var i = 0 ; i < this.identite_tab.length ; i++){
            console.log(this.identite_tab[i][1]);
            this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
        }		
        this.req.open("POST",this.link);
        this.req.send(this.identite);
        console.log(this.req);	 
    }
}

/*
Explications supplémentaires :
FormData :

FormData est un objet JavaScript qui permet de facilement manipuler les données de formulaire et de les envoyer via des requêtes HTTP.
L'objet FormData est utilisé ici pour accumuler les données à envoyer.
XMLHttpRequest :

C'est un objet JavaScript utilisé pour envoyer des requêtes HTTP vers un serveur.
La méthode open("POST", this.link) ouvre la requête pour une méthode POST vers l'URL spécifiée dans this.link.
La méthode send(this.identite) envoie les données accumulées dans FormData.
Données envoyées :

Le serveur côté PHP ou autre peut recevoir les données sous forme de paires clé/valeur. Par exemple, si le code PHP à l'URL php.php reçoit ces données, il peut les traiter comme suit :
php
Copier le code


<?php
$login = $_POST['login'];
$password = $_POST['password'];
echo "Login: $login, Password: $password";
?>




*/
/*


var ok = new Information("php.php"); // création de la classe 
ok.add("login", "root"); // ajout de l'information pour lenvoi 
ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


*/