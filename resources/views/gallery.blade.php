@extends('layouts.main')

@section('container')
<style>
.container {
  display: grid; 
  grid-template-columns: 250px 250px 250px; 
  grid-template-rows: 250px 250px 250px; 
  gap: 10px 10px; 
  grid-template-areas: 
    "polnareff hatsune_miku rubah"
    "rehan anime2 itachi"
    "armor_knight obito among_us"; 
  justify-content: center; 
}
.polnareff { grid-area: polnareff; }
.anime2 { grid-area: anime2; }
.rehan { grid-area: rehan; }
.armor_knight { grid-area: armor_knight; }
.hatsune_miku { grid-area: hatsune_miku; }
.obito { grid-area: obito; }
.rubah { grid-area: rubah; }
.itachi { grid-area: itachi; }
.among_us { grid-area: among_us; }
</style>
<center>
<img src="images/crop.png" alt="crop" width="250x">
<br><br>
<h1>Muhammad Rifki Fadhilah</h1>
<br>
<hr>
</center>
<body>
    <div class="container">
        <div class="polnareff"><img src="images/polnareff.jpg"></div>
        <div class="anime2"><img src="images/garou.jpg"></div>
        <div class="rehan"><img src="images/rehan.jpg"></div>
        <div class="armor_knight"><img src="images/goblin slayer.jpg"></div>
        <div class="hatsune_miku"><img src="images/hueco mundo.jpg"></div>
        <div class="obito"><img src="images/ulat rokok.jpg"></div>
        <div class="rubah"><img src="images/walpaper.jpg"></div>
        <div class="itachi"><img src="images/ghoul.jpg"></div>
        <div class="among_us"><img src="images/among us.jpg"></div>
    </div>
</body>
@endsection

