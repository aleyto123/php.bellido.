<?php
class MovieDB {
    
    public function listar($bd) {
        $sql = "
            SELECT
                movies.id,
                movies.title,
                movies.rating,
                movies.awards,
                movies.release_year,
                genres.name AS genre_name
            FROM movies
            JOIN genres ON movies.genre_id = genres.genre_id
            ORDER BY movies.title
        ";
        $query = $bd->prepare($sql);
        $query->execute();
        $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
        return $peliculas;
    }

    public function detalle($bd, $id) {
        $sql = "
            SELECT
                movies.id,
                movies.title,
                movies.rating,
                movies.awards,
                movies.release_year,
                movies.length,
                movies.genre_id,
                genres.name AS genre_name
            FROM movies
            JOIN genres ON movies.genre_id = genres.genre_id
            WHERE movies.id = :id
        ";
        $query = $bd->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $vector = $query->fetch(PDO::FETCH_ASSOC);
        
        $pelicula = new Movie(
            $vector['id'],
            $vector['title'],
            $vector['rating'],
            $vector['awards'],
            $vector['release_year'],
            $vector['length'],
            $vector['genre_id']
        );

        return $pelicula;
    }

    public function agregar($bd, $pelicula) {
        $sql = "
            INSERT INTO movies(title, rating, awards, release_year, length, genre_id)
            VALUES (:title, :rating, :awards, :releaseYear, :length, :genreId)
        ";
        $query = $bd->prepare($sql);
        $query->bindValue(':title', $pelicula->getTitle());
        $query->bindValue(':rating', $pelicula->getRating());
        $query->bindValue(':awards', $pelicula->getAwards());
        $query->bindValue(':releaseYear', $pelicula->getReleaseYear());
        $query->bindValue(':length', $pelicula->getLength());
        $query->bindValue(':genreId', $pelicula->getGenreId());
        $query->execute();
    }
}
?>
