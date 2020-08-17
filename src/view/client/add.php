<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet" />
    <title>Creation Client</title>
    <meta name="description" content="Interface client Banque du Peuple" />
    <meta name="keywords" content="Interface, client, banque du Peuple" />
    <meta name="author" content="Marie Perle" />
    
</head>

<body>
    <!-----------------header contiendra logo + titre------>
    <header>
        <h1><span>Banque du</span> peuple</h1>
    </header>
    <main>
        <aside>
            <ul class="main-nav">
                <li><a href="http://localhost/mesprojets/php/banqueORMMvc/ClientMoral">Creation Client</a></li>
                <li><a href="http://localhost/mesprojets/php/banqueORMMvc/Compte">Creation Compte</a></li>
                <li><a href="#">Transaction</a></li>
            </ul>
        </aside>
        <!--client physique séparé de client moral-->
        <section class="Client">
            <form method="POST" action="http://localhost/mesprojets/php/banqueORMMvc/ClientMoral/addClient">
                <div>
                    <label for="cltp">Type Client</label>
                    <select name="cltp" id="cltp" onchange="showForm()">
                        <option value="0">--------Client-----------</option>
                        <option value="1">Client Entreprise</option>
                        <option value="2">Client Particulier</option>
                    </select><br></br>
                </div>
                <!--remplir les informations du client moral-->
                <div id="cltMoralForm" hidden>
                    <!--hidden-->
                    <fieldset id="creacltMoral">
                        <legend>Client Moral</legend>
                        <label for="raisonSo">Raison sociale</label>
                        <input type="text" id="raisonSo" name="raisonSo" placeholder="Raison sociale" /><br />
                        <label for="nomsEmployeur">Nom de l'employeur</label>
                        <input type="text" id="nomsEmployeur" name="nomsEmployeur" placeholder="Noms de l'Employeur" /> <br><br />
                        <label for="adresseEmploi">Adresse de l'employeur</label>
                        <input type="text" id="adresseEmploi" name="adresseEmploi" placeholder="Adresse de l'Employeur" /><br />
                        <label for="telephoneMo">Telephone </label>
                        <input type="text" id="telephoneMo" name="telephoneMo" placeholder="Telephone de l'Employeur" /><br />
                        <label for="numIdEmployeur">NINEA</label>
                        <input type="text" id="numIdEmployeur" name="numIdEmployeur" placeholder="Numero ident Employeur" /><br><br />
                    </fieldset>
                </div>
                <!----remplir client physique caché par le checkbox type client-->
                <div id="cltPhysiqueForm" hidden>
                    <!--hidden-->
                    <fieldset id="creacltPhy">
                        <legend>Client Physique</legend>
                        <label for="nomsClt">Noms Client</label>
                        <input type="text" id="nomsClt" name="nomsClt" placeholder="Noms du Client">
                        <label for="prenoms">Prénoms</label>
                        <input type="text" id="prenoms" name="prenoms" placeholder="Prénoms du Client"><br><br />
                        <label for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" placeholder="Adresse du Client" />
                        <label for="email">email</label>
                        <input type="email" id="email" name="email" placeholder="Email du Client" /><br><br />
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Téléphone du Client" />
                        <!--s'enquerir si client salarié, si non, cacher l'information de l'employeur par onclick -->
                        <!--inserer <option> php dans le html pour effectuer une select en php et lier avec la table clt phy 0=id et 6=profession-->
                        <label for="profession">Statut</label>
                        <select name="statut" id="statut" onchange="showSalarie()">
                            <option value="0" id="cltouisalarie">---Statut----</option>
                            <option value="1" id="cltouisalarie">Salarie</option>
                            <option value="2" id="nonsalarie">Non Salarie</option>
                        </select><br></br>
                        <div id="cltsalarie" hidden>
                            <label for="salaire">Salaire</label>
                            <input type="text" id="salaire" name="salaire" placeholder="Salaire du Client"><br><br />
                            <!--nom employeur listed from sql table client moral-->
                            <select name="employeur" id="Employeur" onchange="showEmployeur()">
                                <option value="0">-----Employeur----</option>
                                <option value="1">Aty Afrika</option>
                                <option value="1">Mballos</option>
                                <option value="3">Autres</option>
                            </select><br></br>
                            <label for="numIdTravail">CIN</label>
                            <input type="text" id="numIdTravail" name="numIdTravail" placeholder="Numero ident Travailleur" /><br><br />
                    </fieldset><br></br>
                </div>
                <div id="addbutton" hidden>
                    <input type="submit" value="valider" name="ajouter" />
                    <button type="reset" class="bouttonA">ANNULER</button>
                </div>
            </form>
        </section>
    </main>
    <script src="public/client.js">
    </script>

</body>

</html>