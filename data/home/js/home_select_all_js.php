 
  <script>
    function child_element(_this) {
      _this.style.display = 'none';
      var ok = new Information("req_sql/child_element.php"); // création de la classe 
      ok.add("child_element", _this.title); // ajout de l'information pour lenvoi 
      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 
      const myTimeout = setTimeout(myGreeting, 250);
      function myGreeting() {
        location.reload();
      }
    }
  </script>