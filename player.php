<head><script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>

</head><script async defer data-domain="gitlin.me" src="https://plausible.io/js/plausible.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div id="player"></div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div id="oper"></div>
<div id="vid"></div>
<script>
 player = new Clappr.Player({
  source: 'https://sonydaimenew.akamaized.net:443/hls/live/2094589-b/DAI05ME-V3/hdntl=exp=1676384664~acl=%2F*~id=afd49c5406a94a0baa2fdc118983157f-1674632366158-180909131365962855~data=hdntl~hmac=146a6ebe24495fbb2cb80b20a04354cba91502985b06ffe91d329a4491851aa5/master_500.m3u8',
  mimeType: "application/vnd.apple.mpegurl",
 autoPlay: true, 
 height: "100%",
 width: "100%",
 plugins: {"core": [LevelSelector]}, 
 parentId: "#vid"});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179030159-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179030159-1');
</script>
