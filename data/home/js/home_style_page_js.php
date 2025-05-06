 
<script>
    function btn_input(_this) {
        _this.style.display = "none";
        var name_style_pages = document.getElementById("name_style_pages").value;
        var header_style_pages = document.getElementById("header_style_pages").value;
        var total_style_pages = document.getElementById("total_style_pages").value;
        var total_style_text_pages = document.getElementById("total_style_text_pages").value;
        var total_style_parent_pages = document.getElementById("total_style_parent_pages").value;
        var ok = new Information("config/style_pages.php"); // création de la classe 
        ok.add("name_style_pages", name_style_pages); // ajout de l'information pour lenvoi 
        ok.add("header_style_pages", header_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_pages", total_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_text_pages", total_style_text_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_parent_pages", total_style_parent_pages); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(reload_, 250);
        function reload_() {
            location.reload();
        }
    }
    function btn_update(_this) {
        _this.style.display = "none";
        var name_style_pages = document.getElementById("name_style_pages_" + _this.title).value;
        var header_style_pages = document.getElementById("header_style_pages_" + _this.title).value;
        var total_style_pages = document.getElementById("total_style_pages_" + _this.title).value;
        var total_style_text_pages = document.getElementById("total_style_text_pages_" + _this.title).value;
        var total_style_parent_pages = document.getElementById("total_style_parent_pages_" + _this.title).value;
        var ok = new Information("config/syle_pages_update.php"); // création de la classe 
        ok.add("name_style_pages", name_style_pages); // ajout de l'information pour lenvoi 
        ok.add("header_style_pages", header_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_pages", total_style_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_text_pages", total_style_text_pages); // ajout de l'information pour lenvoi 
        ok.add("total_style_parent_pages", total_style_parent_pages); // ajout de l'information pour lenvoi 
        ok.add("id_sha1_style_page", _this.title); // ajout de l'information pour lenvoi 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 
        const myTimeout = setTimeout(reload_, 250);
        function reload_() {
           _this.style.display = "block";
        }

    }
</script>