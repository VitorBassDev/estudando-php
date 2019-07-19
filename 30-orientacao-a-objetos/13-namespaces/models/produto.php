<?php

// Vamos definir um namespace
namespace models;

class Produto {
    public function mostrarDetalhes() {
        print '<div class="alert alert-warning">Detalhes do produto da pasta <strong>models</strong>.</div>';
    }
}