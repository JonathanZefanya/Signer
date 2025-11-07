<?php

namespace DI\Definition\Source;

use DI\Definition\EntryReference;
use DI\Definition\ObjectDefinition;
use DI\Definition\ObjectDefinition\MethodInjection;

/**
 * Reads DI class definitions using reflection.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class Autowiring implements DefinitionSource
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition($name)
    {
        if (!class_exists($name) && !interface_exists($name)) {
            return null;
        }

        $definition = new ObjectDefinition($name);

        // Constructor
        $class = new \ReflectionClass($name);
        $constructor = $class->getConstructor();
        if ($constructor && $constructor->isPublic()) {
            $definition->setConstructorInjection(
                MethodInjection::constructor($this->getParametersDefinition($constructor))
            );
        }

        return $definition;
    }

    /**
     * Read the type-hinting from the parameters of the function.
     */
    private function getParametersDefinition(\ReflectionFunctionAbstract $constructor)
    {
        $parameters = [];

        foreach ($constructor->getParameters() as $index => $parameter) {
            // Skip optional parameters
            if ($parameter->isOptional()) {
                continue;
            }

            // Use getType() instead of deprecated getClass() for PHP 8+
            $parameterType = $parameter->getType();
            
            if ($parameterType && !$parameterType->isBuiltin() && $parameterType instanceof \ReflectionNamedType) {
                $parameters[$index] = new EntryReference($parameterType->getName());
            }
        }

        return $parameters;
    }
}
