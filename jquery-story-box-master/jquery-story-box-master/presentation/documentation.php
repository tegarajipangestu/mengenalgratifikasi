<?php
$effects = array(
  'fadeInUp', 'fadeInRight', 'fadeInDown', 'fadeInLeft', 'fadeInUpBig', 'fadeInRightBig', 'fadeInDownBig',
  'fadeInLeftBig', 'bounceInUp', 'bounceInRight', 'bounceInDown', 'bounceInLeft', 'flipInX', 'flipInY',
  'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight',
  'pulse', 'swing', 'wobble', 'flash', 'tada'
);
$effectsOut = array(
  'hinge', 'fadeOutUp', 'fadeOutRight', 'fadeOutDown', 'fadeOutLeft',
  'fadeOutUpBig', 'fadeOutRightBig', 'fadeOutDownBig', 'fadeOutLeftBig',
  'bounceOutUp', 'bounceOutRight', 'bounceOutDown', 'bounceOutLeft',
  'flipOutX', 'flipOutY',
  'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight'
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Story Box</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <link href="story-box/animate.css" rel="stylesheet" type="text/css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="story-box/jquery.js"></script>
  <script src="story-box/story-box.min.js"></script>
</head>

<body>

<?php require_once('header.php');?>

<div class="container">
  <h2 class="text-success text-center">Documentation</h2>

  <div class="panel panel-primary">
    <div class="panel-heading">
      Including the Library
    </div>
    <div class="panel-body">
      <span style='color:#308080; '>&lt;</span>link href<span style='color:#308080; '>=</span><span style='color:#800000; '>"</span><span style='color:#1060b6; '>story-box/animate.css</span><span style='color:#800000; '>"</span> rel<span style='color:#308080; '>=</span><span style='color:#800000; '>"</span><span style='color:#1060b6; '>stylesheet</span><span style='color:#800000; '>"</span> type<span style='color:#308080; '>=</span><span style='color:#800000; '>"</span><span style='color:#1060b6; '>text/css</span><span style='color:#800000; '>"</span><span style='color:#308080; '>></span>
      <br/>
      <span style='color:#308080; '>&lt;</span>script src<span style='color:#308080; '>=</span><span style='color:#800000; '>"</span><span style='color:#1060b6; '>story-box/story-box.min.js</span><span style='color:#800000; '>"</span><span style='color:#308080; '>></span><span style='color:#308080; '>&lt;</span><span style='color:#308080; '>/</span>script<span style='color:#308080; '>></span>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      Using the Library
    </div>
    <div class="panel-body">
      <p>This library automatically selects all the elements that have the <strong class="text-danger">"data-sb"</strong> HTML Attribute.</p>
      <p><strong class="text-danger">Each element can have it's own effect</strong></p>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Available Entrance Effects
    </div>
    <div class="panel-heading">
      <p>Param : <strong class="text-danger">"data-sb"</strong></p>
      <p>Click any of them for a preview.</p>
    </div>
    <div class="panel-body">
      <div class="row">
        <?php $i = 1;foreach($effects as $effect) : ?>
          <div class="col-md-2">
            <a class="btn btn-default" href="clubix/index.php?effect=<?php echo $effect;?>&hide-effect=fadeOutUp" class="btn btn-primary">
              <?php echo $effect;?>
            </a>
          </div>
          <?php echo ($i % 4 == 0) ? '<div class="clearfix"></div><br/>' : '';?>
          <?php $i++;endforeach;?>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      Available Exit Effects <strong class="text-danger">- Optional</strong>
    </div>
    <div class="panel-heading">
      <p>The Exit Effects are optional</p>
      <p>If you don't want to run the entrance effects over and over again, just don't specify the param</p>
      <p>Param : <strong class="text-danger">"data-sb-hide"</strong></p>
    </div>
    <div class="panel-body">
      <div class="row">
        <?php $i = 1;foreach($effectsOut as $effect) : ?>
          <div class="col-md-2">
              <span class="btn btn-default">
                <?php echo $effect;?>
              </span>
          </div>
          <?php echo ($i % 4 == 0) ? '<div class="clearfix"></div><br/>' : '';?>
          <?php $i++;endforeach;?>
      </div>
    </div>
  </div>
</div>
</body>
</html>
