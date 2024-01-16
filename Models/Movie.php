<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;

    public function __construct($titolo, $regista, $anno, $genere)
    {
        $this->title = $titolo;
        $this->director = $regista;
        $this->year = $anno;
        $this->genre = $genere;
    }

    public function getMovieInfo()
    {
        $result = "
        <table>
        <tr>
          <th>Titolo</th>
          <th>Regista</th>
          <th>Anno</th>
          <th>Genere</th>
        </tr>
        <tr>
          <td>$this->title</td>
          <td>$this->director</td>
          <td>$this->year</td>
          <td>$this->genre</td>
        </tr>
      </table>";
        return $result;
    }
}
