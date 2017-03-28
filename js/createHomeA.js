
var callIsOpen = false;
var baseIsOpen = false;


function create118Call(){
	if(callIsOpen)
	{
		var p = document.getElementById("118");
		p.innerHTML = "";
		callIsOpen = false;
	}
	else
	{
		var p = document.getElementById("base");
		p.innerHTML = "";
		baseIsOpen = false;
		var p = document.getElementById("118");
		var textNode = document.createTextNode("Localita': ");
		var input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "località");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Indirizzo: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "indirizzo");
		
		p.appendChild(textNode);
		p.appendChild(input);
		
		textNode = document.createTextNode("Numero: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "numero");
		
		p.appendChild(textNode);
		p.appendChild(input);
		
		textNode = document.createTextNode("Piano: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "piano");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));

		textNode = document.createTextNode("Nominativo: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Codice: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "code");
		
		p.appendChild(textNode);
		p.appendChild(input);
		
		textNode = document.createTextNode("Allarme: ");
		input = document.createElement("input");
		input.setAttribute("type", "time");
		input.setAttribute("id", "allarme");
		
		p.appendChild(textNode);
		p.appendChild(input);
		callIsOpen = true;
	}
}

function createBase(){
	if(baseIsOpen)
	{
		var p = document.getElementById("base");
		p.innerHTML = "";
		baseIsOpen = false;
	}
	else
	{
		var p = document.getElementById("118");
		p.innerHTML = "";
		callIsOpen = false;
		var p = document.getElementById("base");
		var textNode = document.createTextNode("Data: ");
		var input = document.createElement("input");
		input.setAttribute("type", "date");
		input.setAttribute("id", "data");
		
		p.appendChild(textNode);
		p.appendChild(input);
		
		textNode = document.createTextNode("Sigla ambulanza: ");
		var input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "sigla");
				
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Scheda: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "code");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
	
		textNode = document.createTextNode("Indirizzo/Target: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "indirizzo");
		
		p.appendChild(textNode);
		p.appendChild(input);
		
		textNode = document.createTextNode("Localita'/Comune: ");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "localita");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Nome paziente: ");
		input.setAttribute("type", "text");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Data di nascita: ");
		input= document.createElement("input");
		input.setAttribute("type", "date");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Codice fiscale: ");
		input= document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Residenza: ");
		input= document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Comune: ");
		input= document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Stato estero di residenza: ");
		input= document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		textNode = document.createTextNode("Cittadinanza: ");
		input= document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "nome");
		
		p.appendChild(textNode);
		p.appendChild(input);
		p.appendChild(document.createElement("br"));
		p.appendChild(document.createElement("br"));
		
		var divTable = document.createElement("div");
		divTable.setAttribute("class", "divTable");
		var divRow = document.createElement("div");
		divRow.setAttribute("class", "divRow");
		var divCell = document.createElement("div");
		divCell.setAttribute("class", "divCell");
		
		textNode = document.createTextNode("Allarme: ");
		//Prendere i dati dal db contenente le chiamate
		
		textNode = document.createTextNode("Partenza: ");
		input= document.createElement("input");
		input.setAttribute("type", "time");
		input.setAttribute("id", "partenza");
		
		divCell.appendChild(textNode);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		divCell.appendChild(input);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		p.appendChild(divTable);
		
		textNode = document.createTextNode("Arrivo target: ");
		input= document.createElement("input");
		input.setAttribute("type", "time");
		input.setAttribute("id", "arrivo");
		
		divCell.appendChild(textNode);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		divCell.appendChild(input);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		p.appendChild(divTable);
		
		textNode = document.createTextNode("Partenza target: ");
		input= document.createElement("input");
		input.setAttribute("type", "time");
		input.setAttribute("id", "partenzaT");
		
		divCell.appendChild(textNode);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		divCell.appendChild(input);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		p.appendChild(divTable);
		
		textNode = document.createTextNode("Arrivo ospedale: ");
		input= document.createElement("input");
		input.setAttribute("type", "time");
		input.setAttribute("id", "arrivoO");
		
		divCell.appendChild(textNode);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		divCell.appendChild(input);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		p.appendChild(divTable);
		
		textNode = document.createTextNode("Operativo: ");
		input= document.createElement("input");
		input.setAttribute("type", "time");
		input.setAttribute("id", "operativo");
		
		divCell.appendChild(textNode);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		divCell.appendChild(input);
		divRow.appendChild(divCell);
		divTable.appendChild(divRow);
		p.appendChild(divTable);
		baseIsOpen = true;
	}
}