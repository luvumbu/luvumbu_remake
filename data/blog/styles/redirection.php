<?php 
 
?>
<div class="card-buttons">
  <a href="../index.php" class="btn_2">🏠 Menu principal</a>
<?php 

if($id_sha1_parent_projet[0]!="") {
  // Si l'ID du projet parent existe, afficher le bouton
  echo '<a href="'.$id_sha1_parent_projet[0].'" class="btn_2">⬅️ Parent de l’article</a>';
}
?>


</div>

<style>

  .btn_2{
    padding: 10px;

border: 1px solid #ccc;

  }
  .btn_2:hover{
background-color:  #ccc;
  }
  .card-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
  width: 80%;
  margin: auto;
  
}

.card-buttons .btn {
  background: #007bff;
  color: white;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 6px;
  font-size: 14px;
  transition: background 0.3s ease;
}

.card-buttons .btn:hover {
  background: #0056b3;
}

</style>