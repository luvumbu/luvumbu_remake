<script>
  function function_visibility(_this) {
    if (_this.src == img_7) {
      _this.src = img_8;
      visibility_1_projet = "1";
    } else {
      _this.src = img_7;
      visibility_1_projet = "";
    }
    var ok = new Information("req_sql/update_visibility.php"); // création de la classe 
    ok.add("visibility_1_projet", visibility_1_projet); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 





    const myTimeout = setTimeout(x, 1000);

function x() {
  update_all();
}



  }

  function function_song(_this) {
    if (_this.src == img_6) {
      _this.src = img_5;
      id_sha1_projet_song = "1";
    } else {
      _this.src = img_6;
      id_sha1_projet_song = "";
    }
    var ok = new Information("req_sql/update_song.php"); // création de la classe 
    ok.add("id_sha1_projet_song", id_sha1_projet_song); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
  
    const myTimeout = setTimeout(x, 1000);

function x() {
  update_all();
}

  }

  function function_done() {
    var ok = new Information("req_sql/function_done.php"); // création de la classe 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(myGreeting, 250);

    function myGreeting() {
      location.reload();
    }



  }

  function function_lock(_this) {
    if (_this.src == img_3) {
      _this.src = img_4;

      id_sha1_projet_lock = "1";
    } else {
      _this.src = img_3;

      id_sha1_projet_lock = "";
    }
    var ok = new Information("req_sql/update_lock.php"); // création de la classe 
    ok.add("id_sha1_projet_lock", id_sha1_projet_lock); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
 
    const myTimeout = setTimeout(x, 1000);

function x() {
  update_all();
}

 
  }

  function toggleToolbar(id) {
    const toolbar = document.getElementById('toolbar-' + id);
    toolbar.style.display = toolbar.style.display === 'flex' ? 'none' : 'flex';
    toolbar.style.flexWrap = 'wrap';
 
  }

  function format(command) {
    document.execCommand(command, false, null);
  }

  function changeFont(font, id) {
    document.getElementById('field-' + id).style.fontFamily = font;
  }

  function changeSize(size, id) {
    document.getElementById('field-' + id).style.fontSize = size;
  }

  function changeColor(color, id) {
    document.getElementById('field-' + id).style.color = color;
  }

  function changeBg(color, id) {
    document.getElementById('field-' + id).style.backgroundColor = color;
  }

  function change_img_select(_this) {
 
 
 document.getElementById("class_img_top").src = 'img_dw/' + _this.title;
 
 
  window.scrollTo(0, 0);
 
    var ok = new Information("req_sql/change_img_select.php"); // création de la classe 
    ok.add("img_projet_src1", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
 /*
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });

    const myTimeout = setTimeout(x, 1000);

function x() {
  update_all();
}

*/

 
  }

  function remove_img_select(_this) {
    _this.style.display = "none";
    const chemin1 = _this.title;
    const chemin2 = document.getElementById("class_img_top").src;
    if (chemin2.includes(chemin1)) {
      document.getElementById("class_img_top").src = "";
      document.getElementById("class_img_top2").src = "";
    }
    document.getElementById(_this.className).style.display = "none";
    var ok = new Information("req_sql/remove_img_select.php"); // création de la classe 
    ok.add("id_projet_img", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 



    const myTimeout = setTimeout(x, 1000);

function x() {
  update_all();
}


  }
</script>


<script>
  function remove_projet(_this) {
    _this.style.display = 'none';
    var ok = new Information("req_sql/remove_projet.php"); // création de la classe 
    //  ok.add("title_projet", field_1); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(myGreeting, 250);

    function myGreeting() {
      location.reload();
    }
  }

  function valider(_this) {
    _this.style.display = 'none';
    const field_1 = document.getElementById("field-1").innerHTML;
    const field_2 = document.getElementById("field-2").innerHTML;
    const field_3 = document.getElementById("field-3").innerHTML;
    const field_4 = document.getElementById("field-4").innerHTML;
    const field_5 = document.getElementById("field-5").innerHTML;
    const field_1_toggle = document.getElementById("field_1_toggle").src;
    const field_2_toggle = document.getElementById("field_2_toggle").src;
    if (field_1_toggle == img_1) {
      field_1_toggle_info = "1";
    } else {
      field_1_toggle_info = "";
    }
    if (field_2_toggle == img_1) {
      field_2_toggle_info = "1";
    } else {
      field_2_toggle_info = "";
    }
    var ok = new Information("req_sql/update_projet.php"); // création de la classe 
    ok.add("title_projet", field_1); // ajout de l'information pour lenvoi 
    ok.add("description_projet", field_2); // ajout de l'information pour lenvoi 
    ok.add("change_meta_name_projet", field_3); // ajout de l'information pour lenvoi 
    ok.add("change_meta_content_projet", field_4); // ajout de l'information pour lenvoi 
    ok.add("google_title_projet", field_5); // ajout de l'information pour lenvoi 
    ok.add("title_projet_toggle", field_1_toggle_info); // ajout de l'information pour lenvoi 
    ok.add("description_projet_toggle", field_2_toggle_info); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(myGreeting, 250);

    function myGreeting() {
    location.reload();
    }
  }


    function valider2(_this) {
    _this.style.display = 'none';
    const field_1 = document.getElementById("field-1").innerHTML;
    const field_2 = document.getElementById("field-2").innerHTML;
    const field_3 = document.getElementById("field-3").innerHTML;
    const field_4 = document.getElementById("field-4").innerHTML;
    const field_5 = document.getElementById("field-5").innerHTML;
    const field_1_toggle = document.getElementById("field_1_toggle").src;
    const field_2_toggle = document.getElementById("field_2_toggle").src;
    if (field_1_toggle == img_1) {
      field_1_toggle_info = "1";
    } else {
      field_1_toggle_info = "";
    }
    if (field_2_toggle == img_1) {
      field_2_toggle_info = "1";
    } else {
      field_2_toggle_info = "";
    }
    var ok = new Information("req_sql/update_projet.php"); // création de la classe 
    ok.add("title_projet", field_1); // ajout de l'information pour lenvoi 
    ok.add("description_projet", field_2); // ajout de l'information pour lenvoi 
    ok.add("change_meta_name_projet", field_3); // ajout de l'information pour lenvoi 
    ok.add("change_meta_content_projet", field_4); // ajout de l'information pour lenvoi 
    ok.add("google_title_projet", field_5); // ajout de l'information pour lenvoi 
    ok.add("title_projet_toggle", field_1_toggle_info); // ajout de l'information pour lenvoi 
    ok.add("description_projet_toggle", field_2_toggle_info); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
 
  }

  function add_child(_this) {


 
    _this.style.display = 'none';
    var ok = new Information("req_sql/add_child.php"); // création de la classe 
    //ok.add("title_projet", field_1); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(myGreeting, 250);

    function myGreeting() {
      location.reload();
    }



    
  }



  function remove(_this) {
    document.getElementById(_this.title).innerHTML = "";
    document.getElementById(_this.title).innerText = "";
  }
</script>
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

  function function_type(_this) {
    _this.style.display = "none";
    var ok = new Information("req_sql/home_function_type_update.php"); // création de la classe 
    ok.add("type_projet", _this.title); // ajout de l'information pour lenvoi 
    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 
    const myTimeout = setTimeout(myGreeting, 0);

    function myGreeting() {
      location.reload();
    }

  }
</script>


<script>
  var ok = new Information("req_sql/updat_all_projet_1.php");
  console.log(ok.info());
  ok.push();








  // On récupère le tableau PHP encodé en JSON
  const idSha1ProjetBoucle = <?php echo json_encode($_SESSION['id_sha1_projet_boucle']); ?>;
  const google_title_projet_boucle = <?php echo json_encode($_SESSION['google_title_projet_boucle']); ?>;



  let index = 0;




  // Vérifie la longueur correcte
  const total = idSha1ProjetBoucle.length;









  function update_all_projet(_this) {


_this.style.display="none" ; 



    const refreshIntervalId = setInterval(function() {

      // On affiche la longueur (inutile d'accéder à [0].length)
      console.log("Total éléments :", total);

      if (index > total) {
        clearInterval(refreshIntervalId);
        console.log("Fin du traitement.");
        return;
      }

      // Exemple de traitement à chaque étape
      console.log("Traitement de :", idSha1ProjetBoucle[index]);

      var ok = new Information("req_sql/updat_all_projet_2.php");
      ok.add("idSha1ProjetBoucle", idSha1ProjetBoucle[index]);
      ok.add("google_title_projet_boucle", google_title_projet_boucle[index]);






      console.log(ok.info());
      ok.push();









      var ok = new Information("req_sql/copie_all.php");

      console.log(ok.info());
      ok.push();










      index++;
    }, 500)

  }
</script>





 


<script>
  function function_stats(_this) {


    if (_this.src == "https://img.icons8.com/ios-filled/40/graph.png") {
      _this.src = "https://img.icons8.com/dotty/50/graph.png";

      document.getElementById("stats").className = "";
    } else {
      _this.src = "https://img.icons8.com/ios-filled/40/graph.png";
      document.getElementById("stats").className = "display_none";


    }

  }
</script>
