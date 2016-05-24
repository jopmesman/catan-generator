<html>
  <head>
    <title>Catan</title>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="container">
       <div class="row">
          <img src="../images/header.png" class="img-responsive">
       </div>
       <br>
    </div>
    <div class="container">
      <div class="col-md-12 row">
        <?php
        require_once('../classes/catan_basic_game.class.php');

        $oCatan = new catan_basic_game();
        $generated = $oCatan->get();
        ?>
        <div class="col-md-6">
          <div id="catan_field">
            <div class="catan_field_4_first field_kolom">
              <div class="catan_tile port_<?php echo $generated[1]['tile']; ?> rotate_<?php print $generated[1]['dir']; ?>">
              </div>
              <div class="catan_tile sea rotate_<?php print $generated[2]['dir']; ?>">
              </div>
              <div class="catan_tile port_<?php echo $generated[3]['tile']; ?> rotate_<?php print $generated[3]['dir']; ?>">
              </div>
              <div class="catan_tile sea rotate_<?php print $generated[4]['dir']; ?>">
              </div>
            </div>
            <div class="catan_field_5 field_kolom">
              <div class="catan_tile sea rotate_<?php print $generated[5]['dir']; ?>">
              </div>
              <div id="catan-tile-1" class="catan_tile rotate_<?php print $generated[6]['dir']; ?> <?php print $generated[6]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[6]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-2" class="catan_tile rotate_<?php print $generated[7]['dir']; ?> <?php print $generated[7]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[7]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-3" class="catan_tile rotate_<?php print $generated[8]['dir']; ?> <?php print $generated[8]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[8]['fiche']; ?>">
                </div>
              </div>
              <div class="catan_tile port_<?php echo $generated[9]['tile']; ?> rotate_<?php print $generated[9]['dir']; ?>">
              </div>
            </div>
            <div class="catan_field_6 field_kolom">
              <div class="catan_tile port_<?php echo $generated[10]['tile']; ?> rotate_<?php print $generated[10]['dir']; ?>">
              </div>
              <div id="catan-tile-4" class="catan_tile rotate_<?php print $generated[11]['dir']; ?> <?php print $generated[11]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[11]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-5" class="catan_tile rotate_<?php print $generated[12]['dir']; ?> <?php print $generated[12]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[12]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-6" class="catan_tile rotate_<?php print $generated[13]['dir']; ?> <?php print $generated[13]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[13]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-7" class="catan_tile rotate_<?php print $generated[14]['dir']; ?> <?php print $generated[14]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[14]['fiche']; ?>">
                </div>
              </div>
              <div class="catan_tile sea rotate_<?php print $generated[15]['dir']; ?>">

              </div>
            </div>
            <div class="catan_field_7 field_kolom">
              <div class="catan_tile sea rotate_<?php print $generated[16]['dir']; ?>">

              </div>
              <div id="catan-tile-8" class="catan_tile rotate_<?php print $generated[17]['dir']; ?> <?php print $generated[17]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[17]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-9" class="catan_tile rotate_<?php print $generated[18]['dir']; ?> <?php print $generated[18]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[18]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-10" class="catan_tile rotate_<?php print $generated[19]['dir']; ?> <?php print $generated[19]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[19]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-11" class="catan_tile rotate_<?php print $generated[20]['dir']; ?> <?php print $generated[20]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[20]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-12" class="catan_tile rotate_<?php print $generated[21]['dir']; ?> <?php print $generated[21]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[21]['fiche']; ?>">
                </div>
              </div>
              <div class="catan_tile port_<?php echo $generated[22]['tile']; ?> rotate_<?php print $generated[22]['dir']; ?>">

              </div>
            </div>
            <div class="catan_field_6 field_kolom">
              <div class="catan_tile port_<?php echo $generated[23]['tile']; ?> rotate_<?php print $generated[23]['dir']; ?>">

              </div>
              <div id="catan-tile-13" class="catan_tile rotate_<?php print $generated[24]['dir']; ?> <?php print $generated[24]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[24]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-14" class="catan_tile rotate_<?php print $generated[25]['dir']; ?> <?php print $generated[25]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[25]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-15" class="catan_tile rotate_<?php print $generated[26]['dir']; ?> <?php print $generated[26]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[26]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-16" class="catan_tile rotate_<?php print $generated[27]['dir']; ?> <?php print $generated[27]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[27]['fiche']; ?>">
                </div>
              </div>
              <div class="catan_tile sea rotate_<?php print $generated[28]['dir']; ?>">
              </div>
            </div>
            <div class="catan_field_5 field_kolom">
              <div class="catan_tile sea rotate_<?php print $generated[29]['dir']; ?>">

              </div>
              <div id="catan-tile-17" class="catan_tile rotate_<?php print $generated[30]['dir']; ?> <?php print $generated[30]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[30]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-18" class="catan_tile rotate_<?php print $generated[31]['dir']; ?> <?php print $generated[31]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[31]['fiche']; ?>">
                </div>
              </div>
              <div id="catan-tile-19" class="catan_tile rotate_<?php print $generated[32]['dir']; ?> <?php print $generated[32]['tile']; ?>">
                <div class="fiche fiche_<?php print $generated[32]['fiche']; ?>">
                </div>
              </div>
              <div class="catan_tile port_<?php echo $generated[33]['tile']; ?> rotate_<?php print $generated[33]['dir']; ?>">
              </div>
            </div>
            <div class="catan_field_4_last field_kolom">
              <div class="catan_tile port_<?php echo $generated[34]['tile']; ?> rotate_<?php print $generated[34]['dir']; ?>">

              </div>
              <div class="catan_tile sea rotate_<?php print $generated[35]['dir']; ?>">

              </div>
              <div class="catan_tile port_<?php echo $generated[36]['tile']; ?> rotate_<?php print $generated[36]['dir']; ?>">

              </div>
              <div class="catan_tile sea rotate_<?php print $generated[37]['dir']; ?>">

              </div>
            </div>
          </div>
          <div class="clearboth">&nbsp;</div>
        </div>
        <div class="col-md-6 row">
            <h1>Basic game</h1>
            <a href="/examples/index_basic_game.php" class="btn btn-primary">Regenrate board</a>
            <div class="">
              This is an example of the generated catan board. Hit the button to regenarate a board.
              <br >
            </div>
              &#10096; <a href="../index.php">Go back</a>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
