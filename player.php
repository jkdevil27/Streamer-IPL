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
  source: 'https://prod-fastly-us-west-2.video.pscp.tv/Transcoding/v1/hls/bdruAYBMgXUmWNYJE_avWiCVQINFrk25GyPFOMMLUi8fq-HcCzkJ44s1NVtUjW0ooBPrUrGZRV7WCf1W8aF7Dg/non_transcode/us-west-2/periscope-replay-direct-prod-us-west-2-public/tw_master_dynamic_highlatency.m3u8?type=live',
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
