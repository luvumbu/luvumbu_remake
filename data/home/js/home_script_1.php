<script>
    function function_global(_this) {
        var element = afficherValeursFormattees2(_this.className, __);
        var ok = new Information("config/function_global.php"); // création de la classe 
        ok.add("id_sha1_user_projet", element[0]); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(xt, 300);
        function xt() {
            if (element[1] == "insert") {
                window.location.href = "qr_code_1/index.php";
            } else {
                location.reload();
            }
        }
    }
    function a(_this) {
        var element = afficherValeursFormattees2(_this.className, __);
        console.log(element);
        var ok = new Information("config/general_function.php"); // création de la classe 
        // valeur si update       
        if (_this.value == undefined) {
            _this.value = "";
        }
        if (element[5] == undefined) {
            element[5] = "";
        }
        // valeur si update 
        // le tableau a une case en plus dans les parametres 
        if (_this.tagName != "INPUT") {
            ok.add("value", _this.innerHTML); // ajout de l'information pour lenvoi 
        } else {
            ok.add("value", _this.value); // ajout de l'information pour lenvoi 
        }
        ok.add("nom_user", element[0]); // ajout de l'information pour lenvoi 
        ok.add("password_user", element[1]); // ajout de l'information pour lenvoi 
        ok.add("id_user_projet", element[2]); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_user_projet", element[3]); // ajout de l'information pour lenvoi
        ok.add("general_function", element[4]); // ajout de l'information pour lenvoi 
        ok.add("tagName", _this.tagName); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_projet", element[5]); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        if (_this.tagName == "IMG") {
            var add_img = document.getElementById("add_img").className;
            if (add_img == "display_none") {
                document.getElementById("add_img").className = "";
            } else {
                document.getElementById("add_img").className = "display_none";
            }
        }
        if (_this.tagName == "DIV") {
            if (_this.tagName != "img") {
                const myTimeout = setTimeout(xxxx, 250);
            }
        }
        function xxxx() {
            switch (_this.innerHTML) {
                case header_text_1:
                case header_text_2:
                case header_text_3:
                case header_text_4:
                    location.reload();
                    break;
                default:
                    // code block
            }
        }

    }
</script>