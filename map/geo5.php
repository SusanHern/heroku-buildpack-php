<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<script src='../jquery-1.11.1.min.js'></script>
<style>
@import "https://fonts.googleapis.com/css?family=Raleway:100,300,600";


body, input, select, textarea {
		color: #9a9a9a;
		font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 13pt;
		font-weight: 300;
		line-height: 1.65;} 
		
#su{display:none;}
#rr{display:block;}

th{
padding:5px;
font-family: Arial Rounded MT Bold,Helvetica Rounded,Arial,sans-serif; 
font-size:20px;
color:white;
Background: #5385c1;
Border: 1px solid #5385c1;
 text-align: center;
border-top-left-radius: 2em 0.5em;
border-top-right-radius: 2em 0.5em;
border-bottom-right-radius: 0em;
border-bottom-left-radius: 0em;}
tr{border-radius:15%;}
td{background: white;
 text-align: center;
color:#5385c1;;
border-bottom:1px dotted #5385c1;
border-left: 1px solid #5385c1;
padding:4px;
font-family: Verdana,Geneva,sans-serif; 

}
table{border-radius:15%;
margin-bottom:25px;
width:400px;
border-bottom: 2px solid #5385c1;}
#nav{width:100%;
height:50px;

background:white;}
a{text-decoration:none;}
.logo{height:30px;
float:right;
margin:2px;
width:100px;
padding:10px;
background:#5385c1;
border-radius:15%;
color:white;}
.buttonsmall{
height:30px;
width:250px;
padding:10px;
background: #5385c1;
color:white;}
h1{color:white;
margin-left:500px;
margin-top:400px;
font-family: 'Lobster', cursive;}
.header1{
font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 20pt;
		font-weight: 400;
text-align:center;
color: #5385c1;}
.header{
font-family: "Raleway", Arial, Helvetica, sans-serif;
		font-size: 20pt;
		font-weight: 400;
color: #5385c1;}
.ppfull{clear:left;
width:100%;
border-bottom:1px silver dotted;
text-align:left;
padding:5px;
margin:40px;}
.pp{float:left;
width:30%;
border-right:1px silver dotted;
text-align:left;
padding:5px;
margin:4px;}
.image12{
width:100%;
}
p{color:#5a5a5a;
font-size:18px;
font-family: "Raleway", Arial, Helvetica, sans-serif;}</style>

<!DOCTYPE HTML><html><head>
<title>Laundry by Magic Contactors in Your Area</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
<div id='nav'><a class='logo' href="../index.php">Home</a>
<a class='logo' href="../services.php">Services</a>
<a class='logo' href="../prices.php">Prices</a>
<a class='logo' href="../require.php">Require</a>
<a class='logo' href="../offer.php">Offer</a></div>
<div class='ppfull'><center><div class='header'>View Contractors<br />See if we have service in your area.</div><p>Click the view contractors button after location agreement, <br />then click view after your location has appeared in co-ordinates.</p></div></center>
<center>
<div id='demo'>Co-ordinates By Location</div>
<button onclick='getLocation();'>View Available Contractors in your area</button>
<form action='availp.php' name='myform' method='post'><input type='text' value='' name='lat' /><input type='text' value='' name='lon' />
<input type='submit' name='submit' value='View' /></form><p><h2>Or</h2><h4>View By Address</h4></p><p>EG: 2 mystreet rd Suburb Town Postalcode</p><form action='loadmap.php' method='post' name='pform'><input type='text' name='ginput' id='ginput' placeholder='streetname suburb town postalcode' /><input type='hidden' name='lat' /><input type='hidden' name='lng' /><input style='background:gray;height:40px;color:white;text-align:center;padding:20px;width:200px;border-radius:15%;' id='su' type='submit' name='submit' value='View Services' /></form><div style='background:gray;height:10px;color:white;text-align:center;padding:20px;width:200px;border-radius:15%;' id='rr' onclick='geo();'>Click</div><div id='qd'></div><div id='zd'></div>

</center><center><div class='image12'><img src='laundry.jpg' /></div></center>
</body>
<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
myform.lat.value = position.coords.latitude;
myform.lon.value = position.coords.longitude;
}
</script>
<script> 
 function geo() {                   
$.ajax({
  url: 'https://geocoder.cit.api.here.com/6.2/geocode.json',
  type: 'GET',
  dataType: 'jsonp',
  jsonp: 'jsoncallback',
  data: {
    searchtext: document.pform.ginput.value,
    app_id: '',
    app_code: '',
    gen: '8'
  },
  success: function (data) {
    
    
    var str = JSON.stringify(data);
    

    var st = str.indexOf("DisplayPosition")+19;
    var ed = str.indexOf("NavigationPosition")-3;
    var newd = str.substring(st,ed);
    
    var vf = newd.split(',');
        document.pform.lat.value = vf[0].substring(10,vf[0].length);
    document.pform.lng.value = vf[1].substring(12,vf[1].length);
    lax = vf[0].substring(10,vf[0].length);
    lnx = vf[1].substring(12,vf[1].length);
    document.getElementById("su").style.display = "block";
        document.getElementById("rr").style.display = "none";




    
  }
}); } 
</script>

