<?php

namespace SingleQuote\LaravelXmlParser\Transformers;

use SingleQuote\LaravelXmlParser\Exceptions\UnknownTransformException;

class PendingTransform
{
    protected $transformAliases = [
        'array' => ArrayTransformer::class,
    ];
    private $context;
    /**
     * @var \Closure
     */
    private $resolve;

    /**
     * Create a new PendingTransform.
     *
     * @param          $context
     * @param \Closure $resolve
     */
    public function __construct($context, \Closure $resolve)
    {
        $this->context = $context;
        $this->resolve = $resolve;
    }

    /**
     * Transform using a alias.
     *
     * @param $as
     *
     * @throws \SingleQuote\LaravelXmlParser\Exceptions\UnknownTransformException
     */
    public function as($alias)
    {
        if (! array_key_exists($alias, $this->transformAliases)) {
            throw UnknownTransformException::unknownAlias($alias);
        }

        return $this->with($this->transformAliases[$alias]);
    }

    /**
     * Transform and resolve using a transformer.
     *
     * @param $transformer
     *
     * @return mixed
     */
    public function with($transformer)
    {
        $resolve = $this->resolve;

        return $resolve($transformer);
    }
}
