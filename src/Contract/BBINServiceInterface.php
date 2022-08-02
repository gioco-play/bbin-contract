<?php
declare(strict_types=1);
namespace GiocoPlus\BBIN\Contract;
/**
 * BBIN
 */
interface BBINServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param string $language
     * @param string $vendorCode
     * @param string $backUrl
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language, string $vendorCode, string $backUrl = null);

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @param string $vendorCode
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId, string $vendorCode);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $opCode
     * @param integer $pastMinutes
     * @param string $cacheKey
     * @param string $vendorCode
     * @return mixed
     */
    function betLogGrabber(string $opCode, int $pastMinutes, string $cacheKey, string $vendorCode);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param integer $pastMinutes
     * @param string $vendorCode
     * @return mixed
     */
    function betLogGrabberAll(int $pastMinutes, string $vendorCode);

    /**
     * 遊戲上分
     *
     * @param string $opCode
     * @param string $account
     * @param string $vendorCode
     * @return mixed
     */
    function gameTransferIn(string $opCode, string $account, string $vendorCode);

    /**
     * 遊戲下分
     *
     * @param string $opCode
     * @param string $account
     * @param float $amount
     * @param string $vendorCode
     * @return mixed
     */
    function gameTransferOut(string $opCode, string $account, float $amount, string $vendorCode);

    /**
     * 取得錢包餘額
     *
     * @param string $opCode
     * @param string $account
     * @param string $vendorCode
     * @return mixed
     */
    function getBalance(string $opCode, string $account, string $vendorCode);

    /**
     * 上/下分失敗 訂單檢核
     *
     * @param string $opCode
     * @param string $orderNo
     * @param string $vendorCode
     * @return mixed
     */
    function orderFailCheck(string $opCode, string $orderNo, string $vendorCode);

    /**
     * GF 會員帳號 轉成 BBIN 會員帳號
     * @param string $opCode
     * @param $vendor
     * @param string $memberCode
     * @return mixed
     */
    function accountToVendor(string $opCode, $vendor, string $memberCode);

    /**
     * BBIN 會員帳號 轉成 GF 會員帳號
     * @param string $opCode
     * @param $vendor
     * @param string $vendorAccount
     * @return mixed
     */
    function accountToOperator(string $opCode, $vendor, string $vendorAccount);
}

