<?php
# Voy a definir la clase Persona
class Persona {
    public $nombre;
    public $edad;

    # Métodos
    function birth_year() {
        $year = 2024 - $this->edad;
        echo '<h2>Hola ' . $this->nombre . '</h2>';
        echo '<p style="font-weight: bold">Naciste en ' . $year . ' o en ' . $year-1 . '</p>';
    }
}