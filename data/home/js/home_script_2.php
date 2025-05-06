<script>
    function b(_this) {
        const myTimeout = setTimeout(x, 250);

        function x() {
            var textInput2 = document.getElementById("textInput2" + _this.title).value;
            var textInput0 = document.getElementById("textInput" + _this.title).innerHTML;
            var element = afficherValeursFormattees2(_this.className, __);
            console.log(element);

        }

    }

    function remove_all(_this) {


        var ok = new Information("config/remove_all.php"); // création de la classe 
        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);
        ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        location.reload();
    }


    function add_child(_this) {


        var ok = new Information("config/add_child.php"); // création de la classe 
        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);
        ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
        ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
        ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
        ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
        ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 



        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(xxx, 250);

        function xxx() {
            window.location.href = "qr_code_1/index2.php";





        }
    }



    function add_calendar(_this) {
        var ok = new Information("config/add_calendar.php"); // création de la classe 
        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);
        ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
        ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
        ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
        ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
        ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 



        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
    }





    function my_date_remove(_this) {






        document.getElementById("my_date_" + _this.className).value = "";








        var ok = new Information("config/my_date_remove.php"); // création de la classe 
        var element = afficherValeursFormattees2(_this.className, __);

        ok.add("heure_debut_projet", ""); // ajout de l'information pour lenvoi 

        ok.add("id_sha1_projet", _this.className); // ajout de l'information pour lenvoi 



        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 





    }

    function visivility(_this) {





        var element = afficherValeursFormattees2(_this.className, __);





        var visivility = "";





        if (_this.src == visible_1) {
            _this.src = visible_2;
            visivility = "(0-0)";
        } else {
            _this.src = visible_1;
            visivility = "";


        }




    }

    function add_img2(_this) {
        document.getElementById("add_img").className = "";
    }

    function change_color(_this) {




        var element = afficherValeursFormattees2(_this.className, " ");

        var ok = new Information("config/change_color.php"); // création de la classe 


        ok.add("id_sha1_projet", element[0]); // ajout de l'information pour lenvoi 
        ok.add("color_projet", _this.value); // ajout de l'information pour lenvoi 



        document.getElementById("parent_" + element[0]).style = "border: 5px solid " + _this.value;


        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
    }

    function select_img(_this) {

        _this.style.display = "none";
        var element = afficherValeursFormattees2(_this.className, __);
        element[0] = element[0].replace(" ", "");
        var ok = new Information("config/select_img.php"); // création de la classe 
        ok.add("id_sha1_projet", element[1]); // ajout de l'information pour lenvoi 
        ok.add("img_projet_src1", element[0]); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(xx, 250);

        function xx() {
            location.reload();
        }
    }

    function remove_img(_this) {
        _this.style.display = "none";
        var element = afficherValeursFormattees2(_this.className, "__");
        element[0] = element[0].replace(" ", "");
        var ok = new Information("config/remove_img.php"); // création de la classe 
        ok.add("id_sha1_projet", element[1]); // ajout de l'information pour lenvoi 
        ok.add("img_projet_src1", element[0]); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(xx, 250);

        function xx() {
            location.reload();
        }

    }
</script>