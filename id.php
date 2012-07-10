<?php
$id = $_GET["id"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HF-Translate</title>
<script type="text/javascript">
var id = "<?php echo $id; ?>";

function start(){
    if( id.indexOf("|") > 0 ) {
        cid = id.split("|");
    } else {
        cid = id.split(":");
    }
    window.location = "steam://friends/add/" + cid;
}
</script>

</head>
<body onLoad="start()">
</body>
</html>