// this function shows the thumbnail images in a bigger size on click.
function showPic(_ele, num){
    document.images["pic"].src = "assets/images/" + _ele;
    document.getElementById("showPic").style.display = "block";
    document.getElementById("showPic").style.top = num;
        
}

// this function closes the big images when clicked.
function closePic(){
    document.getElementById("showPic").style.display = "none";
}

// this function validates entries in the comment form
function validate() 
  	{
  	  var errorMsg = "";
       console.log("hey");
      // First name validation
  	  if (document.getElementsByName( "fname" )[0].value.length === 0)
  	  {
  	  	errorMsg += " First Name - at least one character </br>";  
  	  }
       
      // Last name validation
  	  if (document.getElementsByName( "lname" )[0].value.length === 0)
  	  {
  	  	errorMsg += " Last Name - at least one character </br>";
      }
     
       // Email validation
  	  if (!document.getElementsByName( "email" )[0].value.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/))
  	  {
  	  	errorMsg += " Email - the correct format is xxxxx@xxx.xx <br/>";
  	  }

  	  
  	  // Comment validation
  	  if (document.getElementsByName( "comment" )[0].value.length === 0)
  	  {
  	  	errorMsg += " Comment - your comment cannot be empty! <br/>";
  	  }
  	  


  	  if (errorMsg)
  	  {
  	    errorMsg = "Please complete the following:<br/>" + errorMsg;
  	    document.getElementById( "error-msg" ).innerHTML = errorMsg;
        document.getElementById( "error-msg" ).style.display = "block";
        console.log(document.getElementById( "error-msg" ).style.display);
  	    return false;
  	  }
  	  else 
  	  { 
          return true;
  	  }
  	}

// function that changes the main image
var i = 0;
function changeImg(_ele){
        if(i!=0)
        {
            document.getElementsByClassName("noshow")[i-1].style.display = "none";
        }
        else
        {   
            document.getElementsByClassName("noshow")[_ele-1].style.display = "none";
        }
        document.getElementsByClassName("noshow")[i].style.display = "block";

        setTimeout( function() {changeImg(_ele)}, 5000);

        if (i == _ele-1)
        {
            i=0;
        }
        else
            i++;
}

function showMenu(_ele){
    if(document.getElementById(_ele).style.display == "block")
    {
        document.getElementById(_ele).style.display = "none";
        document.getElementById("arrow").innerHTML = "&#65516";
    }
    else
    {
        document.getElementById(_ele).style.display = "block";
        document.getElementById("arrow").innerHTML = "&#65514";
    }
}

var before = null;
function isCurrent(_ele){
    if (before!=null)
    {
        document.getElementById(before).style.backgroundColor = "";
    }
    document.getElementById(_ele).style.backgroundColor = "#d31e23";
    before = _ele;
    console.log(document.getElementById(_ele));
}



    
