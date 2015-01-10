# Landmarx
## Landmark node mapping system

- [Attribute](#attribute)
  * [InputAttribute](#input-attribute)
  * [ChoiceAttribute](#choice-attribute)
  * [ContainerAwareAttribute](#container-aware-attribute)
  * [BooleanAttribute](#boolean-attribute)
- [Option](#option)
- [Value](#value)

###<a name="attribute"></a>Attribute
**Name** *string* Attribute name
**Description** *string* Attribute description
**Options** *array* Array of attribute options
**Groups** *array* Array of attribute groups
**Visibilty** *boolean* Is attribute public?

```php
$attribute = new Attribute();
$attribute
    ->setName('color')
    ->setOptions($options);
```

###<a name="input-attribute"></a>Input Attribute
**Name** *string* Attribute name
**Description** *string* Attribute description
**Options** *array* Array of attribute options
**Groups** *array* Array of attribute groups
**Visibilty** *boolean* Is attribute public?
**Editable** *boolean* Is attribute option value editable?

```php
$attribute = new InputAttribute();
$attribute->setName('elevation');
```

###<a name="choice-attribute"></a>Choice Attribute
**Name** *string* Attribute name
**Description** *string* Attribute description
**Options** *array* Array of attribute options
**Groups** *array* Array of attribute groups
**Visibilty** *boolean* Is attribute public?
**Multi_selectable** *boolean* Allow multiple selected attribute options

```php
$attribute = new ChoiceAttribute();
$attribute
    ->setName('color')
    ->setOptions($option) // array
    ->isMultiSelectable(false); // default
```

###<a name="container-aware-attribute"></a>ContainerAware Attribute
**Name** *string* Attribute name
**Description** *string* Attribute description
**Options** *array* Array of attribute options
**Groups** *array* Array of attribute groups
**Visibilty** *boolean* Is attribute public?
**Container** *container interface*
**SecurityContext** *security context*
**User** *user*

```php
$attribute = new ContainerAwareAttribute($container);
$attribute
    ->setName('user groups')
    ->setOptions($options);
```

###<a name="boolean-attribute"></a>Boolean Attirbute
**Name** *string* Attribute name
**Description** *string* Attribute description
**Options** *array* Array of attribute options
**Groups** *array* Array of attribute groups
**Visibilty** *boolean* Is attribute public?

note: values are forced into being boolean values.

```php
$attribute = new BooleanAttirbute();
$attribute
    ->setName('active')
    ->setValue(true);
```

###<a name="option"></a>Option
**Name** *string* Option name
**Description** *string* Option description
**Attributes** *array* Array of associated attributes
**Values** *array* Array of attribute option values
**Value** *Value* default Value to use

```php
$option = new Option();
$option
    ->setName('option')
    ->setValues($values)
    ->setValue($values[0]);
```

###<a name="value"></a>Value
**Value** *string* Attribute name
**Description** *string* Attribute description
**Options** *array* Array of attribute options

```php
$value = new Value();
$value->setValue(5);
```
