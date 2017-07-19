function changePix(){

var las= new Array("images/lasvegas/a.JPG",
		"images/lasvegas/b.JPG",
		"images/lasvegas/c.JPG",
		"images/lasvegas/d.JPG",
		"images/lasvegas/e.JPG");
var can= new Array("images/cancun/a.JPG",
		"images/cancun/b.JPG",
		"images/cancun/c.JPG",
		"images/cancun/d.JPG",
		"images/cancun/e.JPG");
var haw= new Array("images/hawaii/a.JPG",
		"images/hawaii/b.JPG",
		"images/hawaii/c.JPG",
		"images/hawaii/d.JPG",
		"images/hawaii/e.JPG");

var x=document.getElementById('f1').s1.value;

if(x=='Las Vegas'){
	document.one.src=las[0];
	document.two.src=las[1];
	document.three.src=las[2];
	document.four.src=las[3];
	document.five.src=las[4];
	document.bp.src=las[0];
}
if(x=='Cancun'){
	document.one.src=can[0];
	document.two.src=can[1];
	document.three.src=can[2];
	document.four.src=can[3];
	document.five.src=can[4];
	document.bp.src=can[0];
}
if(x=='Hawaii'){
	document.one.src=haw[0];
	document.two.src=haw[1];
	document.three.src=haw[2];
	document.four.src=haw[3];
	document.five.src=haw[4];
	document.bp.src=haw[0];
}

}
