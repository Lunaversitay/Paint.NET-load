// i hate js a lot, go away if you don't want to read shitty lines from tourettes guy
		function fetchZedInfo( serverurl, servername, steamid, gamemode )
		{
			var gamemode=gamemode
		  document.getElementById("gamemode").innerHTML=gamemode;
			var servername=servername
			document.getElementById("servername").innerHTML=servername;
		}

		// Start the progress bar
		function SetFilesTotal( donttalkshitabouttotal )
		{
			var donttalkshitabouttotal=donttalkshitabouttotal;
			document.getElementById("donttalkshitabouttotal").innerHTML=donttalkshitabouttotal;
		}

		// find our needed files
		function SetFilesNeeded( filesneeded )
		{var filesneeded=filesneeded;document.getElementById("filesneeded").innerHTML=filesneeded;}



		// ugh i hate math
		function shittyMath(donttalkshitabouttotal, filesneeded){
			var perc=Math.round((filesneeded/donttalkshitabouttotal)*100);
			var percent = 100-perc;
			document.getElementById("percent").innerHTML=percent;
		}
