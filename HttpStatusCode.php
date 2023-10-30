<?php


 
class HttpStatusCode {
    private function __construct(){}
    private function __clone(){}

    public static $CONTINUE=100;
    public static $SWITCHING=101;
    public static $PROCESSING=102;
    public static $EARLY=103;
    public static $OK=200;
    public static $CREATED=201;
    public static $ACCEPTED=202;
    public static $NON_AUTHORITATIVE=203;
    public static $NO=204;
    public static $RESET=205;
    public static $PARTIAL=206;
    public static $MULTI_STATUS=207;
    public static $ALREADY=208;
    public static $IM=226;
    public static $MULTIPLE=300;
    public static $MOVED=301;
    public static $FOUND=302;
    public static $SEE=303;
    public static $NOT=304;
    public static $TEMPORARY=307;
    public static $PERMANENT=308;
    public static $BAD=400;
    public static $UNAUTHORIZED=401;
    public static $PAYMENT=402;
    public static $FORBIDDEN=403;
    public static $NOT_FOUND=404;
    public static $METHOD=405;
    public static $NOT_ACCEPTABLE=406;
    public static $PROXY=407;
    public static $REQUEST=408;
    public static $CONFLICT=409;
    public static $GONE=410;
    public static $LENGTH=411;
    public static $PRECONDITION=412;
    public static $CONTENT=413;
    public static $URI=414;
    public static $UNSUPPORTED=415;
    public static $RANGE=416;
    public static $EXPECTATION=417;
    public static $I_M=418;
    public static $MISDIRECTED=421;
    public static $UNPROCESSABLE=422;
    public static $LOCKED=423;
    public static $FAILED=424;
    public static $TOO=425;
    public static $UPGRADE=426;
    public static $PRECONDITION_REQUIRED=428;
    public static $TOO_MANY_REQUESTS=429;
    public static $UNAVAILABLE=451;
    public static $INTERNAL_SERVER_ERROR=500;
    public static $NOT_IMPLEMENTED=501;
    public static $BAD_GATAWAY=502;
    public static $SERVICE=503;
    public static $GATEWAY=504;
    public static $HTTP=505;
    public static $VARIANT=506;
    public static $INSUFFICIENT=507;
    public static $LOOP=508;
    public static $NOT_EXTENDED=510;
    public static $NETWORK=511;



}
