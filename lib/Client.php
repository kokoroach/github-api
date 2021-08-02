<?php

/**
 * Simple PHP GitHub client.
 *
 * TODOs
 * 
 */

class Client
{
    
 public function api($name): AbstractApi
 {
    //  TODOs
 }
 
 public function authenticate($tokenOrLogin, $password = null, $authMethod = null): void
 {
     
 }
 
 public function getApiVersion(): string
 {
     return $this->apiVersion;
 }
 
}