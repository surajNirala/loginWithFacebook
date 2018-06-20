<!DOCTYPE html>
<html>
<head>
	<title>Profile Image</title>
 <script>
    function setHeight(value) {
        getTag('div_container').style.height = value + 'px';
    }

    function setWidth(value) {
        getTag('div_container').style.width = value + 'px';
    }

    function getTag(id) {
        return document.getElementById(id);
    }
</script>
</head>
<body>
	<div>
        <input type="text" value="200" onChange="setHeight(this.value);"
             placeholder="height">
        <input type="text" value="200" onChange="setWidth(this.value);"           
             placeholder="width">
    </div>
    <br>
    <p>{{$name}}</p>
    <br>
    <p>{{$email}}</p>
    <div id="div_container" style="background: #ff3300;width:200px;   
         height:200px;max-width: 90%; max-height: 90%">
        <img id="imgid" src="{{$image}}" 
            style="min-width: 5%; min-height: 5%; max-width: 90%; max-height: 90%; margin: 5%;">
    </div>
</body>
</html>