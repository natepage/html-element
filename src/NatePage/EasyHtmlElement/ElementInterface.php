<?php

namespace NatePage\EasyHtmlElement;

use HtmlGenerator\Markup;

interface ElementInterface
{
    /**
     * Set element type.
     *
     * @param null|string $type The element type
     *
     * @return ElementInterface
     */
    public function setType($type = null): self;

    /**
     * Get element type.
     *
     * @return null|string
     */
    public function getType();

    /**
     * Set element text.
     *
     * @param null|string $text The text element
     *
     * @return ElementInterface
     */
    public function setText($text = null): self;

    /**
     * Get element text.
     *
     * @return null|string
     */
    public function getText();

    /**
     * Add element attribute.
     *
     * @param string $key   The attribute key
     * @param string $value The attribute value
     *
     * @return ElementInterface
     */
    public function addAttribute($key, $value): self;

    /**
     * Add element attributes.
     *
     * @param array $attributes The attributes array to add
     *
     * @return ElementInterface
     */
    public function addAttributes(array $attributes): self;

    /**
     * Set element attributes.
     *
     * @param array $attributes The attributes array to set
     *
     * @return ElementInterface
     */
    public function setAttributes(array $attributes = array()): self;

    /**
     * Get element attribute.
     *
     * @param string $key The attribute key
     *
     * @return mixed
     */
    public function getAttribute(string $key);

    /**
     * Get element attributes.
     *
     * @return array
     */
    public function getAttributes(): array;

    /**
     * Add element child.
     *
     * @param ElementInterface $child The child to add
     *
     * @return ElementInterface
     */
    public function addChild(ElementInterface $child): self;

    /**
     * Add element children.
     *
     * @param array $children The children array to add
     *
     * @return ElementInterface
     */
    public function addChildren(array $children): self;

    /**
     * Set element children.
     *
     * @param array $children The children array to set
     *
     * @return ElementInterface
     */
    public function setChildren(array $children = array()): self;

    /**
     * Get element children.
     *
     * @return array
     */
    public function getChildren(): array;

    /**
     * Set element parent.
     *
     * @param ElementInterface|null $parent The element parent to set
     *
     * @return ElementInterface
     */
    public function setParent(ElementInterface $parent = null): self;

    /**
     * Get element parent.
     *
     * @return ElementInterface|null
     */
    public function getParent();

    /**
     * Render element.
     *
     * @param Markup|null $root The element container
     *
     * @return Markup
     */
    public function render(Markup $root = null) :Markup;

    /**
     * Get the root element.
     *
     * @return ElementInterface
     */
    public function getRoot() :self;

    /**
     * Render the all parents structure.
     *
     * @return Markup
     */
    public function renderRoot() :Markup;

    /**
     * Get the string representation.
     *
     * @return string
     */
    public function __toString(): string;
}
