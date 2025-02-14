<?php

namespace App\Factory;

use App\Entity\Cart;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Cart>
 */
final class CartFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return Cart::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        $user = UserFactory::new()->createOne(['roles' => ['ROLE_CUSTOMER']]);
        $customer = CustomerFactory::new()->createOne(['user' => $user]);

        return [
            'customer' => $customer,
            'discount' => self::faker()->randomNumber(),
            'quantity' => self::faker()->randomNumber(),
            'total' => self::faker()->randomNumber(2),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(Cart $cart): void {})
        ;
    }
}
