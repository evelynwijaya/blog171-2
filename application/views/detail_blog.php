
<div class="top">
  <br><br><br><br>
</div>

<?php
echo "<img src=\"/asset/images/blog/".$blog['blog_ID'].".".$blog['foto']."\">";
?>

<h1><?= $blog['judul']."<br>" ?></h1>
<h4>Bahan Yang dibutuhkan:</h4>
<p>
   <?="<br>". $blog['bahan']."<br>"?>
</p>
<h4>Cara membuat:</h4>
<p>
   <?=$blog['cara']."<br>"?>
</p>

<h4>DiTulis Oleh:</h4>
<p>
  <?php
  echo "<a href='/user/" . $blog['user_ID'] ."'>" . $blog['nama']."<a><br>";
  ?>
</p>




    <div class="form-group" id="bt_edit">
      <a href="/blog/delete/<?= $blog['blog_ID'] ?>">DELETE</a><br>
    </div>
    <div class="form-group" id="bt_delete">
      <a href="/blog/edit/<?= $blog['blog_ID'] ?>">EDIT</a><br>
    </div>

<br>
