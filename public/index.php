<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie ie6" lang="en-GB"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie ie7" lang="en-GB"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie ie8" lang="en-GB"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9" lang="en-GB"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en-GB"> <!--<![endif]-->
<head>
  <title>A-Frame Lab</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="../../../assets/build/css/styles.css">
  <script src="https://aframe.io/releases/0.5.0/aframe.js"></script>
  <script src="https://npmcdn.com/aframe-animation-component@3.0.1"></script>
  <script src="https://npmcdn.com/aframe-event-set-component@3.0.1"></script>
  <script src="https://npmcdn.com/aframe-layout-component@3.0.1"></script>
  <script src="https://npmcdn.com/aframe-template-component@3.1.1"></script>
</head>

<body>

  <div class="ui">A-Frame Labs</div>

  <a-scene>

    <a-assets>
      <!-- Preloading assets -->
      <img id="dining-room" crossorigin="anonymous" src="images/dining-room-skybox.JPG">
      <img id="cubes" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/cubes.jpg">
      <img id="cubes-thumb" crossorigin="anonymous" src="images/door-icon.png">
      
      <!-- Image link template to be reused. -->
        <script id="link" type="text/html">
          <a-entity class="link"
            geometry="primitive: plane; height: 1; width: 1"
            material="shader: flat; src: ${thumb}"
            event-set__1="_event: mousedown; scale: 1 1 1"
            event-set__2="_event: mouseup; scale: 1.2 1.2 1"
            event-set__3="_event: mouseenter; scale: 1.2 1.2 1"
            event-set__4="_event: mouseleave; scale: 1 1 1"
            set-image="on: click; target: #image-360; src: ${src}"
            sound="on: click; src: #click-sound"></a-entity>
        </script>
    </a-assets>

    <!-- 360-degree image. -->
    <a-sky id="image-360" radius="10" src="#dining-room"></a-sky>

    <!-- Image links. -->
    <!-- position="-2 -0.3 -0.8" rotation="0 20 0" -->
    <a-entity id="links" layout="type: line; margin: 1.5" position="-1.12 -1 -7" rotation="0 20 0">
      <a-entity template="src: #link" data-src="#cubes" data-thumb="#cubes-thumb"></a-entity>
    </a-entity>

    <!-- Camera + cursor. -->
    <a-entity camera look-controls>
      <a-cursor id="cursor"
        animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
        animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
        event-set__1="_event: mouseenter; color: springgreen"
        event-set__2="_event: mouseleave; color: black"
        raycaster="objects: .link"></a-cursor>
    </a-entity>

  </a-scene>

<script src="../../../assets/src/js/libs/modernizr-custom.js"></script>
<script src="../../../assets/src/js/libs/jquery-1.12.4.min.js"></script>
<script src="../../../assets/src/js/libs/enquire.min.js"></script>
<script src="../../../assets/src/js/app.js"></script>
</body>
</html>
