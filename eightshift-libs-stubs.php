<?php
/** @noinspection ALL */

// @codingStandardsIgnoreFile

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{
    use EightshiftBoilerplateVendor\EightshiftLibs\Exception\ComponentException;

    /**
     * Helpers for components
     */
    class Components
    {
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
         * @param string[] $classes Array of classes.
         *
         * @return string
         */
        public static function classnames(array $classes): string {}

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
         * Merges attributes array with the manifest default attributes.
         *
         * @param array<string, mixed> $manifest Block/Component manifest data.
         * @param array<string, mixed> $attributes Block/Component rendered attributes data.
         *
         * @return array<string, mixed>
         */
        public static function getDefaultRenderAttributes(array $manifest, array $attributes): array {}

        /**
         * Get manifest json. Generally used for getting block/components manifest.
         *
         * @param string $path Absolute path to manifest folder.
         *
         * @throws ComponentException When we're unable to find the component by $component.
         *
         * @return array<string, mixed>
         */
        public static function getManifest(string $path): array {}

        /**
         * Create responsive selectors used for responsive attributes.
         *
         * Example:
         * Components::responsiveSelectors($attributes['width'], 'width', $block_class);
         *
         * Output:
         * block-column__width-large--4
         *
         * @param array<string, mixed> $items Array of breakpoints.
         * @param string $selector Selector for this breakpoint.
         * @param string $parent Parent block selector.
         * @param boolean $useModifier If false you can use this selector for visibility.
         *
         * @return string
         */
        public static function responsiveSelectors(array $items, string $selector, string $parent, bool $useModifier = true): string {}

        /**
         * Check if attribute exist in attributes list and add default value if not.
         * This is used because Block editor will not output attributes that don't have a default value.
         *
         * @param string $key Key to check.
         * @param array<string, mixed> $attributes Array of attributes.
         * @param array<string, mixed> $manifest Array of default attributes from manifest.json.
         *
         * @throws \Exception When we're unable to find the component by $component.
         *
         * @return mixed
         */
        public static function checkAttr(string $key, array $attributes, array $manifest) {}

        /**
         * Map and check attributes for responsive object.
         *
         * @param string $keyName Key name to find in the responsiveAttributes object.
         * @param array<string, mixed> $attributes Array of attributes.
         * @param array<string, mixed> $manifest Array of default attributes from manifest.json.
         *
         * @throws \Exception If missing responsiveAttributes or keyName in responsiveAttributes.
         * @throws \Exception If missing keyName in responsiveAttributes.
         *
         * @return array<mixed>
         */
        public static function checkAttrResponsive(string $keyName, array $attributes, array $manifest): array {}

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
         * Return a BEM class selector and check if Condition part is set.
         *
         * @param bool $condition Check condition.
         * @param string $block BEM Block selector.
         * @param string $element BEM Element selector.
         * @param string $modifier BEM Modifier selector.
         *
         * @return string
         */
        public static function selector(bool $condition, string $block, string $element = '', string $modifier = ''): string {}

        /**
         * Get Global Manifest.json and return globalVariables as css variables.
         *
         * @param array<string, mixed> $globalManifest Array of global variables data.
         *
         * @return string
         */
        public static function outputCssVariablesGlobal(array $globalManifest): string {}

        /**
         * Process and return global css variables based on the type.
         *
         * @param array<string, mixed> $itemValues Values of data to check.
         * @param string $itemKey Item key to check.
         *
         * @return string
         */
        public static function globalInner(array $itemValues, string $itemKey): string {}

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
         * Get component/block options and process them in CSS variables.
         *
         * @param array<string, mixed> $attributes Built attributes.
         * @param array<string, mixed> $manifest Component/block manifest data.
         * @param string $unique Unique key.
         * @param array<string, mixed> $globalManifest Global manifest array.
         *
         * @return string
         */
        public static function outputCssVariables(array $attributes, array $manifest, string $unique, array $globalManifest): string {}

        /**
         * Create initial array of data to be able to populate later.
         *
         * @param array<string, mixed> $globalBreakpoints Global breakpoints from global manifest to set the correct output.
         *
         * @return array<int, array<string, mixed>>
         */
        public static function prepareVariableData(array $globalBreakpoints): array {}

        /**
         * Internal helper to loop CSS Variables from array.
         *
         * @param array<string, mixed> $variables Array of variables of CSS variables.
         * @param mixed $attributeValue Original attribute value used in magic variable.
         *
         * @return array<int, mixed>|string[]
         */
        public static function variablesInner(array $variables, $attributeValue): array {}

        /**
         * Return unique ID for block processing.
         *
         * @return string
         */
        public static function getUnique(): string {}

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
         * Flatten multidimensional array in to a single array.
         *
         * @param array<string, mixed> $array Array to iterate.
         *
         * @return string[]|array<string, mixed>
         */
        public static function flattenArray(array $array): array {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

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
         * @return \WP_REST_Response|\WP_Error If response generated an error, WP_Error,
         *                                     if response is already an instance, WP_REST_Response,
         *                                     otherwise returns a new WP_REST_Response instance.
         */
        public function restResponseHandler(int $code, string $status, ?string $msg, ?array $data = null) {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

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
         * @param array $array Multidimensional array.
         *
         * @return array
         */
        public static function flattenArray(array $array): array {}

        /**
         * Sanitize all values in an array.
         *
         * @link https://developer.wordpress.org/themes/theme-security/data-sanitization-escaping/
         *
         * @param array  $array Provided array.
         * @param string $sanitizationFunction WordPress function used for sanitization purposes.
         *
         * @return array
         */
        public static function sanitizeArray(array $array, string $sanitizationFunction): array {}

        /**
         * Sort array by order key. Used to sort terms.
         *
         * @param array $items Items array to sort. Must have order key.
         * @return array
         */
        public static function sortArrayByOrderKey(array $items): array {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

    /**
     * Post class helper
     */
    class Post
    {
        /**
         * Average reading speed.
         *
         * @var int
         */
        const AVERAGE_WORD_COUNT = 200;

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
         *
         * @return int reading time integer.
         */
        public static function getReadingTime(int $postID): int {}

    }
}

namespace EightshiftBoilerplateVendor\EightshiftLibs\Helpers
{

    /**
     * Class Shortcode
     */
    class Shortcode
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

