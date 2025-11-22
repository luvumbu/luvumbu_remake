    <div class="container">
        <div class="grid">
            <main id="posts">


       




<?php

 
 
for ($i = 0; $i < count($title_projet_a); $i++) {



  if($visibility_1_projet_a[$i]!=""){





     $title_projet_a_1 =     replace_element_1(AsciiConverter::asciiToString($title_projet_a[$i]))  ;
     $title_projet_a_2 =     replace_element_2(AsciiConverter::asciiToString($title_projet_a[$i]))  ;
     $description_projet_a_1 =     replace_element_1(AsciiConverter::asciiToString($description_projet_a[$i]))  ;
     $description_projet_a_2 =     replace_element_2(AsciiConverter::asciiToString($description_projet_a[$i]))  ;
       
     $title_projet_a_1_final ="";
     echo '<div id="' . $id_sha1_projet_a[$i] . '"';
            echo '</div>';
            if($title_projet_toggle_a[$i]!=""){
            echo '<div class="section_1_1">';
            echo "<h1>";
                 // echo  $title_projet_a_1;

     $title_projet_a_1_final =$title_projet_a_1;

            echo '</h1>';
            echo '</div>';
            }
            else{
            echo '<div class="section_1_1">';
            echo "<h1>";
           
                $title_projet_a_1_final =$title_projet_a_2;

            echo '</h1>';
            echo '</div>';

         
/*
$req_sql = 'SELECT * FROM `projet` WHERE `id_sha1_parent_projet`="'.$id_sha1_projet_a[$i].'" ';
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name("projet", "x", $req_sql);
$req_sql = 'SELECT * FROM `projet_img` WHERE `id_sha1_projet_img`="'.$id_sha1_projet_a[$i].'" ';
$db = new DatabaseHandler($dbname, $username);
// Appel de la fonction
$result = $db->know_variables_name("projet_img", "x", $req_sql);

*/


}
echo "<div class='projet-images'>";
  $src_last="";

  /*
for ($ii = 0; $ii < count($id_projet_imgx); $ii++) {
 
   if ($img_activatex[$ii] != "") {
       $ext = isset($extention_imgx[$ii]) ? $extention_imgx[$ii] : '';
       $src = "../img_dw/uploads/copy/" . $img_projet_src_imgx[$ii] . '_400px' . $ext;
        $src_last = $src ;

 
   }
}
 
*/



//$img_projet_src1_a[$i] = "../img_dw/uploads/copy/" .$src_last ;
$src_last = '../img_dw/'.$img_projet_src1_a[$i] ;
echo "</div>";




 
?>
                <article class="post-card" data-keywords="javascript,tutoriel,web" data-title="Débuter en JavaScript">


<?php 


 if($id_sha1_projet_lock_a[$i]!="1"){
 
$description_projet_a_1 = "<div class='verrouill'>Cet article est verrouillé.</div>"  ;
$src_last = "https://i.pinimg.com/736x/26/8b/82/268b8219e6bba4500f49f525e750e53a.jpg";
 }
 else{
   
 }

if($description_projet_toggle_a[$i]==""){


?>

                    <h2><?=     $title_projet_a_1_final ?></h2>
                    <div class="div_article_img">
                     
                    </div>
                    <div class="meta"><?php  echo '<div class="date_inscription">' ; 
echo format_date_europeenne($date_inscription_projet_a[$i]) ;
echo '</div>' ;  ?></div>
                    <div class="excerpt"><?=   $description_projet_a_1; ?></div>
               
              
<?php
}
else{



?>

               
                                      <h2><?=     $title_projet_a_1_final ?></h2>

                    <div class="div_article_img">
                                    <div class="div_article_img">


                                    <?php 

if($src_last=="../img_dw/"){
    $src_last ="https://i.pinimg.com/736x/2f/ff/60/2fff60b4baa56053c732611728d4cc99.jpg";
 

}
?>
                        <img src="<?=  $src_last ?> "
                            alt="JavaScript">
                    </div>
                    </div>
                    <div class="meta"><?php  echo '<div class="date_inscription">' ; 
echo format_date_europeenne($date_inscription_projet_a[$i]) ;
echo '</div>' ;  ?></div>
                    <div class="excerpt"><?=   $description_projet_a_1; ?></div>
          
             
<?php 

}

 
$description_projet_boucle = $description_projet ; 
 $nombre_0 = $i;
 
 
if($id_sha1_projet_song_a[$i]!=""){
 

   if($id_sha1_projet_lock_a[$i]!="1"){
 
   }
   else{
     require "data/blog/blog_index_1_1_audio_1.php" ; 
   }
}
$img_user_b_ = $img_projet_src1_a[$i];


   if($id_sha1_projet_lock_a[$i]!="1"){
 ?>
<div class="section_3_1_">
    <a href="<?= $id_sha1_projet_a[$i] ?>" class="cta-button cta-primary">Déverouller l'article ici</a>
</div>
 <?php 
   }
   else


    {
?>

<div class="section_3_1_">
    <a href="<?= $id_sha1_projet_a[$i] ?>" class="cta-button cta-primary">Voir page complete</a>
</div>

<?php 
    }



?>



</article>



<?php 

}     

 }
 

 
