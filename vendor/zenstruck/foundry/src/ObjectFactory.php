<?php

/*
 * This file is part of the zenstruck/foundry package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Foundry;

use Zenstruck\Foundry\Object\Instantiator;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 *
 * @template T of object
 * @extends Factory<T>
 *
 * @phpstan-type InstantiatorCallable = Instantiator|callable(Parameters,class-string<T>):T
 * @phpstan-import-type Parameters from Factory
 */
abstract class ObjectFactory extends Factory
{
    /** @phpstan-var list<callable(Parameters,class-string<T>):Parameters> */
    private array $beforeInstantiate = [];

    /** @phpstan-var list<callable(T,Parameters):void> */
    private array $afterInstantiate = [];

    /** @phpstan-var InstantiatorCallable|null */
    private $instantiator;

    /**
     * @return class-string<T>
     */
    abstract public static function class(): string;

    /**
     * @return T
     */
    public function create(callable|array $attributes = []): object
    {
        $parameters = $this->normalizeAttributes($attributes);

        foreach ($this->beforeInstantiate as $hook) {
            $parameters = $hook($parameters, static::class());

            if (!\is_array($parameters)) {
                throw new \LogicException('Before Instantiate hook callback must return a parameter array.');
            }
        }

        $parameters = $this->normalizeParameters($parameters);
        $instantiator = $this->instantiator ?? Configuration::instance()->instantiator;
        /** @var T $object */
        $object = $instantiator($parameters, static::class());

        foreach ($this->afterInstantiate as $hook) {
            $hook($object, $parameters);
        }

        return $object;
    }

    /**
     * @phpstan-param InstantiatorCallable $instantiator
     *
     * @psalm-return static<T>
     * @phpstan-return static
     */
    final public function instantiateWith(callable $instantiator): static
    {
        $clone = clone $this;
        $clone->instantiator = $instantiator;

        return $clone;
    }

    /**
     * @phpstan-param callable(Parameters,class-string<T>):Parameters $callback
     */
    final public function beforeInstantiate(callable $callback): static
    {
        $clone = clone $this;
        $clone->beforeInstantiate[] = $callback;

        return $clone;
    }

    /**
     * @final
     *
     * @phpstan-param callable(T,Parameters):void $callback
     */
    public function afterInstantiate(callable $callback): static
    {
        $clone = clone $this;
        $clone->afterInstantiate[] = $callback;

        return $clone;
    }
}
