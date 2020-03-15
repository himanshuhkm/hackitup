$(document).ready(function() {
"use strict";

function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min)) + min;
}

function hack() {
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'https://hackitup.herokuapp.com/currentlevel/'+phonenumber, false);
	xhr.send(null);
	if (xhr.status === 200) {
		var response = xhr.responseText;
		var obj = JSON.parse(response);
		if (obj.level == 11) {
		    window.open('../thankyou','_blank');
		    terminal.append("You made it! You have completed all the levels.\n");
		}
		else {
		    window.open('../level-'+obj.level,'_blank');
		    terminal.append("Level "+obj.level + " opened in new tab (allow popups)\n");
		}
	}
}

function level() {
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'https://hackitup.herokuapp.com/currentlevel/'+phonenumber, false);
	xhr.send(null);
	if (xhr.status === 200) {
		var response = xhr.responseText;
		var obj = JSON.parse(response);
		terminal.append("You are on level "+obj.level+"\n");
	}
}

function hint() {
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'https://hackitup.herokuapp.com/currenthint/'+phonenumber, false);
	xhr.send(null);
	if (xhr.status === 200) {
		var response = xhr.responseText;
		var obj = JSON.parse(response);
		terminal.append("HINT: "+obj.hint+"\n");
	}
}

function submit(args) {
	var str = args.join(" ");
	var xhr = new XMLHttpRequest();
	xhr.open('GET', 'submit.php?usertoken='+str, false);
	xhr.send(null);
	if (xhr.status === 200) {
		terminal.append(xhr.responseText+"\n");
	}
}

function leaderboard() {
	terminal.append("Opened leaderboards in new tab (allow popups)\n");
	window.open('../../leaderboard','_blank');
}

function logout(){
	terminal.append("Logging out...\n");
	document.location = 'logout.php';
}

function clear() {
	terminal.text("");
}

function help() {
	terminal.append("Welcome to Hack It Up Sneak Peek\n");
	terminal.append("Given below are a few commands which you will be using during the course of this round. Use 'up' & 'down' arrow to navigate through the previously executed commands. Happy Hacking!\n\n");
	terminal.append("hack - go to the current level\n");
	terminal.append("hint - get the hint for the current level\n");
	terminal.append("submit discovered token - submit the token to advance to next level\n");
	terminal.append("level - returns the current level\n");
	terminal.append("echo - prints the following string\n");
	terminal.append("clear - clears the terminal windows\n");
	terminal.append("lb - go to the leaderboards\n");
    terminal.append("logout - terminate session and logout\n");
}

function echo(args) {
	var str = args.join(" ");
	terminal.append(str + "\n");
}

var title = $(".title");
var terminal = $(".terminal");
var prompt = "➜";
var path = "~";
var commandHistory = [];
var historyIndex = 0;
var command = "";
var commands = [
		{
 			"name": "hack",
			"function": hack
		}, 
		{
 			"name": "level",
			"function": level
		},
		{
 			"name": "submit",
			"function": submit
		},
		{
 			"name": "hint",
			"function": hint
		},
		{
 			"name": "lb",
			"function": leaderboard
		}, 
		{
 			"name": "logout",
			"function": logout
		},
		{
 			"name": "clear",
			"function": clear
		}, 
		{
			"name": "help",
			"function": help
		},
		{
			"name": "echo",
			"function": echo
		}];

function processCommand() {
	var isValid = false;
	var args = command.split(" ");
	var cmd = args[0];
	args.shift();
	for (var i = 0; i < commands.length; i++) {
		if (cmd === commands[i].name) {
			commands[i].function(args);
			isValid = true;
			break;
		}
	}

	if (!isValid) {
		terminal.append("~zsh: command not found: " + command + "\n");
	}
	
	commandHistory.push(command);
	historyIndex = commandHistory.length;
	command = "";
}

function displayPrompt() {
	terminal.append("<span class=\"prompt\">" + prompt + "</span> ");
	terminal.append("<span class=\"path\">" + path + "</span> ");
}

function erase(n) {
	command = command.slice(0, -n);
	terminal.html(terminal.html().slice(0, -n));
}

function clearCommand() {
	if (command.length > 0) {
		erase(command.length);
	}
}

function appendCommand(str) {
	terminal.append(str);
	command += str;
}

$(document).keydown(function(e) {
	e = e || window.event;
	var keyCode = typeof e.which === "number" ? e.which : e.keyCode;

	// BACKSPACE
	if (keyCode === 8 && e.target.tagName !== "INPUT" && e.target.tagName !== "TEXTAREA") {
		e.preventDefault();
		if (command !== "") {
			erase(1);
		}
	}
	
	$(".terminal").bind('paste', function() {
    		terminal.append(window.clipboardData.getData('Text'));
	}); 

	// UP or DOWN
	if (keyCode === 38 || keyCode === 40) {
		// Move up or down the history
		if (keyCode === 38) {
			// UP
			historyIndex--;
			if (historyIndex < 0) {
				historyIndex++;
			}
		} else if (keyCode === 40) {
			// DOWN
			historyIndex++;
			if (historyIndex > commandHistory.length - 1) {
				historyIndex--;
			}
		}

		var cmd = commandHistory[historyIndex];
		if (cmd !== undefined) {
			clearCommand();
			appendCommand(cmd);
		}
	}
});

$(document).keypress(function(e) {
	e = e || window.event;
	var keyCode = typeof e.which === "number" ? e.which : e.keyCode;
	switch (keyCode) {
	case 13:{
			terminal.append("\n");
			processCommand();
			displayPrompt();
			break;
		}
		default: {
			appendCommand(String.fromCharCode(keyCode));
		}
	}
});

title.text(name+" @ "+college+": ~ (zsh)");

var date = new Date().toString(); date = date.substr(0, date.indexOf("GMT") - 1);

terminal.append("Current login: " + date + " on ttys000\n"); 

terminal.append("Type 'help' and hit enter to get started\n"); 

displayPrompt();

});