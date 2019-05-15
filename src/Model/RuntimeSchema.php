<?php
/**
 * RuntimeSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SCORM Cloud Rest API
 *
 * REST API used for SCORM Cloud integrations.
 *
 * OpenAPI spec version: 2.0 beta
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.3
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RusticiSoftware\Cloud\V2\Model;

use \ArrayAccess;
use \RusticiSoftware\Cloud\V2\ObjectSerializer;

/**
 * RuntimeSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RuntimeSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RuntimeSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'completion_status' => 'string',
        'credit' => 'string',
        'entry' => 'string',
        'exit' => 'string',
        'learner_preference' => '\RusticiSoftware\Cloud\V2\Model\LearnerPreferenceSchema',
        'location' => 'string',
        'mode' => 'string',
        'progress_measure' => 'string',
        'score_scaled' => 'string',
        'score_raw' => 'string',
        'score_min' => 'string',
        'score_max' => 'string',
        'total_time' => 'string',
        'time_tracked' => 'string',
        'runtime_success_status' => 'string',
        'suspend_data' => 'string',
        'learner_comments' => '\RusticiSoftware\Cloud\V2\Model\CommentSchema[]',
        'lms_comments' => '\RusticiSoftware\Cloud\V2\Model\CommentSchema[]',
        'runtime_interactions' => '\RusticiSoftware\Cloud\V2\Model\RuntimeInteractionSchema[]',
        'runtime_objectives' => '\RusticiSoftware\Cloud\V2\Model\RuntimeObjectiveSchema[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'completion_status' => null,
        'credit' => null,
        'entry' => null,
        'exit' => null,
        'learner_preference' => null,
        'location' => null,
        'mode' => null,
        'progress_measure' => null,
        'score_scaled' => null,
        'score_raw' => null,
        'score_min' => null,
        'score_max' => null,
        'total_time' => null,
        'time_tracked' => null,
        'runtime_success_status' => null,
        'suspend_data' => null,
        'learner_comments' => null,
        'lms_comments' => null,
        'runtime_interactions' => null,
        'runtime_objectives' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'completion_status' => 'completionStatus',
        'credit' => 'credit',
        'entry' => 'entry',
        'exit' => 'exit',
        'learner_preference' => 'learnerPreference',
        'location' => 'location',
        'mode' => 'mode',
        'progress_measure' => 'progressMeasure',
        'score_scaled' => 'scoreScaled',
        'score_raw' => 'scoreRaw',
        'score_min' => 'scoreMin',
        'score_max' => 'scoreMax',
        'total_time' => 'totalTime',
        'time_tracked' => 'timeTracked',
        'runtime_success_status' => 'runtimeSuccessStatus',
        'suspend_data' => 'suspendData',
        'learner_comments' => 'learnerComments',
        'lms_comments' => 'lmsComments',
        'runtime_interactions' => 'runtimeInteractions',
        'runtime_objectives' => 'runtimeObjectives'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completion_status' => 'setCompletionStatus',
        'credit' => 'setCredit',
        'entry' => 'setEntry',
        'exit' => 'setExit',
        'learner_preference' => 'setLearnerPreference',
        'location' => 'setLocation',
        'mode' => 'setMode',
        'progress_measure' => 'setProgressMeasure',
        'score_scaled' => 'setScoreScaled',
        'score_raw' => 'setScoreRaw',
        'score_min' => 'setScoreMin',
        'score_max' => 'setScoreMax',
        'total_time' => 'setTotalTime',
        'time_tracked' => 'setTimeTracked',
        'runtime_success_status' => 'setRuntimeSuccessStatus',
        'suspend_data' => 'setSuspendData',
        'learner_comments' => 'setLearnerComments',
        'lms_comments' => 'setLmsComments',
        'runtime_interactions' => 'setRuntimeInteractions',
        'runtime_objectives' => 'setRuntimeObjectives'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completion_status' => 'getCompletionStatus',
        'credit' => 'getCredit',
        'entry' => 'getEntry',
        'exit' => 'getExit',
        'learner_preference' => 'getLearnerPreference',
        'location' => 'getLocation',
        'mode' => 'getMode',
        'progress_measure' => 'getProgressMeasure',
        'score_scaled' => 'getScoreScaled',
        'score_raw' => 'getScoreRaw',
        'score_min' => 'getScoreMin',
        'score_max' => 'getScoreMax',
        'total_time' => 'getTotalTime',
        'time_tracked' => 'getTimeTracked',
        'runtime_success_status' => 'getRuntimeSuccessStatus',
        'suspend_data' => 'getSuspendData',
        'learner_comments' => 'getLearnerComments',
        'lms_comments' => 'getLmsComments',
        'runtime_interactions' => 'getRuntimeInteractions',
        'runtime_objectives' => 'getRuntimeObjectives'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const RUNTIME_SUCCESS_STATUS_UNKNOWN = 'UNKNOWN';
    const RUNTIME_SUCCESS_STATUS_PASSED = 'PASSED';
    const RUNTIME_SUCCESS_STATUS_FAILED = 'FAILED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRuntimeSuccessStatusAllowableValues()
    {
        return [
            self::RUNTIME_SUCCESS_STATUS_UNKNOWN,
            self::RUNTIME_SUCCESS_STATUS_PASSED,
            self::RUNTIME_SUCCESS_STATUS_FAILED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['completion_status'] = isset($data['completion_status']) ? $data['completion_status'] : null;
        $this->container['credit'] = isset($data['credit']) ? $data['credit'] : null;
        $this->container['entry'] = isset($data['entry']) ? $data['entry'] : null;
        $this->container['exit'] = isset($data['exit']) ? $data['exit'] : null;
        $this->container['learner_preference'] = isset($data['learner_preference']) ? $data['learner_preference'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['progress_measure'] = isset($data['progress_measure']) ? $data['progress_measure'] : null;
        $this->container['score_scaled'] = isset($data['score_scaled']) ? $data['score_scaled'] : null;
        $this->container['score_raw'] = isset($data['score_raw']) ? $data['score_raw'] : null;
        $this->container['score_min'] = isset($data['score_min']) ? $data['score_min'] : null;
        $this->container['score_max'] = isset($data['score_max']) ? $data['score_max'] : null;
        $this->container['total_time'] = isset($data['total_time']) ? $data['total_time'] : null;
        $this->container['time_tracked'] = isset($data['time_tracked']) ? $data['time_tracked'] : null;
        $this->container['runtime_success_status'] = isset($data['runtime_success_status']) ? $data['runtime_success_status'] : 'UNKNOWN';
        $this->container['suspend_data'] = isset($data['suspend_data']) ? $data['suspend_data'] : null;
        $this->container['learner_comments'] = isset($data['learner_comments']) ? $data['learner_comments'] : null;
        $this->container['lms_comments'] = isset($data['lms_comments']) ? $data['lms_comments'] : null;
        $this->container['runtime_interactions'] = isset($data['runtime_interactions']) ? $data['runtime_interactions'] : null;
        $this->container['runtime_objectives'] = isset($data['runtime_objectives']) ? $data['runtime_objectives'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRuntimeSuccessStatusAllowableValues();
        if (!is_null($this->container['runtime_success_status']) && !in_array($this->container['runtime_success_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'runtime_success_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets completion_status
     *
     * @return string
     */
    public function getCompletionStatus()
    {
        return $this->container['completion_status'];
    }

    /**
     * Sets completion_status
     *
     * @param string $completion_status completion_status
     *
     * @return $this
     */
    public function setCompletionStatus($completion_status)
    {
        $this->container['completion_status'] = $completion_status;

        return $this;
    }

    /**
     * Gets credit
     *
     * @return string
     */
    public function getCredit()
    {
        return $this->container['credit'];
    }

    /**
     * Sets credit
     *
     * @param string $credit credit
     *
     * @return $this
     */
    public function setCredit($credit)
    {
        $this->container['credit'] = $credit;

        return $this;
    }

    /**
     * Gets entry
     *
     * @return string
     */
    public function getEntry()
    {
        return $this->container['entry'];
    }

    /**
     * Sets entry
     *
     * @param string $entry entry
     *
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->container['entry'] = $entry;

        return $this;
    }

    /**
     * Gets exit
     *
     * @return string
     */
    public function getExit()
    {
        return $this->container['exit'];
    }

    /**
     * Sets exit
     *
     * @param string $exit exit
     *
     * @return $this
     */
    public function setExit($exit)
    {
        $this->container['exit'] = $exit;

        return $this;
    }

    /**
     * Gets learner_preference
     *
     * @return \RusticiSoftware\Cloud\V2\Model\LearnerPreferenceSchema
     */
    public function getLearnerPreference()
    {
        return $this->container['learner_preference'];
    }

    /**
     * Sets learner_preference
     *
     * @param \RusticiSoftware\Cloud\V2\Model\LearnerPreferenceSchema $learner_preference learner_preference
     *
     * @return $this
     */
    public function setLearnerPreference($learner_preference)
    {
        $this->container['learner_preference'] = $learner_preference;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets progress_measure
     *
     * @return string
     */
    public function getProgressMeasure()
    {
        return $this->container['progress_measure'];
    }

    /**
     * Sets progress_measure
     *
     * @param string $progress_measure progress_measure
     *
     * @return $this
     */
    public function setProgressMeasure($progress_measure)
    {
        $this->container['progress_measure'] = $progress_measure;

        return $this;
    }

    /**
     * Gets score_scaled
     *
     * @return string
     */
    public function getScoreScaled()
    {
        return $this->container['score_scaled'];
    }

    /**
     * Sets score_scaled
     *
     * @param string $score_scaled score_scaled
     *
     * @return $this
     */
    public function setScoreScaled($score_scaled)
    {
        $this->container['score_scaled'] = $score_scaled;

        return $this;
    }

    /**
     * Gets score_raw
     *
     * @return string
     */
    public function getScoreRaw()
    {
        return $this->container['score_raw'];
    }

    /**
     * Sets score_raw
     *
     * @param string $score_raw score_raw
     *
     * @return $this
     */
    public function setScoreRaw($score_raw)
    {
        $this->container['score_raw'] = $score_raw;

        return $this;
    }

    /**
     * Gets score_min
     *
     * @return string
     */
    public function getScoreMin()
    {
        return $this->container['score_min'];
    }

    /**
     * Sets score_min
     *
     * @param string $score_min score_min
     *
     * @return $this
     */
    public function setScoreMin($score_min)
    {
        $this->container['score_min'] = $score_min;

        return $this;
    }

    /**
     * Gets score_max
     *
     * @return string
     */
    public function getScoreMax()
    {
        return $this->container['score_max'];
    }

    /**
     * Sets score_max
     *
     * @param string $score_max score_max
     *
     * @return $this
     */
    public function setScoreMax($score_max)
    {
        $this->container['score_max'] = $score_max;

        return $this;
    }

    /**
     * Gets total_time
     *
     * @return string
     */
    public function getTotalTime()
    {
        return $this->container['total_time'];
    }

    /**
     * Sets total_time
     *
     * @param string $total_time total_time
     *
     * @return $this
     */
    public function setTotalTime($total_time)
    {
        $this->container['total_time'] = $total_time;

        return $this;
    }

    /**
     * Gets time_tracked
     *
     * @return string
     */
    public function getTimeTracked()
    {
        return $this->container['time_tracked'];
    }

    /**
     * Sets time_tracked
     *
     * @param string $time_tracked time_tracked
     *
     * @return $this
     */
    public function setTimeTracked($time_tracked)
    {
        $this->container['time_tracked'] = $time_tracked;

        return $this;
    }

    /**
     * Gets runtime_success_status
     *
     * @return string
     */
    public function getRuntimeSuccessStatus()
    {
        return $this->container['runtime_success_status'];
    }

    /**
     * Sets runtime_success_status
     *
     * @param string $runtime_success_status runtime_success_status
     *
     * @return $this
     */
    public function setRuntimeSuccessStatus($runtime_success_status)
    {
        $allowedValues = $this->getRuntimeSuccessStatusAllowableValues();
        if (!is_null($runtime_success_status) && !in_array($runtime_success_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'runtime_success_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['runtime_success_status'] = $runtime_success_status;

        return $this;
    }

    /**
     * Gets suspend_data
     *
     * @return string
     */
    public function getSuspendData()
    {
        return $this->container['suspend_data'];
    }

    /**
     * Sets suspend_data
     *
     * @param string $suspend_data suspend_data
     *
     * @return $this
     */
    public function setSuspendData($suspend_data)
    {
        $this->container['suspend_data'] = $suspend_data;

        return $this;
    }

    /**
     * Gets learner_comments
     *
     * @return \RusticiSoftware\Cloud\V2\Model\CommentSchema[]
     */
    public function getLearnerComments()
    {
        return $this->container['learner_comments'];
    }

    /**
     * Sets learner_comments
     *
     * @param \RusticiSoftware\Cloud\V2\Model\CommentSchema[] $learner_comments learner_comments
     *
     * @return $this
     */
    public function setLearnerComments($learner_comments)
    {
        $this->container['learner_comments'] = $learner_comments;

        return $this;
    }

    /**
     * Gets lms_comments
     *
     * @return \RusticiSoftware\Cloud\V2\Model\CommentSchema[]
     */
    public function getLmsComments()
    {
        return $this->container['lms_comments'];
    }

    /**
     * Sets lms_comments
     *
     * @param \RusticiSoftware\Cloud\V2\Model\CommentSchema[] $lms_comments lms_comments
     *
     * @return $this
     */
    public function setLmsComments($lms_comments)
    {
        $this->container['lms_comments'] = $lms_comments;

        return $this;
    }

    /**
     * Gets runtime_interactions
     *
     * @return \RusticiSoftware\Cloud\V2\Model\RuntimeInteractionSchema[]
     */
    public function getRuntimeInteractions()
    {
        return $this->container['runtime_interactions'];
    }

    /**
     * Sets runtime_interactions
     *
     * @param \RusticiSoftware\Cloud\V2\Model\RuntimeInteractionSchema[] $runtime_interactions runtime_interactions
     *
     * @return $this
     */
    public function setRuntimeInteractions($runtime_interactions)
    {
        $this->container['runtime_interactions'] = $runtime_interactions;

        return $this;
    }

    /**
     * Gets runtime_objectives
     *
     * @return \RusticiSoftware\Cloud\V2\Model\RuntimeObjectiveSchema[]
     */
    public function getRuntimeObjectives()
    {
        return $this->container['runtime_objectives'];
    }

    /**
     * Sets runtime_objectives
     *
     * @param \RusticiSoftware\Cloud\V2\Model\RuntimeObjectiveSchema[] $runtime_objectives runtime_objectives
     *
     * @return $this
     */
    public function setRuntimeObjectives($runtime_objectives)
    {
        $this->container['runtime_objectives'] = $runtime_objectives;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


