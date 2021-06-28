<?php

namespace SingleQuote\LaravelXmlParser\Exporters;

interface Exporter
{
    public function toString(): string;

    public function toFile(string $path);
}
