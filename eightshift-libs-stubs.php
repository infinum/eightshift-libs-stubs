<?php
/** @noinspection ALL */

// @codingStandardsIgnoreFile

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{
    use Exception;

    /**
     * Class AttributesTrait Helper
     */
    trait AttributesTrait
    {
        /**
         * Check if attribute exist in attributes list and add default value if not.
         * This is used because Block editor will not output attributes that don't have a default value.
         *
         * @param string $key Key to check.
         * @param array<string, mixed> $attributes Array of attributes.
         * @param array<string, mixed> $manifest Array of default attributes from manifest.json.
         * @param bool $undefinedAllowed Allowed detection of undefined values.
         *
         * @throws Exception When we're unable to find the component by $component.
         *
         * @return mixed
         */
        public static function checkAttr(string $key, array $attributes, array $manifest, bool $undefinedAllowed = false) {}

        /**
         * Map and check attributes for responsive object.
         *
         * @param string $keyName Key name to find in the responsiveAttributes object.
         * @param array<string, mixed> $attributes Array of attributes.
         * @param array<string, mixed> $manifest Array of default attributes from manifest.json.
         * @param bool $undefinedAllowed Allowed detection of undefined values.
         *
         * @throws Exception If missing responsiveAttributes or keyName in responsiveAttributes.
         * @throws Exception If missing keyName in responsiveAttributes.
         *
         * @return array<mixed>
         */
        public static function checkAttrResponsive(string $keyName, array $attributes, array $manifest, bool $undefinedAllowed = false): array {}

        /**
         * Check if the attribute's key has a prefix and output the correct attribute name.
         *
         * @param string $key Key to check.
         * @param array<string, mixed> $attributes Array of attributes.
         * @param array<string, mixed> $manifest Components/blocks manifest.json.
         *
         * @return string
         */
        public static function getAttrKey(string $key, array $attributes, array $manifest): string {}

        /**
         * Output only attributes that are used in the component and remove everything else.
         *
         * @param string $newName *New* key to use to rename attributes.
         * @param array<string, mixed> $attributes Attributes from the block/component.
         * @param array<string, mixed> $manual Array of attributes to change key and merge to the original output.
         *
         * @return array<string, mixed>
         */
        public static function props(string $newName, array $attributes, array $manual = [/** value is missing */]): array {}

        /**
         * Merges attributes array with the manifest default attributes.
         *
         * @param array<string, mixed> $manifest Block/Component manifest data.
         * @param array<string, mixed> $attributes Block/Component rendered attributes data.
         *
         * @return array<string, mixed>
         */
        private static function getDefaultRenderAttributes(array $manifest, array $attributes): array {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{
    use EightshiftBoilerplateVendor\EightshiftLibs\Blocks\AbstractBlocks;
    use EightshiftBoilerplateVendor\EightshiftLibs\Exception\ComponentException;

    /**
     * Helpers for components
     */
    class Components
    {
        /**
         * Renders a components and (optionally) passes some attributes to it.
         *
         * Note about "parentClass" attribute: If provided, the component will be wrapped with a
         * parent BEM selector. For example, if $attributes['parentClass'] === 'header' and $component === 'logo'
         * are set, the component will be wrapped with a <div class="header__logo"></div>.
         *
         * @param string $component Component's name or full path (ending with .php).
         * @param array<string, mixed> $attributes Array of attributes that's implicitly passed to component.
         * @param string $parentPath If parent path is provides it will be appended to the file location.
         *                           If not get_template_directory_uri() will be used as a default parent path.
         * @param bool $useComponentDefaults If true the helper will fetch component manifest and merge default attributes in the original attributes list.
         *
         * @throws ComponentException When we're unable to find the component by $component.
         *
         * @return string
         */
        public static function render(string $component, array $attributes = [/** value is missing */], string $parentPath = '', bool $useComponentDefaults = false): string {}

        /**
         * Get manifest json. Generally used for getting block/components manifest.
         *
         * @param string $path Absolute path to manifest folder.
         * @param string $name Block/Component name.
         *
         * @throws ComponentException When we're unable to find the component by $component.
         *
         * @return array<string, mixed>
         */
        public static function getManifest(string $path, string $name = ''): array {}

        /**
         * Get manifest json. Generally used for getting block/components manifest. Used to directly fetch json file.
         * Used in combination with getManifest helper.
         *
         * @param string $path Absolute path to manifest folder.
         *
         * @throws ComponentException When we're unable to find the component by $component.
         *
         * @return array<string, mixed>
         */
        public static function getManifestDirect(string $path): array {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

    /**
     * Class OutputCssVariablesTrait Helper
     */
    trait CssVariablesTrait
    {
        /**
         * Get Global Manifest.json and return globalVariables as CSS variables.
         *
         * @param array<string, mixed> $globalManifest Global manifest array. - Deprecated.
         *
         * @return string
         */
        public static function outputCssVariablesGlobal(array $globalManifest = [/** value is missing */]): string {}

        /**
         * Get component/block options and process them in CSS variables.
         *
         * @param array<string, mixed> $attributes Built attributes.
         * @param array<string, mixed> $manifest Component/block manifest data.
         * @param string $unique Unique key.
         * @param array<string, mixed> $globalManifest Global manifest array.
         * @param string $customSelector Output custom selector to use as a style prefix.
         *
         * @return string
         */
        public static function outputCssVariables(array $attributes, array $manifest, string $unique, array $globalManifest = [/** value is missing */], string $customSelector = ''): string {}

        /**
         * Output css variables as a one inline style tag. Used with wp_footer filter.
         *
         * @return string
         */
        public static function outputCssVariablesInline(): string {}

        /**
         * Convert a hex color into RGB values.
         *
         * @param string $hex Input hex color.
         *
         * @return string
         */
        public static function hexToRgb(string $hex): string {}

        /**
         * Return unique ID for block processing.
         *
         * @return string
         */
        public static function getUnique(): string {}

        /**
         * Return CSS variables in default type. On the place where it was called.
         *
         * @param string $name Output css selector name.
         * @param array<mixed> $data Data prepared for checking.
         * @param array<mixed> $manifest Component/block manifest data.
         * @param string $unique Unique key.
         *
         * @return string
         */
        private static function getCssVariablesTypeDefault(string $name, array $data, array $manifest, string $unique): string {}

        /**
         * Get css variables in inline type. In one place in dom.
         *
         * @param string $name Output css selector name.
         * @param array<mixed> $data Data prepared for checking.
         * @param array<mixed> $manifest Component/block manifest data.
         * @param string $unique Unique key.
         *
         * @return array<mixed>
         */
        private static function getCssVariablesTypeInline(string $name, array $data, array $manifest, string $unique): array {}

        /**
         * Process and return global css variables based on the type.
         *
         * @param array<string, mixed> $itemValues Values of data to check.
         * @param string $itemKey Item key to check.
         *
         * @return string
         */
        private static function globalInner(array $itemValues, string $itemKey): string {}

        /**
         * Sets up a breakpoint value to responsive attribute objects from responsiveAttribute object.
         *
         * @param array<string, mixed> $attributeVariables Array of attribute variables object.
         * @param string $breakpointName Breakpoint name from responsiveAttribute's breakpoint in block's/component's manifest.
         * @param integer $breakpointIndex Index of responsiveAttribute's breakpoint in manifest.
         * @param integer $numberOfBreakpoints Number of responsiveAttribute breakpoints in block's/component's manifest.
         *
         * @return array<int, mixed>
         */
        private static function setBreakpointResponsiveVariables(array $attributeVariables, string $breakpointName, int $breakpointIndex, int $numberOfBreakpoints): array {}

        /**
         * Iterating through variables matching the keys from responsiveAttributes and translating it to responsive attributes names.
         *
         * @param array<string, mixed> $responsiveAttributes Responsive attributes that are read from component's/block's manifest.
         * @param array<string, mixed> $variables Object containing objects with component's/block's attribute variables that are read from manifest.
         *
         * @return array<string, array<string, mixed>> Array prepared for setting all the variables to its breakpoints.
         */
        private static function setupResponsiveVariables(array $responsiveAttributes, array $variables): array {}

        /**
         * Extracting the names of default breakpoints depending on the case used in responsive(mobile first/desktop first).
         * Returning the 'min' key with default name for mobile first, and the 'max' key for desktop first version.
         * If there are no breakpoints, min and max will be empty strings.
         *
         * @param array<string, mixed> $breakpoints Attributes that are read from component's/block's manifest.
         *
         * @return array<string, mixed> Associative array with min and max keys.
         */
        private static function getDefaultBreakpoints(array $breakpoints): array {}

        /**
         * Iterating through variables matching the keys from responsiveAttributes and translating it to responsive attributes names.
         *
         * @param array<string, mixed> $attributes Attributes that are read from component's/block's manifest.
         * @param array<string, array<string, mixed>> $variables Variables that are read from component's/block's manifest.
         * @param array<int|string, mixed> $data Predefined structure for adding styles to a specific breakpoint value.
         * @param array<string, mixed> $manifest Component/block manifest data.
         * @param array<string, mixed> $defaultBreakpoints Default breakpoints for mobile/desktop first.
         *
         * @return array<int|string, mixed> Array prepared for setting all the variables to its breakpoints.
         */
        private static function setVariablesToBreakpoints(array $attributes, array $variables, array $data, array $manifest, array $defaultBreakpoints): array {}

        /**
         * Create initial array of data to be able to populate later.
         *
         * @param array<string, mixed> $globalBreakpoints Global breakpoints from global manifest to set the correct output.
         *
         * @return array<int, array<string, mixed>>
         */
        private static function prepareVariableData(array $globalBreakpoints): array {}

        /**
         * Internal helper to loop CSS Variables from array.
         *
         * @param array<string, mixed> $variables Array of variables of CSS variables.
         * @param mixed $attributeValue Original attribute value used in magic variable.
         *
         * @return array<int, mixed>|string[]
         */
        private static function variablesInner(array $variables, $attributeValue): array {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{
    use WP_Error;

    /**
     * Error logger trait.
     */
    trait ErrorLoggerTrait
    {
        /**
         * Ensure correct response for rest using handler function.
         *
         * @param integer     $code Response Status code.
         * @param string      $status Response Status name (success/error).
         * @param string|null $msg Response Message.
         * @param array|null  $data Response additional data.
         *
         * @return WP_REST_Response|WP_Error If response generated an error, WP_Error,
         *                                     if response is already an instance, WP_REST_Response,
         *                                     otherwise returns a new WP_REST_Response instance.
         */
        public function restResponseHandler(int $code, string $status, ?string $msg, ?array $data = null) {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{
    use EightshiftBoilerplateVendor\EightshiftLibs\Exception\InvalidNouns;

    /**
     * Class LabelGeneratorTrait Helper
     */
    trait LabelGeneratorTrait
    {
        /**
         * Get automatically generated labels from a singular and an optional
         * plural noun.
         *
         * @param array<string> $nouns Array of nouns to use for the labels.
         *
         * @return string[] array Array of labels.
         * @throws InvalidNouns Invalid nouns exception.
         */
        protected function getGeneratedLabels(array $nouns): array {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{
    use DOMDocument;
    use EightshiftBoilerplateVendor\EightshiftLibs\Exception\InvalidManifest;

    /**
     * Class Object Helper
     */
    trait ObjectHelperTrait
    {
        /**
         * Check if XML is valid file used for svg.
         *
         * @param string $xml Full xml document.
         *
         * @return boolean
         */
        public function isValidXml(string $xml) {}

        /**
         * Check if json is valid
         *
         * @param string $string String to check.
         *
         * @return bool
         */
        public static function isJson(string $string): bool {}

        /**
         * Flatten multidimensional array.
         *
         * @param array<mixed> $array Multidimensional array.
         *
         * @return array<mixed>
         */
        public static function flattenArray(array $array): array {}

        /**
         * Sanitize all values in an array.
         *
         * @link https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/
         *
         * @param array<mixed> $array Provided array.
         * @param string $sanitizationFunction WordPress function used for sanitization purposes.
         *
         * @return array<mixed>
         */
        public static function sanitizeArray(array $array, string $sanitizationFunction): array {}

        /**
         * Sort array by order key. Used to sort terms.
         *
         * @param array<mixed> $items Items array to sort. Must have order key.
         *
         * @return array<mixed>
         */
        public static function sortArrayByOrderKey(array $items): array {}

        /**
         * Convert string from camel to kebab case
         *
         * @param string $string String to convert.
         *
         * @return string
         */
        public static function camelToKebabCase(string $string): string {}

        /**
         * Convert string from kebab to camel case
         *
         * @param string $string    String to convert.
         * @param string $separator Separator to use for conversion.
         *
         * @return string
         */
        public static function kebabToCamelCase(string $string, string $separator = '-'): string {}

        /**
         * Check if provided array is associative or sequential. Will return true if array is sequential.
         *
         * @param array<string, mixed>|string[] $array Array to check.
         *
         * @return boolean
         */
        public static function arrayIsList(array $array): bool {}

        /**
         * Helper method to check the validity of JSON string
         *
         * @link https://stackoverflow.com/a/15198925/629127
         *
         * @param string $string JSON string to validate.
         *
         * @throws InvalidManifest Error in the case json file has errors.
         *
         * @return array<string, mixed> Parsed JSON string into an array.
         */
        public static function parseManifest(string $string): array {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

    /**
     * Class PostTrait helper.
     */
    trait PostTrait
    {
        /**
         * Return content reading time
         *
         * This helper will parse blocks, strip all the empty spaces and
         * HTML tags, and count the words in the string.
         *
         * We take that the average reading speed is 200 words per minute.
         * The rest is math :D.
         *
         * @param int $postID ID of post content to calculate.
         * @param int $averageWordCount Average reading speed.
         *
         * @return int reading time integer.
         */
        public static function getReadingTime(int $postID, int $averageWordCount = 200): int {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{
    use EightshiftBoilerplateVendor\EightshiftLibs\Exception\ComponentException;

    /**
     * Class SelectorsTrait Helper
     */
    trait SelectorsTrait
    {
        /**
         * Return a BEM class selector and check if Condition part is set.
         *
         * @param array<string>|bool|string $condition Check condition. Must be a truthy value!
         *                                             Otherwise the result will be an empty string.
         * @param string $block BEM Block selector.
         * @param string $element BEM Element selector.
         * @param string $modifier BEM Modifier selector.
         *
         * @return string
         */
        public static function selector($condition, string $block, string $element = '', string $modifier = ''): string {}

        /**
         * Create responsive selectors used for responsive attributes.
         *
         * Example:
         * Components::responsiveSelectors($attributes['width'], 'width', $block_class);
         *
         * Output:
         * block-column__width-large--4
         *
         * @param array<int|string, array<string>|bool|string> $items Array of breakpoints.
         * @param string $selector Selector for this breakpoint.
         * @param string $parent Parent block selector.
         * @param boolean $useModifier If false you can use this selector for visibility.
         *
         * @return string
         */
        public static function responsiveSelectors(array $items, string $selector, string $parent, bool $useModifier = true): string {}

        /**
         * Makes sure the output is string. Useful for converting an array of components into a string.
         * If you pass an associative array it will output strings with keys, used for generating data-attributes from array.
         *
         * @param array<string, mixed>|string[]|string $variable Variable we need to convert into a string.
         *
         * @throws ComponentException When $variable is not a string or array.
         *
         * @return string
         */
        public static function ensureString($variable): string {}

        /**
         * Converts an array of classes into a string which can be echoed.
         *
         * @param array<string> $classes Array of classes.
         *
         * @return string
         */
        public static function classnames(array $classes): string {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

    /**
     * Class ShortcodeTrait Helper
     */
    trait ShortcodeTrait
    {
        /**
         * Call a shortcode function by tag name.
         *
         * @param string $tag The shortcode whose function to call.
         * @param array<mixed> $attr The attributes to pass to the shortcode function. Optional.
         * @param string|null $content The shortcode's content. Default is null (none).
         *
         * @return string|bool False on failure, the result of the shortcode on success.
         * @author J.D. Grimes
         *
         * @link https://codesymphony.co/dont-do_shortcode/
         */
        public static function getShortcode(string $tag, array $attr = [/** value is missing */], ?string $content = null) {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

    /**
     * Class StoreTrait Helper
     */
    trait StoreTrait
    {
        /**
         * Store default state
         *
         * @var array<mixed>
         */
        public static $defaultState = [/** value is missing */];

        /**
         * Get full store name.
         *
         * @return string
         */
        public static function getStoreName(): string {}

        /**
         * Set internal store.
         *
         * @return void
         */
        public static function setStore(): void {}

        /**
         * Get store details.
         *
         * @return array<mixed>
         */
        public static function getStore(): array {}

        /**
         * Set blocks details.
         *
         * @param array<mixed> $blocks Blocks list to store.
         *
         * @return void
         */
        public static function setBlocks(array $blocks): void {}

        /**
         * Get blocks details.
         *
         * @return array<mixed>
         */
        public static function getBlocks(): array {}

        /**
         * Get block details.
         *
         * @param string $block Block name to get.
         *
         * @return array<mixed>
         */
        public static function getBlock(string $block): array {}

        /**
         * Set components details.
         *
         * @param array<mixed> $components Components list to store.
         *
         * @return void
         */
        public static function setComponents(array $components): void {}

        /**
         * Get components details.
         *
         * @return array<mixed>
         */
        public static function getComponents(): array {}

        /**
         * Get component details.
         *
         * @param string $component Componennt name to get.
         * @return array<mixed>
         */
        public static function getComponent(string $component): array {}

        /**
         * Set all config flags overriding from global settings manifest.json.
         *
         * @return void
         */
        public static function setConfigFlags(): void {}

        /**
         * Get all global config settings.
         *
         * @return array<mixed>
         */
        public static function getConfig(): array {}

        /**
         * Set global config setting for output css globally.
         *
         * @param boolean $config Config value.
         *
         * @return void
         */
        public static function setConfigOutputCssGlobally(bool $config): void {}

        /**
         * Get global config value for output css globally.
         *
         * @return boolean
         */
        public static function getConfigOutputCssGlobally(): bool {}

        /**
         * Set global config setting for output css optimize.
         *
         * @param boolean $config Config value.
         *
         * @return void
         */
        public static function setConfigOutputCssOptimize(bool $config): void {}

        /**
         * Get global config value for output css optimize.
         *
         * @return boolean
         */
        public static function getConfigOutputCssOptimize(): bool {}

        /**
         * Set global config setting for output css selector name.
         *
         * @param string $config Config value.
         *
         * @return void
         */
        public static function setConfigOutputCssSelectorName(string $config): void {}

        /**
         * Get global config value for output css selector name.
         *
         * @return string
         */
        public static function getConfigOutputCssSelectorName(): string {}

        /**
         * Set global config value for output css globally additional styles.
         *
         * @param array<string> $config Config value.
         *
         * @return void
         */
        public static function setConfigOutputCssGloballyAdditionalStyles(array $config): void {}

        /**
         * Get global config value for output css globally additional styles.
         *
         * @return array<string>
         */
        public static function getConfigOutputCssGloballyAdditionalStyles(): array {}

        /**
         * Set global config value for use wrapper.
         *
         * @param bool $config Config value.
         *
         * @return void
         */
        public static function setConfigUseWrapper(bool $config): void {}

        /**
         * Get global config value for use wrapper.
         *
         * @return bool
         */
        public static function getConfigUseWrapper(): bool {}

        /**
         * Set wrapper details.
         *
         * @param array<mixed> $wrapper Wrapper details to set.
         *
         * @return void
         */
        public static function setWrapper(array $wrapper): void {}

        /**
         * Get wrapper details.
         *
         * @return array<mixed>
         */
        public static function getWrapper(): array {}

        /**
         * Get wrapper details - attributes.
         *
         * @return array<mixed>
         */
        public static function getWrapperAttributes(): array {}

        /**
         * Set global settings details.
         *
         * @param array<mixed> $settings Settings details to store.
         *
         * @return void
         */
        public static function setSettings(array $settings): void {}

        /**
         * Get global settings details.
         *
         * @return array<mixed>
         */
        public static function getSettings(): array {}

        /**
         * Get global settings details - block class prefix.
         *
         * @return string
         */
        public static function getSettingsBlockClassPrefix(): string {}

        /**
         * Get global settings details - attributes.
         *
         * @return array<mixed>
         */
        public static function getSettingsAttributes(): array {}

        /**
         * Get global settings details - namespace.
         *
         * @return string
         */
        public static function getSettingsNamespace(): string {}

        /**
         * Get global settings details - global variables.
         *
         * @return array<mixed>
         */
        public static function getSettingsGlobalVariables(): array {}

        /**
         * Get global settings details - global variables custom block name.
         *
         * @return string
         */
        public static function getSettingsGlobalVariablesCustomBlockName(): string {}

        /**
         * Set global settings details - global variables breakpoints.
         *
         * @param array<string> $breakpoints Breakpoints to store.
         *
         * @return void
         */
        public static function setSettingsGlobalVariablesBreakpoints(array $breakpoints): void {}

        /**
         * Get global settings details - global variables breakpoints.
         *
         * @return array<mixed>
         */
        public static function getSettingsGlobalVariablesBreakpoints(): array {}

        /**
         * Get global settings details - global variables colors.
         *
         * @return array<mixed>
         */
        public static function getSettingsGlobalVariablesColors(): array {}

        /**
         * Set styles details full array.
         *
         * @param array<mixed> $styles Styles to set.
         *
         * @return void
         */
        public static function setStyles(array $styles): void {}

        /**
         * Set styles details.
         *
         * @param array<mixed> $style Style to store.
         *
         * @return void
         */
        public static function setStyle(array $style): void {}

        /**
         * Get styles details.
         *
         * @return array<mixed>
         */
        public static function getStyles(): array {}

    }
}
