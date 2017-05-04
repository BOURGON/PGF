<?php session_start();
include('header.php');
include('menu.php');
?>
<div class="module-aide">
<div class="title">Menu Aide</div>
<div class="clear">
<a href="#smiley">Information importante sur les smileys</a>
<a href="#pageMembre">Cr&eacute;er une page membre</a>
<a href="#infoMembre">Afficher les informations du membre</a>
</div>
<div class="clear">
<div class="title-p"><a name="smiley"></a>Information Importante sur les Smileys</div>
<p>Les Tux G1 sont sous licence LGPL <a class="link1" href="http://www.gnu.org/licenses/lgpl.html" target="_blank">Voir la licence</a></p>
<h4><span class="blue">Questions</span> / reponses :</h4>
<p><span class="blue">Q : </span>Je suis webmaster et je souhaite illustrer mon site avec un Tux G1, que dois-je faire?<br>
  Rien ! Un Tux G1 est libre d'utilisation, vous pouvez l'utiliser comme bon vous semble ou m&ecirc;me le modifier.</p>
  <p><span class="blue">Q : </span>Je suis une entreprise ou une association et je souhaite   utiliser un Tux G1 pour illustrer une affiche, un logiciel... que   dois-je faire ?<br>
 Rien ! Un Tux G1 est libre d'utilisation, vous pouvez   l'utiliser comme bon vous semble ou même le modifier. Cependant, si vous   le modifiez, vous devez mettre à disposition les sources de votre   cr&eacute;ation. Vous avez l'obligation de redistribuer l'oeuvre sous licence   LGPL et de pr&eacute;ciser l'oeuvre d'origine.</p>
  <p><span class="blue">Q : </span>Je suis professeur ou &eacute;tudiant et je souhaite illustrer un cours ou un expos&eacute; avec un Tux G1, que dois-je faire ?<br>
 Rien ! Un Tux G1 est libre d'utilisation, vous pouvez l'utiliser comme bon vous semble ou m&ecirc;me le modifier.</p>
 <p><span class="blue">Q : </span>Je suis webmaster et je souhaite illustrer mon site avec un Tux G2, que dois-je faire?<br>
 Vous devez pr&eacute;ciser explicitement sur votre site le nom   de l'auteur du Tux G2 (en dessous du Tux, en pied de page ou sur une   page "à propos" et vous devez ajoutez un lien vers <a class="link1" href="http://tux.crystalxp.net/" target="_blank">http://tux.crystalxp.net/</a></p>
 <p>Les Tux G2 sont sous licence Creative Commons by-nc-sa (<a class="link1" href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.fr" target="_blank">lire la licence</a>).   Cette licence a &eacute;t&eacute; choisie afin de prot&eacute;ger le travail des auteurs de   Tux G2 des abus de certaines entreprises. Cependant, chacune des   conditions peut &ecirc;tre lev&eacute;e si vous obtenez l'autorisation de l'auteur ET   de CrystalXP. Le Tux G2 de base a &eacute;t&eacute; con&ccedil;u/cr&eacute;&eacute;/r&eacute;alis&eacute; par Overlord59   de l'&eacute;quipe CrystalXP.net.</p>
</div>
<div class="clear">
<div class="title-p"><a name="pageMembre"></a>Creation d'une Page Membre</div>
<p>Pour que vous puissiez utiliser les fonctions et que l'espace membre reste s&eacute;curis&eacute;, la nouvelle page que vous allez cr&eacute;er pour l'espace membre doit &ecirc;tre une page php, exemple: (nouvelle_page.php), et vous devez la placer dans le fichier membre.</p>
<h4>Premiere etape</h4>
<p>Dans le fichier membre, ouvrez la page menu.php avec &eacute;diteur php ou avec le bloc-notes.<br />
Vous trouverez la partie suivante :</p>
<div class="code">
// debut du menu<br>
&lt;div class=&quot;action&quot;&gt;<br>
&lt;a href=&quot;index.php&quot;&gt;Accueil&lt;/a&gt;<br>
&lt;a href=&quot;messagerie.php&quot; class=&quot;bouton&quot;&gt;Messagerie&lt;/a&gt;<br>
&lt;a href=&quot;profil.php&quot; class=&quot;bouton&quot;&gt;Profil&lt;/a&gt;<br>
&lt;a href=&quot;'.URLSITE.'/deconnexion.php&quot; class=&quot;bouton&quot;&gt;D&amp;eacute;connexion&lt;/a&gt;<br>
&lt;/div&gt;<br>
// fin du menu</div>
<p>C'est dans cette partie que vous devez rajouter le lien de votre nouvelle page.<br />
Voici ce que vous devez ajouter :</p>
<div class="code">
&lt;a href=&quot;lien_de_page.php&quot; class=&quot;bouton&quot;&gt;Nom_de_page&lt;/a&gt;</div>
<p>Voici un exemple d'ajout d'une nouvelle page :</p>
<div class="code">// debut du menu<br>
  &lt;div class=&quot;action&quot;&gt;<br>
&lt;a href=&quot;index.php&quot;&gt;Accueil&lt;/a&gt;<br>
&lt;a href=&quot;messagerie.php&quot; class=&quot;bouton&quot;&gt;Messagerie&lt;/a&gt;<br>
&lt;a href=&quot;profil.php&quot; class=&quot;bouton&quot;&gt;Profil&lt;/a&gt;<br>
  &lt;a href=&quot;lien_de_page.php&quot; class=&quot;bouton&quot;&gt;Nom_de_page&lt;/a&gt;<br>
  &lt;a href=&quot;'.URLSITE.'/deconnexion.php&quot; class=&quot;bouton&quot;&gt;D&amp;eacute;connexion&lt;/a&gt;<br>
  &lt;/div&gt;
  <br>
  // fin du menu</div>
  <h4>Deuxieme etape</h4>
  <p>Pour commencer la cr&eacute;ation de votre page, copier et collez le code ci-dessous dans votre nouvelle page qui sera enregistr&eacute;e avec l'extension .php :</p>
  <div class="code">
    &lt;?php session_start();<br>
      include('header.php');<br>
      include('menu.php');<br>
      ?&gt;</p>
    <p>&lt;?php<br>
      include('footer.php');<br>
    ?&gt;</div>    
<p><a class="link1" href="exemple.php" target="_blank">Voir le resultat</a></p>
<p>Pour ce fichier d'aide, la démonstration d'ajout de cadre est effectuée sur la base d'une règle CSS nommée &quot;exemple-wrap&quot; (que vous retrouverez dans le fichier css). Il vous appartient de définir une règle spécifique à votre nouveau cadre ou d'utiliser une règle déjà existante (comme messagerie-wrap, member-list-wrap, ...).</p>
<p>Pour ajouter le cadre principal, copiez collez le code suivant : </p>
<div class="code">&lt;div class=&quot;module-wrap&quot;&gt; votre contenu ici &lt;/div&gt;</div>
<p>Voici comment :</p>
<div class="code">
  <p>&lt;?php session_start();<br>
    include('header.php');<br>
    include('menu.php');<br>
    ?&gt;
  </p>
  </p>
  <p>&lt;div class=&quot;exemple-wrap&quot;&gt; votre contenu ici &lt;/div&gt; </p>
  <p>&lt;?php<br>
    include('footer.php');<br>
    ?&gt;</div>
    <p><a class="link1" href="exemple1.php" target="_blank">Voir le resultat</a></p>
<p>Pour ajouter un titre a votre cadre principal copiez et collez le code suivant :</p>
<div class="code">&lt;div class=&quot;title&quot;&gt; Votre titre &lt;/div&gt; </div>
<p>Voici comment : </p>
<div class="code">
  <p>&lt;?php session_start();<br>
    include('header.php');<br>
    include('menu.php');<br>
    ?&gt; </p>
  </p>
  <p>&lt;div class=&quot;exemple-wrap&quot;&gt;<br>
    &lt;div class=&quot;title&quot;&gt; Votre titre &lt;/div&gt;<br>
     ... votre contenu ici ...    <br>
    &lt;/div&gt; </p>
<p>&lt;?php<br>
  include('footer.php');<br>
  ?&gt;  </div>
  <p><a class="link1" href="exemple2.php" target="_blank">Voir le resultat</a></p>
  <p>Vous pouvez cr&eacute;er plusieurs cadres, voici un exemple :</p>
  <div class="code">
    <p>&lt;?php session_start();<br>
      include('header.php');<br>
      include('menu.php');<br>
      ?&gt; </p>
    </p>
    <p>&lt;div class=&quot;exemple-wrap&quot;&gt;<br>
  &lt;div class=&quot;title&quot;&gt; Votre titre &lt;/div&gt;<br>
      ... le contenu du cadre 1  ici ... <br>
  &lt;/div&gt; </p>
    <p>&lt;div class=&quot;exemple-wrap&quot;&gt;<br>
&lt;div class=&quot;title&quot;&gt; Votre titre &lt;/div&gt;<br>
... le contenu du cadre 2  ici ... <br>
&lt;/div&gt; </p>
    <p>&lt;?php<br>
      include('footer.php');<br>
      ?&gt;        
    </div>
    <p><a class="link1" href="exemple3.php" target="_blank">Voir le resultat</a></p>
</div>
<div class="title-p"><a name="infoMembre"></a>Afficher les Informations du Membre</div>
<p>Sur une page de l'espace membre vous pouvez afficher les information de celui qui la consulte, en utilisant une classe ainsi qu'une fonction le tout en php.<br />
Voici le code a utiliser, choisissez suivant vos besoins : </p>
<div class="code">
  <ul>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'nom'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'prenom'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'pseudo'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'email'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'naissance'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'tel'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'adresse'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'cp'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'ville'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'facebook'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'twister'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'site'); ?&gt;</li>
    <li>&lt;?php echo Membre::info($_SESSION['id'], 'description'); ?&gt;</li>
  </ul>
</div>
</div>

<?php
include('footer.php');
?>















