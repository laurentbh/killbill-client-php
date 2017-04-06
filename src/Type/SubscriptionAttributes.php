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


class SubscriptionAttributes extends \Killbill\Client\Resource {
  protected $accountId = null;
  protected $bundleId = null;
  protected $subscriptionId = null;
  protected $externalKey = null;
  protected $startDate = null;
  protected $productName = null;
  protected $productCategory = null;
  protected $billingPeriod = null;
  protected $phaseType = null;
  protected $priceList = null;
  protected $planName = null;
  protected $state = null;
  protected $sourceType = null;
  protected $cancelledDate = null;
  protected $chargedThroughDate = null;
  protected $billingStartDate = null;
  protected $billingEndDate = null;
  protected $billCycleDayLocal = null;
  protected $events = null;
  protected $priceOverrides = null;
  protected $auditLogs = null;

  public function setAccountId ($accountId) {
    $this->accountId = $accountId;
  }

  public function getAccountId () {
    return $this->accountId;
  }

  public function setBundleId ($bundleId) {
    $this->bundleId = $bundleId;
  }

  public function getBundleId () {
    return $this->bundleId;
  }

  public function setSubscriptionId ($subscriptionId) {
    $this->subscriptionId = $subscriptionId;
  }

  public function getSubscriptionId () {
    return $this->subscriptionId;
  }

  public function setExternalKey ($externalKey) {
    $this->externalKey = $externalKey;
  }

  public function getExternalKey () {
    return $this->externalKey;
  }

  public function setStartDate ($startDate) {
    $this->startDate = $startDate;
  }

  public function getStartDate () {
    return $this->startDate;
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

  public function setBillingPeriod ($billingPeriod) {
    $this->billingPeriod = $billingPeriod;
  }

  public function getBillingPeriod () {
    return $this->billingPeriod;
  }

  public function setPhaseType ($phaseType) {
    $this->phaseType = $phaseType;
  }

  public function getPhaseType () {
    return $this->phaseType;
  }

  public function setPriceList ($priceList) {
    $this->priceList = $priceList;
  }

  public function getPriceList () {
    return $this->priceList;
  }

  public function setPlanName ($planName) {
    $this->planName = $planName;
  }

  public function getPlanName () {
    return $this->planName;
  }

  public function setState ($state) {
    $this->state = $state;
  }

  public function getState () {
    return $this->state;
  }

  public function setSourceType ($sourceType) {
    $this->sourceType = $sourceType;
  }

  public function getSourceType () {
    return $this->sourceType;
  }

  public function setCancelledDate ($cancelledDate) {
    $this->cancelledDate = $cancelledDate;
  }

  public function getCancelledDate () {
    return $this->cancelledDate;
  }

  public function setChargedThroughDate ($chargedThroughDate) {
    $this->chargedThroughDate = $chargedThroughDate;
  }

  public function getChargedThroughDate () {
    return $this->chargedThroughDate;
  }

  public function setBillingStartDate ($billingStartDate) {
    $this->billingStartDate = $billingStartDate;
  }

  public function getBillingStartDate () {
    return $this->billingStartDate;
  }

  public function setBillingEndDate ($billingEndDate) {
    $this->billingEndDate = $billingEndDate;
  }

  public function getBillingEndDate () {
    return $this->billingEndDate;
  }

  public function setBillCycleDayLocal ($billCycleDayLocal) {
    $this->billCycleDayLocal = $billCycleDayLocal;
  }

  public function getBillCycleDayLocal () {
    return $this->billCycleDayLocal;
  }

  public function setEvents ($events) {
    $this->events = $events;
  }

  public function getEvents () {
    return $this->events;
  }

  public function setPriceOverrides ($priceOverrides) {
    $this->priceOverrides = $priceOverrides;
  }

  public function getPriceOverrides () {
    return $this->priceOverrides;
  }

  public function setAuditLogs ($auditLogs) {
    $this->auditLogs = $auditLogs;
  }

  public function getAuditLogs () {
    return $this->auditLogs;
  }

}
