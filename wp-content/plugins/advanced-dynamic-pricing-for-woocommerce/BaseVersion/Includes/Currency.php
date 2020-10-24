<?php

namespace ADP\BaseVersion\Includes;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Currency {
	/**
	 * @var string
	 */
	protected $code;

	/**
	 * @var float
	 */
	protected $rate;

	/**
	 * @var string
	 */
	protected $symbol;

	public function __construct( $code, $symbol, $rate = 1.0 ) {
		$this->setCode( $code );
		$this->setSymbol( $symbol );
		$this->setRate( $rate );

		if ( $this->code === null || $this->symbol == null || $this->rate === null ) {
			throw new \Exception( "Wrong currency init!" );
		}
	}

	/**
	 * @param string $code
	 *
	 * @return self
	 */
	public function setCode( $code ) {
		if ( is_string( $code ) ) {
			$this->code = $code;
		}

		return $this;
	}

	/**
	 * @param float $rate
	 *
	 * @return self
	 */
	public function setRate( $rate ) {
		if ( is_numeric( $rate ) ) {
			$this->rate = floatval( $rate );
		}

		return $this;
	}

	/**
	 * @param string $symbol
	 *
	 * @return self
	 */
	public function setSymbol( $symbol ) {
		if ( is_string( $symbol ) ) {
			$this->symbol = $symbol;
		}

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * @return float
	 */
	public function getRate() {
		return $this->rate;
	}

	/**
	 * @return string
	 */
	public function getSymbol() {
		return $this->symbol;
	}
}