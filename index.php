<!DOCTYPE html>
<html>
<head>
<title>Hacked by ./HxHr007</title>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<link rel="shortcut icon" href="http://www.gambaranimasi.org/data/media/781/animasi-bergerak-bendera-indonesia-0010.gif" />
<meta content="Your Security LOW , Please Patch and Make Strong Your System" name="description"/>
<meta content="hacked, hacking, hxhr007, zone-h, defacer, security low, retas, hacker" name="keywords"/>
<meta content="Indonesia" name="geo.placename"/>
<meta content="HxHr007" name="Author"/>
<meta content="general" name="rating"/>
<meta content="id" name="geo.country"/>
<style>
body {
	background-color: #e74c3c;
    cursor: not-allowed;
}

h1 {
	color: #fff;
	font-size: 55px;
	font-family: "Courier New";
}

span {
	color: #fff;
}

#message {
	color: #fff;
}
</style>
<script type="text/javascript">
/*
An object-oriented Typing Text script, to allow for multiple instances.
A script that causes any text inside any text element to be "typed out", one letter at a time. Note that any HTML tags will not be included in the typed output, to prevent them from causing problems. Tested in Firefox v1.5.0.1, Opera v8.52, Konqueror v3.5.1, and IE v6.
Browsers that do not support this script will simply see the text fully displayed from the start, including any HTML tags.

Functions defined:
  TypingText(element, [interval = 100,] [cursor = "",] [finishedCallback = function(){return}]):
    Create a new TypingText object around the given element.  Optionally
    specify a delay between characters of interval milliseconds.
    cursor allows users to specify some HTML to be appended to the end of
    the string whilst typing.  Optionally, can also be a function which
    accepts the current text as an argument.  This allows the user to
    create a "dynamic cursor" which changes depending on the latest character
    or the current length of the string.
    finishedCallback allows advanced scripters to supply a function
    to be executed on finishing.  The function must accept no arguments.

  TypingText.run():
    Run the effect.

  static TypingText.runAll():
    Run all TypingText-enabled objects on the page.
*/

TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;	// Never run.
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	// We haven't finished loading yet.  Have patience.
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";
//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text.
  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
	this.currentText = "";
	this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}
</script>
</head>
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;">
<audio controls autoplay hidden="true" loop="true"><source src="https://api.soundcloud.com/tracks/162536037/stream?client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea" type="audio/ogg"></audio>
<center><img src="https://4.bp.blogspot.com/-F0ph0laxDG0/V3E6rfeT_-I/AAAAAAAAANo/kOeDUQJV8NwMOZLbBS2mr3EsmmwX4AkugCLcB/s1600/HxHr007LogoPNG.png" title="Hacked by ./HxHr007" alt="HxHr007" style="width:300px;height:300px;"></center>
<hr>
<center><h1>HACKED By ./HxHr007</h1></center>
<hr><br />
<div id="message">
<span>root@hxhr007: ~$</span> I am sorry admin ! <br />
<span>root@hxhr007: ~$</span> Just tested security for this website <br />
<span>root@hxhr007: ~$</span> Before i not asking to return this defacing <br />
<span>root@hxhr007: ~$</span> Please fix your system security this website <br />
<span>root@hxhr007: ~$</span> Hehehehe :)
</div>
<br /> <br />
<center><span>Copyright © ./HxHr007 on <?php echo date("Y");?></span></center>
<script type="text/javascript">
/*<![CDATA[*/ 
new TypingText(document.getElementById("message"), 90, function(i){ var ar = new Array(">", " ", "_", " "); return " " + ar[i.length % ar.length]; });

//Type out examples:
TypingText.runAll();
  /*]]>*/
</script>
</body>
</html>
