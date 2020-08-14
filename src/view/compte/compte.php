<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/style.css" />
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
                <li><a href="./../client/client.php">Creation Client</a></li>
                <li><a href="compte.php">Creation Compte</a></li>
                <li><a href="#">Transaction</a></li>
            </ul>
        </aside>
        <section class="Compte">
            <form id="creacompteForm" method="POST" action="http://localhost/mesprojets/php/banquePOONamespace/src/controller/CompteController.php" onchange="showCompteEpargne()">
         
                <fieldset>
                    <legend>Creation Compte</legend>
                    <div>
                        <label for="typeCompte">Indiquer le type de Compte</label>
                        <select name="typeCompte" id="typeCompte">
                            <option value="0">----Type de compte----</option>
                            <option value="1">Epargne et Xewel</option>
                            <option value="2">Courant</option>
                            <option value="3">Bloque</option>
                        </select><br><br/>
                    </div>
                    <div>
                        <label for="numCompte">Numéro de Compte</label>
                        <input type="text" id="numCompte" name="numCompte" /></br>
                        <label for="cle">Numéro Clé RIB</label>
                        <input type="text" id="cle" name="cle" /></br>
                    </div>
                    <div id="depotInit">
                        <label for="initial">Depôt initial </label>
                        <input type="texte" id="initial" name="initial" placeholder="Depôt initial" /><br />
                    </div>
                    
                    <label for="typesfrais">Frais Ouverture</label>
                    <select name="typesfrais" id="typesfrais">
                            <option value="0">----Type frais----</option>
                            <option value="1">Frais ouverture</option>
                            <option value="2">Agio</option>
                            <option value="3">Frais Blocage</option>
                        </select><br><br />
                    <!--<input type="text" name="typesfrais" id="typesfrais" /><br></br>
                    
                    <label for="remun">Remuneration</label>
                    <input type="text" name="remun" id="remun" /><br></br>
                    
                    <label for="agios">Agios</label>
                    <input type="text" name="agios" id="agios" /><br></br>-->



                    <label for="dateOuv">Date d'ouverture du compte</label>
                    <input id="dateOuv" type="date" name="dateOuv" /><br />
                </fieldset>
                <div>
                    <input type="submit" name="ajouter" value="valider" />
                    <button type="reset" class="bouttonA">ANNULER</button>
                </div>
            </form>
        </section>
    </main>
    <script src="../../../public/js/compte.js">
    </script>

    <body>

    </body>

</html>