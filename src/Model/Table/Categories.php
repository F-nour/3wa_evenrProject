<?php

namespace App\Model\Table;

class Categories {

    private int $id;
    private string $name;

    public function hydrater(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    private function setName(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getData(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}