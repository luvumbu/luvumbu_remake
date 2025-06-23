<style>
             .petite_img {
             display: flex;
             flex-wrap: wrap;
             /* autorise les retours à la ligne */
             gap: 10px 0;
             /* 10px entre les lignes uniquement */
             max-width: 100%;
             margin: 0 auto;
             justify-content: space-between;

             margin-bottom: 40px;
         }

         .petite_img div {
             width: calc((100% - 20px) / 4);
             /* 3 éléments par ligne, 2 espaces entre */
             aspect-ratio: 1 / 1;
             overflow: hidden;
             position: relative;
         }

         .petite_img div:hover {
             cursor: pointer;
             opacity: 0.5;
         }

         .petite_img img {
             width: 100%;
             height: 100%;
             object-fit: cover;
             display: block;
             border-radius: 8px;
         }

         .display_none {
             display: none;
         }

         * {
             box-sizing: border-box;
         }

         /* Add a gray background color with some padding */
         body {
             font-family: Arial;
             padding: 20px;
             background: #f1f1f1;
         }

         /* Header/Blog Title */
         .header {
             padding: 30px;
             font-size: 40px;
             text-align: center;
             background: white;
         }

         /* Create two unequal columns that floats next to each other */
         /* Left column */
         .leftcolumn {
             float: left;
             width: 75%;
         }

         /* Right column */
         .rightcolumn {
             float: left;
             width: 25%;
             padding-left: 20px;
         }



         /* Add a card_blog effect for articles */
         .card_blog {
             background-color: white;
             padding: 20px;
             margin-top: 20px;
         }

         /* Clear floats after the columns */
         .row:after {
             content: "";
             display: table;
             clear: both;
         }

         /* Footer */
         .footer {
             padding: 20px;
             text-align: center;
             background: #ddd;
             margin-top: 20px;
         }

         /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
         @media screen and (max-width: 800px) {

             .leftcolumn,
             .rightcolumn {
                 width: 100%;
                 padding: 0;
             }
         }

         .description_element {
             max-width: 100%;
             overflow-wrap: break-word;
             word-wrap: break-word;
             /* pour compatibilité */
             word-break: break-word;
             overflow-x: hidden;
         }

         .div_lien {
             border: 1px solid rgba(0, 0, 0, 0.1);
             padding: 15px;
             text-align: center;
             width: 300px;
             margin-top: 25px;
             background-color: rgba(0, 80, 200, 0.12);
         }

         .card_element {
             width: 100%;
             height: 300px;
             overflow: hidden;
             /* Cache ce qui dépasse */
             border: 1px solid #ccc;
             /* (Optionnel) Pour visualiser la div */
             text-align: center;
             margin-top: 45px;

             padding: 10px;
         }

         .card_element img {
             width: 100%;
             height: 100%;
             object-fit: cover;
             /* Garde le ratio, remplit le conteneur sans déformation */
         }




         .display_none {
             display: none;
         }

         .text_center {
             text-align: center;
         }

         .listedesarticles {
             text-align: center;
             padding: 10px;
             border: 1px solid rgba(0, 0, 0, 0.1);

         }

         .listedesarticles:hover {
             cursor: pointer;
             background-color: black;
             color: white;
         }

         .fakeimg {
             margin-top: 25px;
             margin-bottom: 25px;

             width: 100%;

             max-height: 300px;
         }

         .image_grande_div {
             position: fixed;
             background-color: black;
             width: 100%;
             height: 100%;
             top: 0;
         }

         .config_div_img {
             background-color: red;
             width: 50%;
             margin: auto;
             margin-top: 150px;
         }

         .config_div_img img {
             width: 100%;
         }


         .fakeimg {

             /* supprime la hauteur fixe */
             width: 100%;
             overflow: hidden;
         }

         .fakeimg img {
             width: 100%;
             height: auto;
             /* préserve les proportions */
             display: block;
             object-fit: cover;
             /* facultatif : utile si tu veux recadrer sans déformer */
         }

         p {
             text-align: justify;
         }

         .grey {
             color: rgba(0, 0, 0, 0.4);


         }

         .h1_big h2 {

             font-size: 2em;
         }

         .style_general_card {
             text-align: center;
         }
         .comment{
 
            color: white;
            text-align: center;
         }
                 .comment div{
padding: 15px;
background-color: rgba(10, 10, 46, 0.4);

                 }
                     .comment p{
text-align: center;
background-color: rgba(10, 46, 10, 0.1);
color: black;

                     }
</style>