?>
 



 

     </main>

             <aside>
                <div class="card">
                    <h3>Rechercher — astuces</h3>
                    <p class="small">Tape un mot-clé (ex: "php", "css", "athletisme") et les articles correspondant
                        s'afficheront automatiquement.</p>
                </div>

                <div style="height:12px"></div>

                <div class="card">
                    <h3>Articles populaires</h3>
                    <ul class="popular">
                        <li><a href="#">Débuter en JavaScript</a></li>
                        <li><a href="#">Organiser son projet PHP</a></li>
                        <li><a href="#">Astuce CSS — grilles et responsive</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>


    
  <script>
    // Recherche par mot-clé simple — filtre en temps réel
    (function(){
      const input = document.getElementById('searchInput');
      const posts = Array.from(document.querySelectorAll('#posts .post-card'));

      function normalize(str){
        return (str||'').toString().trim().toLowerCase();
      }

      function matches(post, q){
        if(!q) return true;
        const terms = q.split(/\s+/).filter(Boolean).map(normalize);
        const data = normalize(post.dataset.keywords + ' ' + post.dataset.title + ' ' + post.innerText);
        return terms.every(t => data.indexOf(t) !== -1);
      }

      function render(){
        const q = input.value;
        let anyVisible = false;
        posts.forEach(p => {
          if(matches(p,q)){
            p.style.display = '';
            anyVisible = true;
          } else {
            p.style.display = 'none';
          }
        });
        // Si aucun résultat, afficher un message
        let noEl = document.getElementById('no-results');
        if(!anyVisible){
          if(!noEl){
            noEl = document.createElement('div');
            noEl.id = 'no-results';
            noEl.style.marginTop = '8px';
            noEl.style.padding = '12px';
            noEl.style.background = 'rgba(255,255,255,0.02)';
            noEl.style.border = '1px solid rgba(255,255,255,0.03)';
            noEl.style.borderRadius = '8px';
            noEl.innerText = 'Aucun article ne correspond à votre recherche.';
            document.querySelector('main').appendChild(noEl);
          }
        } else if(noEl){
          noEl.remove();
        }
      }

      input.addEventListener('input', render);

      // Recherche si l'utilisateur presse Enter: focus premier résultat
      input.addEventListener('keydown', function(e){
        if(e.key === 'Enter'){
          const first = posts.find(p => p.style.display !== 'none');
          if(first){
            first.scrollIntoView({behavior:'smooth', block:'start'});
            first.style.boxShadow = '0 6px 18px rgba(0,0,0,0.6)';
            setTimeout(()=> first.style.boxShadow = '', 1400);
          }
        }
      });

      // initial render
      render();

    })();
  </script>
 
<style>
  .section_3_1_{
    padding: 15px;
    text-align: center;
    width: 250px;
    background-color: aquamarine;
  }
  .section_3_1_ a{
    text-decoration: none;
    color: rgba(200, 0, 0, 0.6);
  }
  .verrouill{
    background-color: rgba(200, 0, 0, 0.6);
        padding: 15px;
    text-align: center;
    width: 250px;
    color: white;
    margin-bottom: 25px;
  }
</style>