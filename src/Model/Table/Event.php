<?php

namespace App\Model\Table;

class Event {
    private int $id;
    private string $title;
    private string $imae_path;
    private string $content;
    private string $date;
    private int $id_categorie;

    public function hydrater(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    private function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    private function setImaePath(string $imae_path)
    {
        $this->imae_path = $imae_path;
    }

    public function getImaePath(): string
    {
        return $this->imae_path;
    }

    private function setContent(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    private function setDate(string $date)
    {
        $this->date = $date;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    private function setIdCategorie(int $id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    public function getIdCategorie(): int
    {
        return $this->id_categorie;
    }

    public function getData(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'imae_path' => $this->imae_path,
            'content' => $this->content,
            'date' => $this->date,
            'id_categorie' => $this->id_categorie,
        ];
    }
}