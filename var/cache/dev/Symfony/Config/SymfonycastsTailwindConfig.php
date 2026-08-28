<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SymfonycastsTailwindConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $inputCss;
    private $configFile;
    private $binary;
    private $binaryVersion;
    private $binaryPlatform;
    private $postcssConfigFile;
    private $strictMode;
    private $processTimeout;
    private $_usedProperties = [];
    private $_hasDeprecatedCalls = false;

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function inputCss(mixed $value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['inputCss'] = true;
        $this->inputCss = $value;

        return $this;
    }

    /**
     * Path to the tailwind.config.js file
     * @default '%kernel.project_dir%/tailwind.config.js'
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function configFile($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['configFile'] = true;
        $this->configFile = $value;

        return $this;
    }

    /**
     * The tailwind binary to use instead of downloading a new one
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function binary($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['binary'] = true;
        $this->binary = $value;

        return $this;
    }

    /**
     * Tailwind CLI version to download - required unless "binary" is set (run "tailwind:init" to configure)
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function binaryVersion($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['binaryVersion'] = true;
        $this->binaryVersion = $value;

        return $this;
    }

    /**
     * Tailwind CLI platform to download - "auto" will try to detect the platform automatically
     * @default 'auto'
     * @param ParamConfigurator|'auto'|'linux-arm64'|'linux-arm64-musl'|'linux-x64'|'linux-x64-musl'|'macos-arm64'|'macos-x64'|'windows-x64' $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function binaryPlatform($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['binaryPlatform'] = true;
        $this->binaryPlatform = $value;

        return $this;
    }

    /**
     * Path to PostCSS config file which is passed to the Tailwind CLI
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function postcssConfigFile($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['postcssConfigFile'] = true;
        $this->postcssConfigFile = $value;

        return $this;
    }

    /**
     * When enabled, an exception will be thrown if there are no built assets (default: false in `test` env, true otherwise)
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function strictMode($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['strictMode'] = true;
        $this->strictMode = $value;

        return $this;
    }

    /**
     * Timeout in seconds for the Tailwind build process - use "0" to disable
     * @default 60
     * @param ParamConfigurator|int $value
     * @return $this
     * @deprecated since Symfony 7.4
     */
    public function processTimeout($value): static
    {
        $this->_hasDeprecatedCalls = true;
        $this->_usedProperties['processTimeout'] = true;
        $this->processTimeout = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'symfonycasts_tailwind';
    }

    public function __construct(array $config = [])
    {
        if (array_key_exists('input_css', $config)) {
            $this->_usedProperties['inputCss'] = true;
            $this->inputCss = $config['input_css'];
            unset($config['input_css']);
        }

        if (array_key_exists('config_file', $config)) {
            $this->_usedProperties['configFile'] = true;
            $this->configFile = $config['config_file'];
            unset($config['config_file']);
        }

        if (array_key_exists('binary', $config)) {
            $this->_usedProperties['binary'] = true;
            $this->binary = $config['binary'];
            unset($config['binary']);
        }

        if (array_key_exists('binary_version', $config)) {
            $this->_usedProperties['binaryVersion'] = true;
            $this->binaryVersion = $config['binary_version'];
            unset($config['binary_version']);
        }

        if (array_key_exists('binary_platform', $config)) {
            $this->_usedProperties['binaryPlatform'] = true;
            $this->binaryPlatform = $config['binary_platform'];
            unset($config['binary_platform']);
        }

        if (array_key_exists('postcss_config_file', $config)) {
            $this->_usedProperties['postcssConfigFile'] = true;
            $this->postcssConfigFile = $config['postcss_config_file'];
            unset($config['postcss_config_file']);
        }

        if (array_key_exists('strict_mode', $config)) {
            $this->_usedProperties['strictMode'] = true;
            $this->strictMode = $config['strict_mode'];
            unset($config['strict_mode']);
        }

        if (array_key_exists('process_timeout', $config)) {
            $this->_usedProperties['processTimeout'] = true;
            $this->processTimeout = $config['process_timeout'];
            unset($config['process_timeout']);
        }

        if ($config) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($config)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['inputCss'])) {
            $output['input_css'] = $this->inputCss;
        }
        if (isset($this->_usedProperties['configFile'])) {
            $output['config_file'] = $this->configFile;
        }
        if (isset($this->_usedProperties['binary'])) {
            $output['binary'] = $this->binary;
        }
        if (isset($this->_usedProperties['binaryVersion'])) {
            $output['binary_version'] = $this->binaryVersion;
        }
        if (isset($this->_usedProperties['binaryPlatform'])) {
            $output['binary_platform'] = $this->binaryPlatform;
        }
        if (isset($this->_usedProperties['postcssConfigFile'])) {
            $output['postcss_config_file'] = $this->postcssConfigFile;
        }
        if (isset($this->_usedProperties['strictMode'])) {
            $output['strict_mode'] = $this->strictMode;
        }
        if (isset($this->_usedProperties['processTimeout'])) {
            $output['process_timeout'] = $this->processTimeout;
        }
        if ($this->_hasDeprecatedCalls) {
            trigger_deprecation('symfony/config', '7.4', 'Calling any fluent method on "%s" is deprecated; pass the configuration to the constructor instead.', $this::class);
        }

        return $output;
    }

}
