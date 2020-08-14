//On change type de compte epargne simple show frais ouverture et remuneration par an 
function showCompteEpargne() {
    let compte = document.getElementById("typeCompte");
    let choix = compte.selectedIndex;
    let type = compte.options[choix].text;
    if (type === "Epargne et Xewel") {
        // document.getElementById("ag").hidden = true;
        // document.getElementById("depotInit").hidden = false;
        // document.getElementById("interetB").hidden = false;
        document.getElementById('typesfrais').value('1');

    } else {
        if (type === "Courant") {
            document.getElementById("ag").hidden = false;
            document.getElementById("depotInit").hidden = true;
            document.getElementById("interetB").hidden = true;
            document.getElementById('typesfrais').value('2');

        } else {
            document.getElementById("ag").hidden = true;
            document.getElementById("depotInit").hidden = false;
            document.getElementById("interetB").hidden = false;
        }
    }
}