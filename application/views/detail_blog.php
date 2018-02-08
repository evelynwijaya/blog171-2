
<div class="top">
  <br><br><br><br>
</div>
<?= $blog['foto']."<br>" ?>
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

   <?=$blog['nama']."<br>"?>
</p>
<div class="form-group" id="bt_edit">
  <input type="submit" class="btn btn-primary btn-lg" value="Edit">
</div>

<div class="form-group" id="bt_delete">
  <input type="submit" class="btn btn-primary btn-lg" value="Delete">
</div>
<br>
