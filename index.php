<!-- Istruzioni:
Crea un diagramma per una tabella di db che rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users.
Il database e la tabella non devono essere realmente creati.
Bonus (non tanto facoltativo):
Una volta finita la classe User, pensate a che altre entitá possiamo avere in un sistema di Blogging oltre all'utente.
Per darvi un idea, un blog ha degli articoli, categorie, tags etc.
Create nel diagramma anche le altre entitá e definite per ciascuna le rispettive classi con proprietá e metodi. -->

<?php
// include __DIR__ . "./classes/user.php";
include __DIR__ . "./classes/articles.php";

$user1 = new User("Angelo", "Dotti", "angelo83", "password1", "24-05-1983");
$user2 = new User("Mario", "Bianchi", "white_M", "password2", "10-01-1998");
$user3 = new User("Federica", "Carli", "fedefede", "password3", "15-09-1994");
$user4 = new User("Bruno", "Brunetti", "bruno123456789", "password4", "03-02-1988");
$user5 = new User("Paolo", "Fiore", "Fior_Paolo", "password", "12-08-1973");
$user6 = new User("Aldo", "Biscardi", "Aldone50", "password", "20-07-1954");
// var_dump($user6);
$usersList = [$user1, $user2, $user3, $user4, $user5, $user6];
// var_dump($usersList);
$item1 = new article( "alessandro_m", "il virus", "kdjfvefbebfvkjebvkbef", "10-02-2021");
$item2 = new article("gregorio_V", "freddo", "hsdfjhdsbjhdbfjhd", "15-03-2021");




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Lista Utenti </h1>
    <?php foreach ($usersList as $value): ?>
      <div>
        <h2><?php echo "$value->user_name $value->user_lastName" ?></h2>
        <h3>User_id: <?php echo ($value->user_id); ?></h3>
        <h4>user_age_of_birth: <?php echo ($value->user_age_of_birth); ?></h4>
        <br>

      </div>
    <?php endforeach; ?>
  </body>
</html>
