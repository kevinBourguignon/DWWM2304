<?php
setcookie('demoxss', 'données personnelles de l\'utilisateur', time()+3600);

// On traite le formulaire

if(isset($_GET['prenom']) && !empty($_GET['prenom'])){
    // on récupère et on protège les données
    // $prenom = strip_tags($_GET['prenom']);
    // $prenom = htmlspecialchars($_GET['prenom']);
    $prenom = htmlentities($_GET['prenom']);
}

// 'vol_cookie.php?cookies='+document.cookie;


?>
<form method="get">
    <input type="text" name="prenom">
    <button>Valider</button>
</form>

<?php
if(isset($prenom)){
    echo "Bonjour $prenom";
}