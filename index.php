<?php
class movie
{
    public $titolo;
    public $durata = 0;
    public $lingua;

    function __construct($titolo, $lingua)
    {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
    }

    public function setDurata($durata)
    {
        $this->durata = $durata;
    }

    public function getDurata()
    {
        $this->durata;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <?php
    $movie_1 = new movie("IO SONO LEGGENDA ", "ITALIANO");
    $movie_2 = new movie("FAST AND FURIOS ", "ITALIANO");
    $movie_1->setDurata("1.30 ");
    $movie_2->setDurata("1.50 ");
    echo $movie_1->titolo;
    echo $movie_1->durata;
    echo $movie_1->lingua;
    echo "<br>";
    echo $movie_2->titolo;
    echo $movie_2->durata;
    echo $movie_2->lingua;
    ?>
</body>

</html>