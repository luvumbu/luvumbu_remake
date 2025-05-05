 <script>
   function add_projet(_this) {
     var ok = new Information("req_sql/add_projet.php"); // création de la classe 
     //  ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
     console.log(ok.info()); // demande l'information dans le tableau
     ok.push();// envoie l'information au code pkp 
     _this.style.display = 'none';
     const myTimeout = setTimeout(myGreeting, 250);
     function myGreeting() {
      const myTimeout = setTimeout(x, 1000);
       function x() {
        var ok = new Information("qr_code_1/index.php"); // création de la classe 
         //  ok.add("password", "root"); // ajout d'une deuxieme information denvoi  
         console.log(ok.info()); // demande l'information dans le tableau
          ok.push(); // envoie l'information au code pkp 
          location.reload();
       }
     }
   }
 </script>