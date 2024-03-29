<?php

declare(strict_types=1);

namespace App\Entity\EasyShop\Product;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\ORMException;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 *
 * @ORM\HasLifecycleCallbacks()
 *
 * @ORM\Table(name="sylius_product", indexes={
 *     @ORM\Index(name="created_at_index", columns={"created_at"}),
 *     @ORM\Index(name="enabled_index", columns={"enabled"})
 * })
 */
class Product extends BaseProduct
{
    protected ProductVariant $variant;

    protected $virtualVariantChannelPricing;

    public static function getTranslationClass(): string
    {
        return ProductTranslation::class;
    }

    /**
     * @ORM\PrePersist()
     *
     * @throws ORMException
     */
    public function onCreate(LifecycleEventArgs $event): void
    {
        $object = $event->getObject();
        if ($object->isSimple()) {
            $variant = $object->getVariant();
            $variant->setName($object->getName());
            $variant->setCode($object->getCode());
            $variant->setEnabled($object->isEnabled());
        }
    }

    /**
     * @ORM\PostUpdate()
     *
     * @throws ORMException
     */
    public function onUpdate(LifecycleEventArgs $event): void
    {
        $object = $event->getObject();
        if ($object->isSimple()) {
            $variant = $object->getVariant();
            $variant->setName($object->getName());
            $variant->setCode($object->getCode());
            $variant->setEnabled($object->isEnabled());
            $event->getEntityManager()->persist($variant);
            $event->getEntityManager()->flush();
        }
    }

    public function getVariant(): ProductVariant
    {
        return $this->variants[0];
    }

    public function setVariant(ProductVariant $variant): void
    {
        $this->variants[0] = $variant;
    }

    public function getVirtualVariantChannelPricing(): mixed
    {
        return [
            'channelPricings' => $this->getVariant()->getChannelPricings(),
        ];
    }

    public function setVirtualVariantChannelPricing(mixed $virtualVariantChannelPricing): void
    {
        $variant = $this->getVariant();
        foreach ($variant->getChannelPricings() as $channelPricing) {
            $variant->removeChannelPricing($channelPricing);
        }
        foreach ($virtualVariantChannelPricing['channelPricings'] as $channelPricing) {
            $variant->addChannelPricing($channelPricing);
        }
        $this->variants[0] = $variant;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
