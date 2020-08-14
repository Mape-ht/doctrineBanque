//hide show client entreprise or clt particulier 
console.log("ok");

function showForm() {
    let client = document.getElementById("cltp");
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if (type === "Client Entreprise") {
        document.getElementById("cltMoralForm").hidden = false;
        document.getElementById("cltPhysiqueForm").hidden = true;
        document.getElementById("addbutton").hidden = false;

    } else {
        if (type === "Client Particulier") {
            document.getElementById("cltMoralForm").hidden = true;
            document.getElementById("cltPhysiqueForm").hidden = false;
            document.getElementById("addbutton").hidden = false;
        } else {
            document.getElementById("cltMoralForm").hidden = true;
            document.getElementById("cltPhysiqueForm").hidden = true;
            document.getElementById("addbutton").hidden = true;
        }
    }
}

//hide show client particulier non salarié or salarié
function showSalarie() {
    let client = document.getElementById("statut");
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if (type === "Salarie") {
        document.getElementById("cltsalarie").hidden = false;

    } else {
        document.getElementById("cltsalarie").hidden = true;
    }

}

//On change in employeur client particulier, show client moral
function showEmployeur() {

    let client = document.getElementById("Employeur");
    let choix = client.selectedIndex;
    let type = client.options[choix].text;
    if (type === "Autres") {
        document.getElementById("cltMoralForm").hidden = false;

    } else {
        document.getElementById("cltMoralForm").hidden = true;
    }
}