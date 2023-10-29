<!DOCTYPE HTML>
<html lang="de">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Favicon-Editor</title>
    
    <!-- SEO-optimierte Meta-Tags -->
    <meta name="description" content="Online Favicon Editor - Erstellen Sie ein eigenes Favicon für Ihre Website.">
    <meta name="keywords" content="Favicon, Editor, Grafikdesign, Webdesign">
    <meta name="author" content="Tilman Ambach">
    
    <!-- Canonical-Link (falls relevant) -->
    <link rel="canonical" href="https://konvertiere.de/favicon-editor">
    
    <!-- Open Graph-Meta-Tags für soziale Netzwerke -->
    <meta property="og:title" content="Online Favicon-Editor">
    <meta property="og:description" content="Erstellen Sie ein eigenes Favicon für Ihre Website.">
    <meta property="og:image" content="https://konvertiere.de/favicon.png">
    <meta property="og:url" content="https://konvertiere.de/favicon-editor">
    
    <!-- Twitter Card-Meta-Tags für Twitter-Shares -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@IhrTwitterName">
    <meta name="twitter:title" content="Online Favicon-Editor">
    <meta name="twitter:description" content="Erstellen Sie Ihr eigenes Favicon für Ihre Website.">
    <meta name="twitter:image" content="https://konvertiere.de/favicon.png">
    
    <!-- Favicon-Link (Ersetzen Sie 'favicon.ico' durch den Pfad zu Ihrem Favicon) -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
		
	<style>
		html, body {
		  	margin: 0;
			padding: 0;
			border-radius: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			font-family: Verdana; 
		}
		canvas {
            border: 1px solid #000;
            position: absolute;
            left: 0;
            top: 0;
        }
		
		a { text-decoration: none; }
		a:link 		{ color: #0000bb; }
		a:visited	{ color: #0000bb; }
		a:hover 	{ color: #0000ff; }
		a:active	{ color: royalblue; }
		
		div{
        	padding: 6px;
        }
		
		ul, li {
			list-style-position: outside;
			margin: 5px;
			padding: 6px;
		}
		
		span {
			line-height: 24px;
		}
		
		td {
			font-size: 10pt; 
		}
		
		table.menue {
			border-radius: 0;
			width: 100%;
			margin: 0;
		}
		tr.menue {}
		th.menue {
			height: 23px;
			color: #0000bb; 
			background: #eeaa00;
			font-size: 10pt; 
			font-weight: bold;
			text-align: middle;
		}
		th.menue:hover {
			color: #0000bb;
			background: hotpink; 
			font-weight: bold;
		}
		
		tr.buttonmaker {}
		th.buttonmaker {
			font-size: 10pt; 
			font-weight: bold;
			text-align: middle;
		}
		td.buttonmaker {
			font-size: 10pt; 
			font-weight: normal;
			text-align: middle;
		}
		
		.label {
			width: 480px;
			margin-left: auto;
			margin-right: auto;
		}
		
		h1 {
			text-align: center;
		}	
		
		/* Gemeinsame Stile für alle Input-Felder */
		input, button, select {
		  padding: 5px;
		  border: 1px solid #ccc;
		  border-radius: 5px;
		  font-size: 13px;
		}
		/* Hervorhebung bei Fokus (wenn das Feld ausgewählt ist) */
		input:focus {
		  border-color: #007bff;
		  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
		}	
		input[type="color"] {
            margin-right: 10px;
        }
		input[type='file']{
			background: #eee;
		}
		input[type="file"]::file-selector-button {
		    /* Hintergrundfarbe und Farbe des Texts */
		    background-color: #eee;
		    color: #007bff;
		    /* Anpassung der Schriftgröße und -abstand
		    font-size: 16px;
		    padding: 10px; */
		    /* Rand und Randecken abrunden */
		    border: 0;
		    border-radius: 3px;
		    /* border: 1px solid #007bff;
		    /* Textausrichtung und Texttransformierung */
		    text-align: center;
		    font-weight: bold;
		}			
		input[type='number'] {
		    width: 48px;
		    font-family: Courier;
		    font-weight: bold;
		}		

		.container {
            display: flex;
        }
        .canvas-container {
            width: 128px;
            height: 128px;
            position: relative;
            margin-right: 10px; /* Hier wird ein Abstand hinzugefügt */
        }
        .hexColor {
        	width: 56px;
        	font-family: Courier;
        	font-weight: bold;
        }
		button{
			color:#000; 
			background-color: lightgreen; 
			font-weight: bold;
			border-color: grey;
		}
		button:hover{
			color:black; 
			background-color: #fff;
		}
		button:active {
		    vertical-align: top;
		    padding-top: 2px;
		    padding-bottom: 2px;
		}
		
		#left-top
		{
			position: fixed; /* positionieren */
			top: 0%; 
			left: 0%; 
			background-color: transparent;
			border: 0;	
			padding: 0;
		}
		#right-top
		{
			position: fixed; /* positionieren */
			top: 0%; 
			right: 0%; 
			background-color: transparent;
			border: 0;	
			padding: 0;
		}
		#left-bottom
		{
			position: fixed; /* positionieren */
			left: 0%; 
			bottom: 0%; 
			background-color: transparent;
			border: 0;	
			padding: 0;
		}
		#right-bottom
		{
			position: fixed; /* positionieren */
			bottom: 0%; 
			right: 0%; 
			background-color: transparent;
			border: 0;	
			padding: 0;
		}								
	</style>
	
</head>

<body>

<table class='menue' border=0 cellspacing=0 cellpadding=0 width=100%>
	<tr class='menue'>
		<th class='menue'> <a href='https://konvertiere.de'>konvertiere.de</a></th>
		<th class='menue'> <a href='https://konvertiere.de/webgrafiken-beschriften-konvertieren'>Image Labeling</a> </th>
		<th class='menue'> <a href='https://www.linkbomber.de/screenshots'>Screenshots</a></th>
		<th class='menue'> <a href='https://konvertiere.de/buttonmaker'>Buttonmaker</a></th>
		<th class='menue'> <a href='https://konvertiere.de/favicon-editor'</a>Favicon-Editor</th>
		<th class='menue'> <a href='https://Umfrage-starten.de/buttonmaker.php'>Buttongenerator</a> </th>
		<th class='menue'> <a href='https://konvertiere.de/468x60-pixel-banner'>468x60 Banner</a></th>
		<th class='menue'> <a href='https://besucherzaehler.gratis' target='_top' class='colours'>Counter.gratis</a> </th> 
		<th class='menue' width=36 align=right><!-- Besucherzähler https://Besucherzaehler.gratis START --><a href='https://besucherzaehler.gratis/?ID=Buttonmaker' target='_top'><img src='https://besucherzaehler.gratis/counter.php?ID=Buttonmaker' name='png' id='Counter' title='Counter' border=0 align='absmiddle'></a></th>
		<script language='JavaScript'>var REF=encodeURIComponent(document.referrer); var LOC=encodeURIComponent(window.location.href); var RES=screen.width+'x'+screen.height; var NAVI=encodeURIComponent(navigator.userAgent); var LANG=navigator.language; var counter='https://besucherzaehler.gratis/counter.php?ID=Buttonmaker'; document.images.png.src=counter+'&REF='+REF+'&LOC='+LOC+'&NAVI='+NAVI+'&LANG='+LANG+'&RES='+RES+'&STYLE=10';</script>
		<!-- Besucherzähler https://Besucherzaehler.gratis ENDE -->
	</tr>
</table>

<table align=center><tr><td>
    <h1>Online Favicon-Editor</h1>
    <div class="container">
        <div class="canvas-container">         
            <canvas id="editor" width="128" height="128"></canvas>
        </div>
        <div class="canvas-container">
            <canvas id="preview" width="16" height="16"></canvas>
        </div>
    </div>
	<div>	
		<input type="color" id="drawingColorPicker" value="#000000">
		<input class='hexColor' type="text" id="drawingColorPickerHexColor" value='#000000' maxlength=7>    	
		<label for="drawingColorPicker">Zeichenfarbe</label>
    </div>
    <div>
	    <input type="color" id="backgroundColorPicker" value="#ffffff">
	    <input class='hexColor' type="text" id="backgroundColorPickerHexColor" value='#ffffff' maxlength=7>
	    <label for="backgroundColorPicker">Hintergrundfarbe</label>
	    <p>Durch Auswahl einer neuen Hintergrundfarbe wird der bisherige Inhalt des Editors gelöscht.</p>
	</div> 
	<div>
		<input type="file" id="iconUpload" accept=".ico">	
	</div>   
    <div>
    	<button id="loadIcon">Favicon hochladen</button>
	    <button id="clear">Alles löschen</button>
	    <button id="save">Favicon speichern</button>    	
    </div>
</td></tr></table>

<script>
        const editorCanvas = document.getElementById("editor");
        const context = editorCanvas.getContext("2d");

        const previewCanvas = document.getElementById("preview");
        const previewContext = previewCanvas.getContext("2d");

        const backgroundColorPicker = document.getElementById("backgroundColorPicker");
        const drawingColorPicker = document.getElementById("drawingColorPicker");
        
		function initializeHexColorInput(inputId) {
		    function isErlaubteSondertaste(event) {
			    return event.key === "Backspace" || event.key === "Delete" || event.key === "ArrowLeft" || event.key === "ArrowRight";
			}	    	    
		    const hexInput = document.getElementById(inputId);
			hexInput.addEventListener("keydown", (event) => {
			    // Überprüfen, ob die gedrückte Taste erlaubt ist, außer für bestimmte Tasten
			    const erlaubteTasten = /^[0-9A-Fa-f#]$/; // Erlaubte Zeichen: Zahlen, A-F (groß/klein) und #
			    
			    if (!erlaubteTasten.test(event.key) && !isErlaubteSondertaste(event)) {
			        // Wenn die gedrückte Taste nicht erlaubt ist und keine erlaubte Sondertaste ist, verhindern Sie die Standardeingabe-Verarbeitung
			        event.preventDefault();
			    }
			});

			hexInput.addEventListener("input", () => {
		        const inputValue = hexInput.value; // Holen Sie sich den aktuellen Wert, wenn das Event ausgelöst wird
		        // Hier können Sie auf den aktuellen Wert zugreifen und ihn überprüfen
		        if (inputValue.charAt(0) !== '#')  document.getElementById(inputId).value = '#'    
		    });
		}
        
        // Colorpicker Eventlistener        
	    initializeHexColorInput("drawingColorPickerHexColor");
		initializeHexColorInput("backgroundColorPickerHexColor");

		backgroundColorPicker.addEventListener("input", () => {
	        const selectedColor = backgroundColorPicker.value;
	        backgroundColorPickerHexColor.value = selectedColor; // Die ausgewählte Farbe im Hexadezimalformat ausgeben
	    });
	    drawingColorPicker.addEventListener("input", () => {
	        const selectedColor = drawingColorPicker.value;
	        drawingColorPickerHexColor.value = selectedColor; // Die ausgewählte Farbe im Hexadezimalformat ausgeben
	    });
        backgroundColorPickerHexColor.addEventListener("change", () => {
	        const inputColor = backgroundColorPickerHexColor.value;
	        if(inputColor.length == 7) backgroundColorPicker.value = inputColor; // Die ausgewählte Farbe im Hexadezimalformat ausgeben
	    });		    
	    drawingColorPickerHexColor.addEventListener("change", () => {
	        const inputColor = drawingColorPickerHexColor.value;
	        if(inputColor.length == 7) drawingColorPicker.value = inputColor; // Die ausgewählte Farbe im Hexadezimalformat ausgeben
	    });	   

        // Initialize background color
        context.fillStyle = backgroundColorPicker.value;
        context.fillRect(0, 0, editorCanvas.width, editorCanvas.height);

        // Mouse drawing
        let isDrawing = false;

        backgroundColorPicker.addEventListener("input", () => {
            context.fillStyle = backgroundColorPicker.value;
            context.fillRect(0, 0, editorCanvas.width, editorCanvas.height);
            updatePreviewCanvas();
        });

        editorCanvas.addEventListener("mousedown", (e) => {
            isDrawing = true;
            draw(e);
        });

        editorCanvas.addEventListener("mouseup", () => (isDrawing = false));
        editorCanvas.addEventListener("mousemove", (e) => draw(e));       
        editorCanvas.addEventListener("mouseout", () => (isDrawing = false));
        editorCanvas.addEventListener("mouseenter", (e) => {
            if (e.buttons === 1) {
                // Wenn die Maustaste gedrückt ist, setze isDrawing auf true
                isDrawing = true;
                [lastX, lastY] = [e.clientX - editorCanvas.offsetLeft, e.clientY - editorCanvas.offsetTop];
            }
        });

        function draw(e) {
            if (!isDrawing) return;

            const rect = editorCanvas.getBoundingClientRect();
            const scaleX = editorCanvas.width / rect.width;
            const scaleY = editorCanvas.height / rect.height;

            const x = (e.clientX - rect.left) * scaleX;
            const y = (e.clientY - rect.top) * scaleY;

            const pixelSize = 8; // Größe eines Pixels (2x2)
            const pixelX = Math.floor(x / pixelSize) * pixelSize;
            const pixelY = Math.floor(y / pixelSize) * pixelSize;

            context.fillStyle = drawingColorPicker.value;
            context.fillRect(pixelX, pixelY, pixelSize, pixelSize);
            updatePreviewCanvas();
        }

        function updatePreviewCanvas() {
            // Clear the preview canvas
            previewContext.clearRect(0, 0, previewCanvas.width, previewCanvas.height);

            // Draw the favicon in original size on the preview canvas
            previewContext.drawImage(editorCanvas, 0, 0, previewCanvas.width, previewCanvas.height);
        }

        // Clear canvas
        const clearButton = document.getElementById("clear");
        clearButton.addEventListener("click", () => {
            context.clearRect(0, 0, editorCanvas.width, editorCanvas.height);
            context.fillStyle = backgroundColorPicker.value;
            context.fillRect(0, 0, editorCanvas.width, editorCanvas.height);
            updatePreviewCanvas();
        });
        
        // Upload
		const iconUpload = document.getElementById("iconUpload");
		const loadIcon = document.getElementById("loadIcon");

		iconUpload.addEventListener("change", (e) => {
		    const file = iconUpload.files[0];
		    if (file) {
		        const reader = new FileReader();
		        reader.onload = (event) => {
		            const dataURL = event.target.result;
		            const img = new Image();
		            img.onload = () => {
		                // Zeichne das geladene Icon auf den Editor
		                context.drawImage(img, 0, 0, editorCanvas.width, editorCanvas.height);
		                updatePreviewCanvas();
		            };
		            img.src = dataURL;
		        };
		        reader.readAsDataURL(file);
		    }
		});

		loadIcon.addEventListener("click", () => {
		    iconUpload.click();
		});

		// Download
        /* Save Favicon as .png
        const saveButton = document.getElementById("save");
        saveButton.addEventListener("click", () => {
            const link = document.createElement("a");
            link.href = editorCanvas.toDataURL("image/png");
            link.download = "favicon.png";
            link.click();
        });
        */
        
        // Save Favicon as .ico
        const saveButton = document.getElementById("save");
        saveButton.addEventListener("click", () => {
            const link = document.createElement("a");
            link.href = editorCanvas.toDataURL("image/x-icon");
            link.download = "favicon.ico";
            link.click();
        });
    </script>  
</body>
</html>