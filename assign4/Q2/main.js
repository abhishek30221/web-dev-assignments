						// JAVASCRIPT LOGIC FOR TIC TAC TOE
//document.turn - global variable 
//var , let are local variables
function startGame()
{ 
	for(var i = 1 ; i <= 9 ; i++)
		clearBox(i); 

	document.turn = "X"; 
	document.winner = null; 	
	setMessage(document.turn + " get's to start !"); 
}

function nextMove(square)
{
	if(square.innerText == '')
	{
		square.innerText = document.turn; 
		switchTurn(); 
	}
	else
	{	
		setMessage("Not Allowed , Pick Another Square"); 
	}
}
	
function switchTurn() 
{	
	
	if(document.winner != null)
	{
		setMessage(document.turn + " Already Won !")
	}	
	else if(checkForWinner(document.turn))
	{
		setMessage("CONGRATS " + document.turn + " wins the game !!!");
		document.winner = document.turn; 
	}
	else if(document.turn == "X")
	{
	    document.turn = "0";
		setMessage(document.turn + "'s chance"); 
	}
	else
	{
		document.turn = "X";
		setMessage(document.turn + "'s chance"); 
	}
}

function setMessage(msg)
{
	document.getElementById('message').innerText = msg; 
}

function checkrow(a, b , c , move)
{
	var result = false;
	if(getBox(a) == move && getBox(b) == move && getBox(c) == move)
	{
		result = true;
	}
	return result; 
}

function getBox(number)
{
	return document.getElementById("s" + number).innerText;
}

function checkForWinner(move)
{
	var result = false;
	if(checkrow(1 , 2 , 3 , move) || checkrow(4 , 5 , 6 , move) || checkrow(7 , 8 , 9 , move) ||
	   checkrow(1 , 4 , 7 , move) || checkrow(2 , 5 , 8 , move) || checkrow(3 , 6 , 9 , move) ||
	   checkrow(1 , 5 , 9 , move) || checkrow(3 , 5 , 7 , move))
	{
		result = true; 
	}
	return result;
}
function clearBox(number)
{
	document.getElementById("s" + number).innerText = ""; 
}