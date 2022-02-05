<?php


function allBooks() {
        $stmt = $this->pdo->query('SELECT * FROM books');
        $books = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $books[] = [
                'id' => $row['id'],
                'title' => $row['title'],
                'author' => $row['author'],
                'availablity' => $row['availablity'],
                'isbn' => $row['isbn'],
            ];
        }
        return $books;
    }
?>