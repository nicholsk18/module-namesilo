<?php
/**
 * Namesilo API response handler
 *
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://opensource.org/licenses/mit-license.php MIT License
 * @package namesilo
 */
class NamesiloResponse
{
    /**
     * @var SimpleXMLElement The XML parsed response from the API
     */
    private $xml;
    /**
     * @var string The raw response from the API
     */
    private $raw;

    /**
     * Initializes the Namesilo Response
     *
     * @param string $response The raw XML response data from an API request
     */
    public function __construct($response)
    {
        $this->raw = $response;

        try {
            $this->xml = new SimpleXMLElement($this->sanitizeXml($this->raw));
        } catch (Exception $e) {
            // Invalid response
        }
    }

    /**
     * Converts HTML5 named entities in an XML string into numeric character references
     *
     * @param string $raw The raw XML string
     * @return string The sanitized XML string
     */
    private function sanitizeXml($raw)
    {
        return preg_replace_callback(
            '/&(?!(?:amp|lt|gt|apos|quot);)([a-zA-Z][a-zA-Z0-9]*);/',
            function ($matches) {
                $decoded = html_entity_decode('&' . $matches[1] . ';', ENT_HTML5 | ENT_QUOTES, 'UTF-8');
                if ($decoded === '&' . $matches[1] . ';') {
                    return $matches[0];
                }
                return '&#' . mb_ord($decoded, 'UTF-8') . ';';
            },
            $raw
        );
    }

    /**
     * Returns the CommandResponse
     *
     * @return stdClass A stdClass object representing the CommandResponses, null if invalid response
     */
    public function response($assoc = false)
    {
        if ($this->xml && $this->xml instanceof SimpleXMLElement) {
            return $this->formatResponse($this->xml->reply, $assoc);
        }
        return null;
    }

    /**
     * Returns the CommandResponse in XML
     * @return SimpleXMLElement A SimpleXMLElement object representing the CommandResponses, null if invalid response
     */
    public function responseXML()
    {
        if ($this->xml && $this->xml instanceof SimpleXMLElement) {
            return $this->xml->reply;
        }
        return null;
    }

    /**
     * Returns the status of the API Responses
     *
     * @return string The status (300 = success)
     */
    public function status()
    {
        # To do: add status codes
        if ($this->xml && $this->xml instanceof SimpleXMLElement) {
            return (string)$this->xml->reply->code;
        }
        return null;
    }

    /**
     * Returns all errors contained in the response
     *
     * @return stdClass A stdClass object representing the errors in the response, false if invalid response
     */
    public function errors()
    {
        if ($this->xml && $this->xml instanceof SimpleXMLElement) {
            return $this->formatResponse($this->xml->reply->detail);
        }
        return false;
    }

    /**
     * Returns all warnings contained in the response
     *
     * @return stdClass A stdClass object representing the warnings in the response, false if invalid response
     */
    public function warnings()
    {
        if ($this->xml && $this->xml instanceof SimpleXMLElement) {
            return $this->formatResponse($this->xml->Warnings);
        }
        return false;
    }

    /**
     * Returns the raw response
     *
     * @return string The raw response
     */
    public function raw()
    {
        return $this->raw;
    }

    /**
     * Formats the given $data into a stdClass object by first JSON encoding, then JSON decoding it
     *
     * @param mixed $data The data to convert to a stdClass object
     * @return stdClass $data in a stdClass object form
     */
    private function formatResponse($data, $assoc = false)
    {
        $data = json_decode(json_encode($data));
        $data = $this->formatAttributes($data);

        return json_decode(json_encode($data), $assoc);
    }

    /**
     * Formats the SimpleXML parsed response, removing @attributes
     *
     * @param stdClass $attributes The object to format
     * @return stdClass A stdClass object with the attributes properly formatted
     */
    private function formatAttributes($attributes)
    {
        if (!empty($attributes)) {
            foreach ($attributes as $key => $attribute) {
                if (is_array($attribute)) {
                    $attributes->{$key} = $this->formatAttributes((object) $attribute);
                    $attributes->{$key} = (array) $attributes->{$key};
                }

                if (is_object($attribute)) {
                    $attributes->{$key} = $this->formatAttributes($attribute);

                    if (isset($attribute->{'@attributes'})) {
                        unset($attributes->{$key}->{'@attributes'});
                    }
                }

                if (isset($attributes->{$key}) && !is_scalar($attributes->{$key})) {
                    foreach ($attributes->{$key} as $a_key => $items) {
                        if (!is_scalar($items)) {
                            if (count((array) $items) == 1 && is_array($attributes->{$key})) {
                                $attributes->{$key}[$a_key] = $items->{0};
                            }

                            if (count((array) $items) == 1 && is_object($attributes->{$key})) {
                                if (isset($items->{0})) {
                                    $attributes->{$key}->{$a_key} = $items->{0};
                                }
                            }
                        }
                    }
                }
            }
        }

        return $attributes;
    }
}
