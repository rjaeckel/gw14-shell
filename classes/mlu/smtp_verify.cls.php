<?php
/**
 * Created by PhpStorm.
 * User: abewm
 * Date: 8/5/15
 * Time: 9:22 AM
 */

namespace mlu;

use mlu\groupwise\xsd\resource;

/**
 * Class smtp_verify
 *
 * @package mlu
 *
 * simple smtp-connector to verify remote addresses using smtp handshake
 */

class smtp_verify {
	/** @var resource the active socket */
	protected $sock;
	/** @var string server and port to connect */
	protected $server;
	/** @var string tracks the last server response */
	protected $lastResponse;
	/** @var bool enable verbose output */
	public $debug=false;

	function __construct($server,$port=25) {
		$this->server="$server:$port";
	}

	/**
	 * @return bool
	 */
	function connected() {
		return is_resource($this->sock);
	}

	/**
	 * connect to smtp server
	 * @return bool
	 */
	function connect() {
		if ($this->connected()) return false;
		$this->sock=stream_socket_client($this->server);
		$this->debugLog(fgets($this->sock),"<<");
		return $this->connected();
	}

	/**
	 * write string to output if $debug==true and return the string
	 * @param string $str string to log
	 * @param string $prepend text to prepend to the output; will not be returned
	 *
	 * @return string
	 */
	protected function debugLog($str,$prepend='') {
		$str=trim($str);
		if($this->debug) echo "$prepend $str\n";
		return $str;
	}

	/**
	 * sends a command to the server CRLF will be appended
	 * @param string $str commmand to send
	 *
	 * @return string server's response
	 */
	protected function io($str) {
		@fputs($this->sock,$this->debugLog($str,'>>')."\r\n");
		return $this->lastResponse=$this->debugLog(@fgets($this->sock),'<<');
	}

	/**
	 * send HELO command
	 * @param string $identify identification id
	 *
	 * @return string server response
	 */
	function helo($identify="smtp_verify") {
		return $this->io("helo $identify");
	}

	/**
	 * send MAIL FROM command
	 * @param string $addr email address
	 *
	 * @return string server response
	 */
	function from($addr) {
		return $this->io("mail from: <$addr>");
	}

	/**
	 * send RCPT TO command
	 * @param string $addr email address
	 *
	 * @return string server response
	 */
	function to($addr) {
		return $this->io("rcpt to: <$addr>");
	}

	/**
	 * send RSET command to start over again without reconnect
	 * @return string server response
	 */
	function reset() {
		return $this->io("RSET");
	}

	/**
	 * send QUIT command to signal client side connection close;
	 * usually the server closes the socket aferwards
	 *
	 * @return string server response
	 */
	function quit() {
		return $this->io("QUIT");
	}

	/**
	 * close active socket
	 * @return bool
	 */
	function close() {
		return fclose($this->sock);
	}

	function __destruct() {
		if($this->connected()) $this->quit();
		@$this->close();
	}

	/**
	 * checks last server response for "250 OK"
	 * @return bool
	 */
	function isOK () {
		return 0===strpos($this->lastResponse,"250 ");
	}

	/**
	 * get the last server response
	 * @return string
	 */
	function lastResponse() {
		return $this->lastResponse;
	}
}