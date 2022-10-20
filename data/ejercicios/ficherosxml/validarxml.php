<?php
    $dept = new DOMDocument();
    $dept -> load("empleados.xml");
    $respuesta = $dept -> schemaValidate("departamento.xsd");
    echo ($respuesta) ? "documento valido" : "Documento INVALIDO";
    