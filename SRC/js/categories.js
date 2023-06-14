function randomPic() {
var pic = new Array("images/music.jpg","images/lifestyle.jpg","images/education.jpg","images/games.jpg","images/finance.png");
     var randomNum = Math.floor(Math.random() * pic.length);
     document.getElementById("myPicture").src = pic[randomNum];
}


function displayPaidApps(freebutton)
{
	if(freebutton == "paidapps")
	{
		var x = document.getElementById("app1");
		if (x.style.display !== "none") 
		{
			x.style.display = "none";
		} 

		var y = document.getElementById("app2");
		if (y.style.display !== "none") 
		{
			y.style.display = "none";
		} 
		
		var a = document.getElementById("app3");
		if (a.style.display !== "none") 
		{
			a.style.display = "none";
		} 
		var b = document.getElementById("app6");
		if (b.style.display !== "none") 
		{
			b.style.display = "none";
		}
		
		var c = document.getElementById("app9");
		if (c.style.display !== "none") 
		{
			c.style.display = "none";
		}
		
		var d = document.getElementById("app12");
		if (d.style.display !== "none") 
		{
			d.style.display = "none";
		}
	}
}

function displayFreeApps(freebutton)
{
	if(freebutton == "freeapps")
	{
		var x = document.getElementById("app4");
		if (x.style.display !== "none") 
		{
			x.style.display = "none";
		} 

		var y = document.getElementById("app5");
		if (y.style.display !== "none") 
		{
			y.style.display = "none";
		} 
		
		var a = document.getElementById("app7");
		if (a.style.display !== "none") 
		{
			a.style.display = "none";
		}
		var b = document.getElementById("app8");
		if (b.style.display !== "none") 
		{
			b.style.display = "none";
		} 
		
		var c = document.getElementById("app10");
		if (c.style.display !== "none") 
		{
			c.style.display = "none";
		}
		
		var d = document.getElementById("app11");
		if (d.style.display !== "none") 
		{
			d.style.display = "none";
		}
	}
}


function displayAllAppsfree()
{
	var x = document.getElementById("app1");
	if (x.style.display === "none") 
	{
		x.style.display = "inline-block";
	} 

	var y = document.getElementById("app2");
	if (y.style.display === "none") 
	{
		y.style.display = "inline-block";
	} 
		
	var a = document.getElementById("app3");
	if (a.style.display === "none") 
	{
		a.style.display = "inline-block";;
	} 
	var b = document.getElementById("app6");
	if (b.style.display === "none") 
	{
		b.style.display = "inline-block";;
	}
	
	var c = document.getElementById("app9");
	if (c.style.display === "none") 
	{
		c.style.display = "inline-block";
	}
		
	var d = document.getElementById("app12");
	if (d.style.display === "none") 
	{
		d.style.display = "inline-block";
	}
	
	var e = document.getElementById("filter");
	e.style.backgroundColor = "rgb(106, 127, 204)";
	
	document.getElementById("demo").innerHTML = "Free Apps <br>";
}

function displayAllAppspaid()
{
	var x = document.getElementById("app4");
	if (x.style.display === "none") 
	{
		x.style.display = "inline-block";;
	} 

	var y = document.getElementById("app5");
	if (y.style.display === "none") 
	{
		y.style.display = "inline-block";;
	} 
		
	var a = document.getElementById("app7");
	if (a.style.display === "none") 
	{
		a.style.display = "inline-block";;
	}
	
	var b = document.getElementById("app8");
	if (b.style.display === "none") 
	{
		b.style.display = "inline-block";
	} 
		
	var c = document.getElementById("app10");
	if (c.style.display === "none") 
	{
		c.style.display = "inline-block";
	}
		
	var d = document.getElementById("app11");
	if (d.style.display === "none") 
	{
		d.style.display = "inline-block";
	}
	
	var e = document.getElementById("filter");
	e.style.backgroundColor = "rgba(189, 57, 210, 0.5)";
	
	document.getElementById("demo").innerHTML = "Paid Apps <br>";
	
}
