var status ="OFF";

function game()
{
    const val =  document.getElementById('button');
    const image = document.getElementById('image');
    
    if(status=="ON")
    {
        image.src= "ONbulb.jpg";
        document.getElementById('button').innerHTML = "OFF";
        status = "OFF";
    }
    else
    {
        image.src="OFFbulb.jpg";
        document.getElementById('button').innerHTML = "ON";
        status = "ON";
    }
}