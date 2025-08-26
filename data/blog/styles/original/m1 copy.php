 </head>

 <body>






   <div class="menu_burger_">
     <div class="menu_burger cursor_pointer" onclick="nav_div()">
       <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/menu--v1.png" alt="menu--v1" />
     </div>
   </div>



   <div id="nav_div" class="display_none">

     <?php
      $c_title_projet = count($title_projet);
      for ($i = 0; $i < $c_title_projet; $i++) {
        $id_sha1_projet_ = '#' . $id_sha1_projet[$i];
      ?>



       <a class="decoration_none" href="<?= $id_sha1_projet_ ?>">



         <div class="padding_10">
           <?= replace_element_2($title_projet[$i]) ?>
         </div>
       </a>
     <?php } ?>
   </div>

   <style>
     .nav_div {
       background-color: black;
       text-align: center;
       padding: 10px;

     }

     .nav_div a {
       color: white;
       width: 100%;

     }

     .nav_div a:hover {
       color: blue;

     }

     .menu_burger {
       background-color: black;


     }
     .decoration_none{
      text-decoration: none;
     }
 
     .cursor_pointer:hover {
       cursor: pointer;
     }

     .display_none {
       display: none;
     }

     .padding_10 {
       padding: 15px;
     }

     .padding_10:hover {
       background-color: grey;
       max-width: 100%;
     }

     body {
       margin: 0;
     }
   </style>

   <script>
     function nav_div() {
       const nav_div = document.getElementById("nav_div").className;

       if (nav_div == "display_none") {
         document.getElementById("nav_div").className = "nav_div";

       } else {
         document.getElementById("nav_div").className = "display_none";

       }


     }
   </script>