<?php namespace October\Rain\Database\Behaviors;

class Purgeable extends \October\Rain\Extension\ExtensionBase
{
    /**
     * @var array List of attribute names which should not be saved to the database.
     *
     * public $purgeable = [];
     */

    protected $parent;

    public function __construct($parent)
    {
        $this->parent = $parent;
        $this->bootPurgeable();
    }

    /**
     * @var array List of original attribute values before they were purged.
     */
    protected $originalPurgeableValues = [];

    /**
     * Boot the purgeable trait for a model.
     * @return void
     */
    public function bootPurgeable()
    {
        if (!$this->parent->propertyExists('purgeable')) {
            $this->parent->addDynamicProperty('purgeable', []);
        }
        
        $this->parent->purgeable[] = 'purgeable';
        $dynPropNames = array_keys(array_diff_key($this->parent->getDynamicProperties(), ['purgeable' => 0]));
        $this->parent->purgeable = array_merge($this->parent->purgeable, $dynPropNames);

        /*
         * Remove any purge attributes from the data set
         */
        $model = $this->parent;
        $model->bindEvent('model.saveInternal', function () use ($model) {
            $model->purgeAttributes();
        });
    }

    /**
     * Adds an attribute to the purgeable attributes list
     * @param  array|string|null  $attributes
     * @return $this
     */
    public function addPurgeable($attributes = null)
    {
        $attributes = is_array($attributes) ? $attributes : func_get_args();

        $this->parent->purgeable = array_merge($this->parent->purgeable, $attributes);

        return $this->parent;
    }

    /**
     * Removes purged attributes from the dataset, used before saving.
     * @param $attributes mixed Attribute(s) to purge, if unspecified, $purgable property is used
     * @return array Current attribute set
     */
    public function purgeAttributes($attributesToPurge = null)
    {
        if ($attributesToPurge !== null) {
            $purgeable = is_array($attributesToPurge) ? $attributesToPurge : [$attributesToPurge];
        }
        else {
            $purgeable = $this->getPurgeableAttributes();
        }

        $attributes = $this->parent->getAttributes();
        $cleanAttributes = array_diff_key($attributes, array_flip($purgeable));
        $originalAttributes = array_diff_key($attributes, $cleanAttributes);

        if (is_array($this->originalPurgeableValues)) {
            $this->originalPurgeableValues = array_merge($this->originalPurgeableValues, $originalAttributes);
        }
        else {
            $this->originalPurgeableValues = $originalAttributes;
        }

        return $this->parent->attributes = $cleanAttributes;
    }

    /**
     * Returns a collection of fields that will be hashed.
     */
    public function getPurgeableAttributes()
    {
        return $this->parent->purgeable;
    }

    /**
     * Returns the original values of any purged attributes.
     */
    public function getOriginalPurgeValues()
    {
        return $this->originalPurgeableValues;
    }

    /**
     * Returns the original values of any purged attributes.
     */
    public function getOriginalPurgeValue($attribute)
    {
        return $this->originalPurgeableValues[$attribute] ?? null;
    }

    /**
     * Restores the original values of any purged attributes.
     */
    public function restorePurgedValues()
    {
        $this->parent->attributes = array_merge($this->parent->getAttributes(), $this->originalPurgeableValues);
        return $this->parent;
    }
}
