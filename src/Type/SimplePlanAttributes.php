<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
namespace Killbill\Client\Type;


/*
 *                       DO NOT EDIT!!!
 *    File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */


class SimplePlanAttributes extends \Killbill\Client\Resource {
  protected $planId = null;
  protected $productName = null;
  protected $productCategory = null;
  protected $currency = null;
  protected $amount = null;
  protected $billingPeriod = null;
  protected $trialLength = null;
  protected $trialTimeUnit = null;
  protected $availableBaseProducts = null;

  public function setPlanId ($planId) {
    $this->planId = $planId;
  }

  public function getPlanId () {
    return $this->planId;
  }

  public function setProductName ($productName) {
    $this->productName = $productName;
  }

  public function getProductName () {
    return $this->productName;
  }

  public function setProductCategory ($productCategory) {
    $this->productCategory = $productCategory;
  }

  public function getProductCategory () {
    return $this->productCategory;
  }

  public function setCurrency ($currency) {
    $this->currency = $currency;
  }

  public function getCurrency () {
    return $this->currency;
  }

  public function setAmount ($amount) {
    $this->amount = $amount;
  }

  public function getAmount () {
    return $this->amount;
  }

  public function setBillingPeriod ($billingPeriod) {
    $this->billingPeriod = $billingPeriod;
  }

  public function getBillingPeriod () {
    return $this->billingPeriod;
  }

  public function setTrialLength ($trialLength) {
    $this->trialLength = $trialLength;
  }

  public function getTrialLength () {
    return $this->trialLength;
  }

  public function setTrialTimeUnit ($trialTimeUnit) {
    $this->trialTimeUnit = $trialTimeUnit;
  }

  public function getTrialTimeUnit () {
    return $this->trialTimeUnit;
  }

  public function setAvailableBaseProducts ($availableBaseProducts) {
    $this->availableBaseProducts = $availableBaseProducts;
  }

  public function getAvailableBaseProducts () {
    return $this->availableBaseProducts;
  }

}
